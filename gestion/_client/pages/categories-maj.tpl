{extends file="{$templateParent}"}
{block name=content}
{$field_actif}
{$field_datetime}
	<section><div class="row">{$field_titre}</div></section>
    <section><div class="row">{$field_list_champ}</div></section>
    <section><div class="row">{$field_list_type_utilisateur}</div></section>
{/block}
