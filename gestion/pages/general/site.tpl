{extends file="{$templateParent}"}
{block name=content}
	<section><div class="row">{$field_titre}</div></section>
    <section><div class="row">{$field_suffixe_title}</div></section>
	<section><div class="row">{$field_social_image}</div></section>
	<section><div class="row">{$field_skin}</div></section>
	<section><div class="row">{$field_etat}</div></section>
	<fieldset><legend>Google Analytics</legend>
	<section><div class="row">{$field_google_analytics}</div></section>
	</fieldset>
	<fieldset><legend>Facebook</legend>
	<section><div class="row">{$field_facebook_url}</div></section>
	<section><div class="row">{$field_facebook_app_id}</div></section>
	<section><div class="row">{$field_facebook_app_secret}</div></section>
	</fieldset>
	<fieldset><legend>Mailchimp</legend>
	<section><div class="row">{$field_mailchimp_list_id}</div></section>
	<section><div class="row">{$field_mailchimp_api_secret}</div></section>
	</fieldset>
	<section><div class="row">{$field_rich_snippet}</div></section>
	<section class="superAdmin"><div class="row">{$field_cookies_accept}</div></section>
	<section class="superAdmin"><div class="row">{$field_error_log}</div></section>
{/block}	
