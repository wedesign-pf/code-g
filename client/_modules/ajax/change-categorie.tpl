{foreach $list_elements_champs[0] as $key => $row}
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">{$row['champ']}</label>
        <div class="col-sm-9">
              <input class='form-control' type="text" name="{$row['id']}" value="{$row['valeur']}"> 
        </div> 
    </div>
{/foreach}

{foreach $list_elements_champs_null as $key => $row}
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">{$row['champ']}</label>
        <div class="col-sm-9">
              <input class='form-control' type="text" name="{$row['id']}" value="{$row['valeur']}"> 
        </div> 
    </div>
{/foreach}