<?php
    session_start();
    include("init.php"); 
    accessAuth();
   


$obj_article = new article("champ");
$obj_article->fields="id,titre,filtre1";
$result=$obj_article->query(); 
$list_champ=array();
$list_champ_crypte=array();
foreach($result as $datas){ 
    $list_champ[$datas["id"]]=$datas["titre"];
    if($datas["filtre1"]=="1") { 
        $list_champ_crypte[]=$datas["id"];
    }
}

$mySelect = new mySelect(__FILE__);
$mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "categories";
$mySelect->fields="list_champ";
$mySelect->where="actif=:actif AND id=:id";
$mySelect->whereValue["actif"]="1";
$mySelect->whereValue["id"]=$__GET['id-categorie'];
$result=$mySelect->query();
$row = current($result);


$list_champ_categorie=explode(",",$row["list_champ"]);


foreach($list_champ_categorie as $idChamp){ 
    
    
    $mySelect = new mySelect(__FILE__);
    $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "elements_champs";
    $mySelect->fields="valeur";
    $mySelect->where="id_element=:id_element AND id=:id";
    $mySelect->whereValue["id_element"]=$__GET['id-element'];
    $mySelect->whereValue["id"]=$idChamp;
    $resultValeur=$mySelect->query();
    $rowValeur = current($resultValeur);

    if($rowValeur["valeur"]!="") {
        if(in_array($idChamp,$list_champ_crypte)) { 
            $rowValeur["valeur"] = decrypt_string("KEY", $rowValeur["valeur"]); 
        }
    }
?>
<div class="form-group">
    <label class="col-sm-2 control-label"><?php echo $list_champ[$idChamp];?></label>
    <div class="col-sm-10">
        <input class="form-control" type="text" name='champ<?php echo $idChamp;?>' id='champ<?php echo $idChamp;?>' type='text' value="<?php echo htmlspecialchars($rowValeur["valeur"], ENT_QUOTES);?>"  >
    </div>
</div>
<?php
}
?>