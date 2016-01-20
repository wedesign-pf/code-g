<?php
    session_start();
    include_once("../../../init.php"); 

    accessAuth();
    $SessionIdType = $_SESSION['auth']['id_type'];

// Inclure l'objet controller
    include("../controller/controller.php");

    $data = new Controller();


    if($__POST['action'] == 'edit'){
        
        $data->get_elements(null, null, $__POST['id_element']);
        $data->get_categories();
        $data->get_projets();
        $data->get_champs();
        $data->get_elements_champs();
        
        // Rendre la vue

        $smarty->assign('list_select_categorie', $data->result_categorie);
        $smarty->assign('list_elements', $data->list_elements);
        $smarty->assign('list_champs', $data->list_champs_categories);
        $smarty->assign('list_elements_champs', $data->list_elements_champs);
        $smarty->assign('list_categories', $data->list_categories);
        $smarty->assign('list_projets', $data->list_projets);
        $smarty->assign('select_check_categorie', $__POST['categorie']);
        $smarty->assign('select_check_projet', $__POST['projet']);
        $smarty->assign('id_element', $__POST['id_element']);
        $dataAjax = $smarty->fetch("edit.tpl");
        echo $dataAjax;
  
    }

    if($__POST['action'] == 'change-categorie'){
        
        $data->get_elements($__POST['onglet'], $__POST['id'],null);
        if(empty($data->list_elements)){
          $data->get_champs_null($__POST['id']);  
        }
        $data->get_categories();
        $data->get_champs();
        $data->get_elements_champs();
        
        
        
        // Rendre la vue
        
        $smarty->assign('list_elements_champs', $data->list_elements_champs);
        $smarty->assign('list_elements_champs_null', $data->list_elements_champs_null);
        $dataAjax = $smarty->fetch("change-categorie.tpl");
        echo $dataAjax;
        
        
        
    }
    
    if($__POST['action'] == 'delete'){
        $data->delete($__POST['id']);
    }



?>