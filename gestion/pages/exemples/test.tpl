{extends file="{$templateParent}"}
{block name=content}
<style>
input.addClassTest{
  font-size:24px;
  background-color:rgba(255,1,5,1.00);
}
</style>
<section><div class="row">{$field_Finput}</div></section>
<script>
function test(xthis) {
	alert(xthis);	
}
</script>
{/block}	

