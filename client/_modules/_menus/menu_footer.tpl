<ul id="menuB">
{foreach $RUBSBas as $datasRUB}
    <li id="rub{$datasRUB.id}"  class="{$datasRUB.classA}" >
  	<a href="{$datasRUB.lien}" >{$datasRUB.titre}</a>
    </li>
{/foreach}
</ul><!--menuB-->