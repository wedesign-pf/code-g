<!DOCTYPE html>
<!--[if IE 8]><html xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#" lang="{$thisSite->current_lang}" class="ie8 ie"> <![endif]-->
<!--[if IE 9]><html xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#" lang="{$thisSite->current_lang}" class="ie9 ie"> <![endif]-->
<!--[if gte IE 9]><html xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#" lang="{$thisSite->current_lang}" class="ie10 ie"> <![endif]-->
<!--[if !(IE)]><!-->
<html itemscope itemtype="http://schema.org/WebPage" xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#" lang="{$thisSite->current_lang}">
<!--<![endif]-->
<head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script><!--<![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="True"/>
<meta name="format-detection" content="telephone=no"/>
<meta name="robots" content="{$thisSite->metaTags.robots}" />
<meta name="author" content="{$thisSite->AUTHOR}" />
<base href="{$thisSite->racineWithLang}" target="_self" />
<link rel="canonical" href="{$thisSite->current_urlCanonical}" />
<title>{$thisSite->metaTags.title}</title>
<meta name="keywords" content="{$thisSite->metaTags.keywords}" />
<meta name="description" content="{$thisSite->metaTags.description}" />
<!-- FB OPENGRAPH -->
<meta property="og:site_name" content="{$thisSite->siteTitle}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{$thisSite->socialTags.titre}" />   
<meta property="og:description" content="{$thisSite->socialTags.texte}" />  
<meta property="og:image" content="{$thisSite->socialTags.image}" />
<meta property="og:url" content="{$thisSite->socialTags.lien}" />
{foreach $thisSite->LIST_LANG as $lg=>$liblg}
{if $lg eq $thisSite->current_lang }
<meta property="og:locale" content="{$lg}" />
{else}
<meta property="og:locale:alternate" content="{$lg}" />
<link rel="alternate" href="{$thisSite->RACINE}{$lg}" hreflang="{$lg}" />
{/if}
{/foreach}
<!-- TWITTER CARD -->
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="{$thisSite->socialTags.lien}">
<meta name="twitter:title" content="{$thisSite->socialTags.titre}">
<meta name="twitter:description" content="{$thisSite->socialTags.texte}">
<meta name="twitter:image" content="{$thisSite->socialTags.image}">
<!-- RICH SNIPPET -->
<script type="application/ld+json">
{   "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "{$thisSite->siteTitle}",
    "url" : "{$thisSite->racineWithLang}",
    "logo" : "{$thisSite->socialTags.image}",
    {$thisSite->richSnippet}
}
</script>

<!-- LINKS -->
{$MODULE_favicon}
<link rel="image_src" href="{$thisSite->socialTags.image}" />
<!-- pré-chargements -->
{foreach $thisSite->DNS_PREFETCH as $url}
<link rel="dns-prefetch" href="{$url}">
{/foreach}

<link href="{$thisSite->DOS_BASE_CSS}reset.css" rel="stylesheet" type="text/css" />
<link href="{$thisSite->skin}base.css" rel="stylesheet" type="text/css" />
<link href="{$thisSite->skin}style.css" rel="stylesheet" type="text/css" />
{if $thisSite->printCSS==true}<link href="{$thisSite->skin}print.css" rel="stylesheet" type="text/css" media="print"/>{/if}
<link href="{$thisSite->skin}font-awesome.css" rel="stylesheet" type="text/css" />
{if $PAGE_css_client[0] ne ""}
{foreach $PAGE_css_client as $elt}
<link href="{$elt}" rel="stylesheet" type="text/css" />
{/foreach}
{/if}
<link href="{$thisSite->skin}responsive.css" rel="stylesheet" type="text/css" />

<!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="{$thisSite->DOS_BASE}js/{$thisSite->JQUERY1}"></script>
<![endif]-->
<!--[if (gte IE 9) | (!IE)]><!-->
    <script type="text/javascript" src="{$thisSite->DOS_BASE}js/{$thisSite->JQUERY2}"></script>
<!--<![endif]-->
<script type="text/javascript" src="{$thisSite->DOS_BASE}js/{$thisSite->JQUERYM}"></script>
<script type="text/javascript" src="{$thisSite->DOS_BASE}js/commun.js"></script>
{if $PAGE_js_client[0] ne ""}
{foreach $PAGE_js_client as $elt}
<script type="text/javascript" src="{$elt}"></script>
{/foreach}
{/if}

{foreach $PAGE_head as $elt}
{if $elt ne ""} {$elt} {/if}
{/foreach}
{if $thisSite->googleAnalytics ne "" && $thisSite->SERVER ne "local" }
<script>{$thisSite->googleAnalytics}</script>
{/if}
{$PAGE_old_IE}{* Alerte si version IE trop ancienne *}
</head>
<body>
{if $thisSite->LOADER_PAGE eq 1 }<div id="loaderPage"></div>{/if}
{if $boutons_partage eq 1 }
{*<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
*}
{/if}
<a id="top"></a>
{* ------------ Contenu de la page en cours --------------------- *}
{$MODULE_header}
{if $thisSite->current_scriptTPL ne ""} {include file="{$thisSite->current_scriptTPL}"} {/if}
{$MODULE_footer}
{if $thisSite->cookiesAccept==1 && $thisSite->current_lang=="fr"}
<div id="cookiesOK">
	En poursuivant votre navigation sur ce site, vous acceptez l'utilisation des cookies qui nous permettent de vous proposer des services et une offre adapt&eacute;s &agrave; vos centres d'int&eacute;r&ecirc;ts. <a href="cookies_cgu" target="_blank">(En savoir plus)</a>
    <div class="close">OK</div>
</div>
{/if}
{* ------------  FIN contenu de la page en cours --------------------- *}
<script type="text/javascript" >
    var loader_page={$thisSite->LOADER_PAGE};

    
{if $PAGE_javascript[0] ne ""}

{foreach $PAGE_javascript as $elt}
	{if $elt ne ""} {$elt} {/if}
{/foreach}

{/if}
{if $PAGE_doc_ready[0] ne ""}

$(document).ready( function(){
{foreach $PAGE_doc_ready as $elt}
	{if $elt ne ""} {$elt} {/if}
{/foreach}
});
{/if}
{if $PAGE_win_load[0] ne ""}

$(window).on("load", function() {

{foreach $PAGE_win_load as $elt}
	{if $elt ne ""} {$elt} {/if}
{/foreach}
});
{/if}
</script>
{if $PAGE_footer[0] ne ""}

{foreach $PAGE_footer as $elt}
   {if $elt ne ""} {$elt} {/if}
{/foreach}
{/if}
<script type="text/javascript" src="{$thisSite->DOS_CLIENT}js/page.js"></script>
{if $thisSite->current_scriptJS ne ""} <script type="text/javascript" src="{$thisSite->current_scriptJS}"></script>{/if}
</body>
</html>