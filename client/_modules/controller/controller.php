<?php
class Controller{
    
    public $prefixAuteur = 'admin-'; 
    public $initTab = 'projet';
    
    public $delForm = 'edit';
    public $editForm = 'delete';
    
    public $list_elements;          // Liste des éléments
    public $list_projets;           // Liste des projets
    public $list_categories;        // Liste des catégories
    public $list_champs;            // Liste des champs
    public $element_categories;     // Liste des éléments par rapport aux catégories
    public $element_projets;        // Liste des éléments par rapport aux projets

    
    
    public function get_elements($tab, $id, $id_element){
   
        global $thisSite;

        if(!$id_element){
            
            $tab = strtolower($tab);
            $var = 'id_'.$tab;
            
            $mySelect = new mySelect(__FILE__);
            $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "elements";
            $mySelect->fields="*";
            $mySelect->where="actif=:actif AND ".$var."=:".$var;   
            $mySelect->whereValue["$var"]=$id;
            $mySelect->whereValue["actif"]="1";
            $mySelect->orderby="id ASC";
        
        }else{
            
            $mySelect = new mySelect(__FILE__);
            $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "elements";
            $mySelect->fields="*";
            $mySelect->where="actif=:actif AND id=:id";   
            $mySelect->whereValue["id"]=$id_element;
            $mySelect->whereValue["actif"]="1";
        }

        $this->list_elements=$mySelect->query();
        
        $this->del_prefix_auteur($this->list_elements, $this->prefixAuteur);

    }

    
    public function get_categories(){
        
        global $thisSite;
        
        $mySelect = new mySelect(__FILE__);
        $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "categories";
        $mySelect->fields="*";
        $mySelect->where="actif=:actif";
        $mySelect->whereValue["actif"]="1";
        $mySelect->orderby="titre ASC";
        $this->result_categorie = $mySelect->query();  

        foreach($this->result_categorie as $row){
            $temp=array();
            $temp["titre"]=$row["titre"];
            $temp["list_champ"]=$row["list_champ"];
            $temp["list_type_utilisateur"]=$row["list_type_utilisateur"];
            $this->list_categories[$row["id"]] = $temp;
            $this->list_id_champs[$row["id"]]=explode(",",$temp["list_champ"]);
            $this->list_champs_categorie[]=explode(",",$temp["list_champ"]);
        }
    }
    
    
    public function get_projets(){
        
        $obj_article = new article("projet");
        $obj_article->fields="id,titre";
        $obj_article->orderby="titre ASC";
        $result = $obj_article->query(); 

        foreach($result as $row){
            $temp=array();
            $temp["titre"]=$row["titre"];
            $this->list_projets[$row["id"]] = $temp;
        }
    }
    
    
    public function get_champs(){

        $obj_article = new article("champ");
        $obj_article->fields="id,titre,filtre1";
        $result=$obj_article->query(); 
        
        foreach($result as $row){ 
            $this->list_champs[$row["id"]]=$row["titre"];
            if($row["filtre1"]=="1"){ 
                $this->list_champ_crypte[]=$row["id"];
            }
        }
        
    } 

    
    public function get_elements_champs(){
        
        global $thisSite;
        
        foreach($this->list_elements as $klistE => $vlistE ){
            
            $mySelect = new mySelect(__FILE__);
            $mySelect->tables="g_code_elements_champs";
            $mySelect->fields="id,valeur";
            $mySelect->where="id_element=:id_element";
            $mySelect->whereValue["id_element"]=$vlistE['id'];
            $result[]=$mySelect->query();

            foreach($result[$klistE] as $k => $row){
                
                $list_valeurs = array();
                
                $this->list_elements_champs[$klistE][$k]['id']=$row['id']; 
            
                if(in_array($row['id'], $this->list_champ_crypte)){
                    $this->list_elements_champs[$klistE][$k]['valeur'] = decrypt_string('KEY', $row['valeur']);
                }else{
                    $this->list_elements_champs[$klistE][$k]['valeur'] = $row['valeur'];
                }
                
                if(array_key_exists($row['id'], $this->list_champs)){
                    $this->list_elements_champs[$klistE][$k]['champ'] = $this->list_champs[$row['id']];
                }
            }
        }
    }
        
    
    public function del_prefix_auteur($tableau, $prefix){

        foreach($tableau as $key => $data){
             $prefix_utilisateur[$key] = substr($data["creation_utilisateur"],0,6);
             if($prefix_utilisateur[$key] == $prefix){
                $nom_utilisateur[$key] = substr($data["creation_utilisateur"],6);
                $tableau[$key]["creation_utilisateur"] = ucfirst($nom_utilisateur[$key]);     
             }
        }

        $this->list_elements = $tableau;
    }

    
    public function delete($id){
        
        global $thisSite;

        /*
        $myUpdate = new myUpdate(__FILE__);
        $myUpdate->table=$thisSite->PREFIXE_TBL_CLI . "elements";
        $myUpdate ->field["actif"]=1;
        $myUpdate ->where="actif=:bind1";
        $myUpdate ->whereValue["bind1 "]=0;
        $result=$myUpdate->execute(1);
        */
        
        $PDO = new myPDO(); 
        
        $result = $PDO->free_requete("UPDATE ".$thisSite->PREFIXE_TBL_CLI . "elements SET actif=0 WHERE id=$id" );

        if(isset($result)){
            $tab = array('message' => 'success');
            echo json_encode($tab);
        }else{
            $tab = array('message' => 'error');
            echo json_encode($tab);
        }
    }
    
    
    // Récupérer les champs des catégories qui ne sont associés à aucun élément
    public function get_champs_null($id_categorie){

        $this->get_categories();
        $this->get_champs();

        foreach($this->list_id_champs[$id_categorie] as $k => $row){
            
            if(array_key_exists($row, $this->list_champs)){
                $this->list_elements_champs_null[$k]['id'] = $this->list_id_champs[$id_categorie][$k];
                $this->list_elements_champs_null[$k]['champ'] = $this->list_champs[$row];
            
            }
        }    
    }
    
    
        
