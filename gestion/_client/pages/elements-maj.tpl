{extends file="{$templateParent}"}
{block name=content}
    {$field_creation_date}
    {$field_creation_utilisateur}
    <section><div class="row">{$field_id_projet}</div></section>
    <section><div class="row">{$field_actif}</div></section>
	<section><div class="row">{$field_titre}</div></section>
    <section><div class="row">{$field_id_categorie}</div></section>
    <div id="champs" class="pbm"></div>
    <section><div class="row">{$field_remarques}</div></section>
<script>
function changeCategorie(idc) {
    var param="ide={$idCurrent}&idc=" + idc;
    $.ajax({
			type: "GET",
			cache:false,
			url: '{$smarty.const.DOS_CLIENT_ADMIN}pages/elements-maj_ajax.php',
			data:param,
				success: function(data) {
					$("#champs").html(data);
				}
		});
}


function call_changeCategorie() {
    changeCategorie($("#id_categorie option:selected").val());
}

$(document).ready(function () {
    if($("#id_categorie option:selected").val()!="") {
        changeCategorie($("#id_categorie option:selected").val());
    }
})
</script>
{/block}