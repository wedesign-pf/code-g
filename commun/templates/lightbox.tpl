<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#" lang="{$thisSite->current_lang}">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex,nofollow" />
<title>{$thisSite->metaTags.title}</title>
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
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="{$thisSite->socialTags.lien}">
<meta name="twitter:title" content="{$thisSite->socialTags.titre}">
<meta name="twitter:description" content="{$thisSite->socialTags.texte}">
<meta name="twitter:image:src" content="{$thisSite->socialTags.image}">

<base href="{$thisSite->racineWithLang}" target="_self" />
<link rel="canonical" href="{$thisSite->current_urlCanonical}" />

{foreach $thisSite->DNS_PREFETCH as $url}
<link rel="dns-prefetch" href="{$url}">
{/foreach}

<link href="{$thisSite->DOS_BASE_CSS}reset.css" rel="stylesheet" type="text/css" />
<link href="{$thisSite->skin}base.css" rel="stylesheet" type="text/css" />
<link href="{$thisSite->skin}style.css" rel="stylesheet" type="text/css" />
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
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="{$thisSite->DOS_BASE}js/{$thisSite->JQUERY2}"></script>
<![endif]-->
<script type="text/javascript" src="{$thisSite->DOS_BASE}js/{$thisSite->JQUERYM}"></script>
<!--<script type="text/javascript" src="{$thisSite->DOS_BASE}js/respimage.js"></script>
<script type="text/javascript" src="{$thisSite->DOS_BASE}js/lazysizes.js"></script>-->
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
<script> {$thisSite->googleAnalytics} </script>
{/if}
{$PAGE_old_IE}{* Alerte si version IE trop ancienne *}
</head>
<body id="bodyLB">
{* ------------ Contenu de la page en cours --------------------- *}
{if $thisSite->current_scriptTPL ne ""} {include file="{$thisSite->current_scriptTPL}"} {/if}
{* ------------  FIN contenu de la page en cours --------------------- *}
<script type="text/javascript" src="{$thisSite->DOS_CLIENT}js/lightbox.js"></script>
{if $thisSite->current_scriptJS ne ""} <script type="text/javascript" src="{$thisSite->current_scriptJS}"></script>{/if}
</body>
</html>