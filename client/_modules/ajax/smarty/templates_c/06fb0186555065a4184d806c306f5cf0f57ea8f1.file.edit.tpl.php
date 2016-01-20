<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 12:34:09
         compiled from "edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1761056a00b615f1b45-79242981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06fb0186555065a4184d806c306f5cf0f57ea8f1' => 
    array (
      0 => 'edit.tpl',
      1 => 1453329246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1761056a00b615f1b45-79242981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_element' => 0,
    'select_check_projet' => 0,
    'list_projets' => 0,
    'k' => 0,
    'row' => 0,
    'list_elements' => 0,
    'select_check_categorie' => 0,
    'list_select_categorie' => 0,
    'list_elements_champs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56a00b6175f547_78789324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a00b6175f547_78789324')) {function content_56a00b6175f547_78789324($_smarty_tpl) {?><div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel">Modifier l'élément #<?php echo $_smarty_tpl->tpl_vars['id_element']->value;?>
</h4>
</div>
<div class="modal-body">
    <form id="editForm" class="form-horizontal" method="POST">
      <input type="hidden" name="id_element" value="<?php echo $_smarty_tpl->tpl_vars['id_element']->value;?>
">
      <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Projet</label>
        <div class="col-sm-9">
          <select id="projet_select" name="id_projet" data-checked="<?php echo $_smarty_tpl->tpl_vars['select_check_projet']->value;?>
" class="form-control">
              <option value="" disabled="">Choisissez...</option>
              <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_projets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['titre'];?>
</option>
              <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Actif</label>
        <div class="col-sm-9">
              <input type="radio" name="actif" value="1" checked> Oui 
                &nbsp;&nbsp;
              <input type="radio" name="actif" value="0"> Non
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Titre</label>
        <div class="col-sm-9">
              <input class='form-control' type="text" name="titre_element" value="<?php echo $_smarty_tpl->tpl_vars['list_elements']->value[0]['titre'];?>
"> 
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Categorie</label>
        <div class="col-sm-9">
          <select id="categorie_select" name="id_categorie" data-checked="<?php echo $_smarty_tpl->tpl_vars['select_check_categorie']->value;?>
" class="form-control">
              <option value="" disabled="">Choisissez...</option>
              <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_select_categorie']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['titre'];?>
</option>
              <?php } ?>
          </select>
        </div>
      </div>
      <hr>
      <div id="champs">
      <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_elements_champs']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
      <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3"><?php echo $_smarty_tpl->tpl_vars['row']->value['champ'];?>
</label>
        <div class="col-sm-9">
              <input class='form-control' type="text" name="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['valeur'];?>
"> 
        </div> 
      </div>
      <?php } ?>  
        </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Remarques</label>
        <div class="col-sm-9">
            <textarea class='form-control' name="remarques"><?php echo $_smarty_tpl->tpl_vars['list_elements']->value[0]['remarques'];?>
</textarea> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-success">Enregistrer</button>
      </div>
      <div id="submitForm"></div>
    </form>
</div>

<script>
    
    /* Traitement pour les champs select checked */
    var SelecCategorie = $('#categorie_select').attr('data-checked');
    var SelecProjet= $('#projet_select').attr('data-checked');

    $('#categorie_select option').each(function(event){
        
       if($(this).text() == SelecCategorie){

           $(this).attr('selected', 'selected');
       }
    });
    
    $('#projet_select option').each(function(event){
        
       if($(this).text() == SelecProjet){

           $(this).attr('selected', 'selected');
       }
    });
    
    
    /* Au changement de categorie */
    $("#categorie_select").change(function(){
        
        // Récupérer l'id de la catégorie
        var idCategorie = $(this).find("option:selected").val();
        
        // Faire un appel en ajax pour le traitement de donnée
        $.ajax({
            type: "POST",
            cache:false,
            url: 'client/_modules/ajax/element-maj.php',
            data:"action=change-categorie&onglet=Categorie&id="+idCategorie,
            dataType: 'html',
                success: function(data){
                    $("#champs").empty().append(data);
                }
        });  
        
        
    });
    
    
    /* Soumission du formulaire */
    $("#editForm").submit(function(event) {
        
        event.preventDefault();
        
        var formData = $(this).serialize();
        
        
        // Faire un appel en ajax pour le traitement de donnée
        $.ajax({
            type: "POST",
            cache:false,
            url: 'client/_modules/ajax/element-maj-submit.php',
            data:formData,
            dataType: 'html',
                success: function(data){
                    
                    $("#submitForm").empty().append(data);
                }
        });  
        
        
    });
    
</script>

<?php }} ?>
