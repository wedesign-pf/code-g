<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel">Modifier l'élément #{$id_element}</h4>
</div>
<div class="modal-body">
    <form id="editForm" class="form-horizontal" method="POST">
      <input type="hidden" name="id_element" value="{$id_element}">
      <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Projet</label>
        <div class="col-sm-9">
          <select id="projet_select" name="id_projet" data-checked="{$select_check_projet}" class="form-control">
              <option value="" disabled="">Choisissez...</option>
              {foreach $list_projets as $k => $row}
                <option value="{$k}">{$row['titre']}</option>
              {/foreach}
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
              <input class='form-control' type="text" name="titre_element" value="{$list_elements[0]['titre']}"> 
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Categorie</label>
        <div class="col-sm-9">
          <select id="categorie_select" name="id_categorie" data-checked="{$select_check_categorie}" class="form-control">
              <option value="" disabled="">Choisissez...</option>
              {foreach $list_select_categorie as $k => $row}
                <option value="{$row['id']}">{$row['titre']}</option>
              {/foreach}
          </select>
        </div>
      </div>
      <hr>
      <div id="champs">
      {foreach $list_elements_champs[0] as $key => $row}
      <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">{$row['champ']}</label>
        <div class="col-sm-9">
              <input class='form-control' type="text" name="{$row['id']}" value="{$row['valeur']}"> 
        </div> 
      </div>
      {/foreach}  
        </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Remarques</label>
        <div class="col-sm-9">
            <textarea class='form-control' name="remarques">{$list_elements[0]['remarques']}</textarea> 
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

