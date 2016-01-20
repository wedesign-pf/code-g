<div id="faq_accordion">
    {foreach $faq as $item}
    <div class="blocQR">
        <div class="question">{$item.question}</div>
        <div class="reponse mts mbs">{$item.reponse}</div>
     </div>
    {/foreach}
</div>