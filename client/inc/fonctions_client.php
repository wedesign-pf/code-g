<?php
	session_start();
    
    // Vérification de la Session
    function accessAuth(){
        if(empty($_SESSION['auth'])){
            header('Status: 301 Moved Permanently', true, 301);
            header('Location: ./');
            exit();
        }
        else{
            return;
        }
    }

    // Vérification du tableau
    function verifTab($data, $message){
        
        if(!$data){
            header('Status: 301 Moved Permanently', true, 301);
            header('Location: element');
            unset($_SESSION['notification']);
            $_SESSION['notification'] = $message;
            exit();
        }else{
            return;
        }
        
        
    }



?>




