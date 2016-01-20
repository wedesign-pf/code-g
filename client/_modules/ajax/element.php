<?php
    session_start();
    include_once("../../../init.php"); 

    accessAuth();
    $SessionIdType = $_SESSION['auth']['id_type'];

// Inclure l'objet controller
    include("../controller/controller.php");

    $data = new Controller();

    $data->get_elements($__GET['onglet'], $__GET['id'], null);
    $data->get_categories();
    $data->get_projets();
    $data->get_champs();
    $data->get_elements_champs();
    $data->get_list_champs_categories();



// Rendre la vue
    
    $smarty->assign('label_heading', $__GET['onglet']);
    $smarty->assign('title_heading', $__GET['value']);
    $smarty->assign('list_select_categorie', $data->result_categorie);
    $smarty->assign('list_elements', $data->list_elements);
    $smarty->assign('list_champs', $data->list_champs_categories);
    $smarty->assign('list_elements_champs', $data->list_elements_champs);
    $smarty->assign('list_categories', $data->list_categories);
    $smarty->assign('list_projets', $data->list_projets);
    $dataAjax = $smarty->fetch("element.tpl");
	echo $dataAjax;