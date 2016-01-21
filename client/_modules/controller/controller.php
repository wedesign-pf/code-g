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
    
    
    public function get_list_champs_categories(){
        foreach($this->list_id_champs as $key => $row){
            foreach($this->list_id_champs[$key] as $k){
                $this->list_champs_categories[$key][$k] = $this->list_champs[$k];
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
        
        foreach($this->list_id_champs[$id_categorie] as $row){
            
            if(array_key_exists($row, $this->list_champs)){
            $this->list_elements_champs_null[]['champ'] = $this->list_champs[$row];
            
            }
        }

        
        
        
    }
    
    
        
    public function submit_edit($tableau){
        
        global $thisSite;
        
        
        $idElement = $tableau['id_element'];
        $titreElement = $new = htmlspecialchars($tableau['titre_element'], ENT_QUOTES);

        // Changer le titre de l'élément
        
        $PDO = new myPDO(); 
        
        $result = $PDO->free_requete("UPDATE ".$thisSite->PREFIXE_TBL_CLI . "elements SET titre='$titreElement' WHERE id=$idElement");
        //$result = $PDO->free_requete("UPDATE ".$thisSite->PREFIXE_TBL_CLI . "elements SET titre='TESTING' WHERE id=$idElement" );

        if(isset($result)){
            $tab = array('message' => 'success');
            echo json_encode($tab);
        }else{
            $tab = array('message' => 'error');
            echo json_encode($tab);
        }
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

}
?>