    public function submit_edit($tableau){

        global $thisSite;
        $PDO = new myPDO(); 

        
        $idElement          =   $tableau['id_element'];
        $titreElement       =   htmlspecialchars($tableau['titre_element'], ENT_QUOTES);
        $remarquesElement   =   htmlspecialchars($tableau['remarques'], ENT_QUOTES);
        $idProjet           =   $tableau['id_projet'];
        $idCategorie        =   $tableau['id_categorie'];

        
        $this->update_elements_champs($tableau, $idElement);
        
        //$this->update_listchamp_categorie($tableau, $idCategorie);
            
        $this->sumbit_check_onglet($idProjet, $idCategorie, $idElement);
        
        // UPDATE ELEMENT
        $result = $PDO->free_requete("UPDATE ".$thisSite->PREFIXE_TBL_CLI . "elements 
                                        SET titre           =   '$titreElement',
                                            remarques       =   '$remarquesElement',
                                            id_projet       =   '$idProjet', 
                                            id_categorie    =   '$idCategorie' 
                                            WHERE id        =    $idElement");

        

        if(isset($result)){
            $this->tabJson = array('message'          =>  'success',
                         'id_element'       =>  $idElement,
                         'titre_element'    =>  $titreElement,
                         'remarques'        =>  $remarquesElement,
                         'clear_panel'      =>  $this->clear_panel,
                         'valeurs'          =>  $this->valeurs
                        );
            echo json_encode($this->tabJson);
        }else{
            $this->tabJson = array('message' => 'error');
            echo json_encode($this->tabJson);
        }
        
    }
    
    
    /*
        Cette methode permet de vérifier s'il y a changement de projet ou de categorie, si c'est le cas faire disparaître l'élément en question
    */
    public function sumbit_check_onglet($id_projet, $id_categorie, $id_element){

        
        global $thisSite;
         
        
        $mySelect = new mySelect(__FILE__);
        $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "elements";
        $mySelect->fields="*";
        $mySelect->where="actif=:actif AND id=:id AND id_projet=:id_projet AND id_categorie=:id_categorie";  
        $mySelect->whereValue["id"]=$id_element;
        $mySelect->whereValue["id_projet"]=$id_projet;
        $mySelect->whereValue["id_categorie"]=$id_categorie;
        $mySelect->whereValue["actif"]="1";
        $result =$mySelect->query();
        
        
        if(empty($result)){
            $this->clear_panel= true;
            return $this->clear_panel;
        }
        
    }

    public function update_listchamp_categorie($array, $id){
        
        global  $thisSite; 
        $PDO    =   new myPDO(); 
        $temp   =   array();
                
        foreach($array as $k => $row){    
            if(is_numeric($k)){
                $temp[$k]=$k;
            }
        }
        
        $listChamp = implode(",",$temp);
        
        $result = $PDO->free_requete("UPDATE ".$thisSite->PREFIXE_TBL_CLI . "categories 
                                      SET     list_champ  =   '$listChamp',
                                      WHERE   id          =    $id");
        

        
    }
        
        
    public function update_elements_champs($array, $id_element){
        
        global  $thisSite; 
        $PDO    =   new myPDO(); 
        $temp   =   array();
        
        $this->get_champs();
        
        
        foreach($array as $k => $row){    
            if(is_numeric($k)){
                if(in_array($k, $this->list_champ_crypte)){
                    $temp[$k]=crypt_string('KEY', $row);
                }else{
                    $temp[$k]=$row;
                }
            }
        }

        // UPDATE les valeurs saisie par l'utilisateur elements_champs
        foreach($temp as $key => $data){

            $result = $PDO->free_requete("UPDATE ".$thisSite->PREFIXE_TBL_CLI . "elements_champs 
                                SET valeur = '$data'
                                WHERE ".$thisSite->PREFIXE_TBL_CLI . "elements_champs.id_element = $id_element
                                AND ".$thisSite->PREFIXE_TBL_CLI . "elements_champs.id = $key");
            
        }

        
    
        /* decrypter le valeurs pour le rendre à la vue */
        foreach($temp as $kk => $vv){
            if(in_array($kk, $this->list_champ_crypte)){
                $temp[$kk]=decrypt_string('KEY', $vv);
            }
        }
        
        $this->valeurs = $temp;
        
        
    }
      
}
?>