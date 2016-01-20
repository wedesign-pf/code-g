{extends file="{$templateParent}"}
{block name=content}
{$field_actif}
{$field_datetime}
	<section><div class="row">{$field_titre}</div></section>
    <section><div class="row">{$field_email}</div></section>
    <section><div class="row">{$field_mdp}</div></section>
	<section><div class="row">{$field_confirm_mdp}</div></section>
    <section><div class="row">{$field_id_type}</div></section>
{/block}
