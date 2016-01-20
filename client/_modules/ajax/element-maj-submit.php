<?php
    session_start();
    include_once("../../../init.php"); 

    accessAuth();
    $SessionIdType = $_SESSION['auth']['id_type'];

// Inclure l'objet controller
    include("../controller/controller.php");

    $data = new Controller();
    
    
    if($__POST){
        
        $data->submit_edit($__POST);
        
    }
  
        
?>