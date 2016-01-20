<?php
class AppController{


    public $article_req = array('projet', 'champ');
    public $select_req = array('categorie', 'element', 'elements_champs');
    
    public $table = null;
    public $result = null;

    
    public function check_req($name){
        
        $table = strtolower($name);

        if(in_array($table, $this->article_req)){
            $this->req_article($table);
        }else{
            $this->req_myselect($table);
        }  
        
    }
    
    
    public function req_article($name){

        $obj_article = new article($name);
        $obj_article->fields="id,titre";
        $obj_article->orderby="titre ASC";
        if(isset($this->id)){
        $obj_article->where="id=".$this->id;     
        }else{
        $obj_article->limit="1";    
        }
        $this->result = $obj_article->query();  

    }
    
    
    public function req_myselect($name){
        
        $mySelect = new mySelect(__FILE__);
        $mySelect->tables="$thisSite->PREFIXE_TBL_CLI .$name";
        $mySelect->fields="id,titre";
        $mySelect->where="actif=:actif";
        $mySelect->whereValue["actif"]="1";
        $mySelect->orderby="titre ASC";
        $this->result = $mySelect->query();
    }
    
}


?>