$(function() {
    
    
}); // $(function()


//////// 
$(window).on("load", function() {

}); // window load


//////// 
$(document).ready( function(){

    
}); // document ready




//////// ACTIONS STANDARDS - Ne pas supprimer /////////////////////////////////////////////////////////

$(function() {


}); // $(function()

$(window).on("load", function() {

    // loader page --------------------------
	
    if(loader_page==1) {
        $("#loaderPage").fadeOut("slow");
        
        $('.showLoader').click(function (e) { 
            $("#loaderPage").fadeIn("fast");
        });
    }
    // --------------------------
    
}); // window load


$(document).ready( function(){

    // -------------------------
    
    // Outil: COLORBOX  --------------------------
    $('.boxImage').colorbox({opacity:0.8, close:'<span class="fa-stack fa-lg"><i class="fa fa-circle-o fa-stack-2x"></i><i class="fa fa-times fa-stack-1x"></i></span>', transition:'fade',loop:false, maxWidth:'95%', maxHeight:'95%'});
	$('.boxAjax').colorbox({opacity:0.8, close:'<span class="fa-stack fa-lg"><i class="fa fa-circle-o fa-stack-2x"></i><i class="fa fa-times fa-stack-1x"></i></span>', transition:'fade', width:'95%', height:'95%' });
    $('.boxIframe').colorbox({opacity:0.8, close:'<span class="fa-stack fa-lg"><i class="fa fa-circle-o fa-stack-2x"></i><i class="fa fa-times fa-stack-1x"></i></span>', iframe:true,transition:'fade',loop:false, width:'85%', height:'85%',maxWidth:'820',maxHeight:'700' });
    $('.boxVideo').colorbox({opacity:0.8, close:'<span class="fa-stack fa-lg"><i class="fa fa-circle-o fa-stack-2x"></i><i class="fa fa-times fa-stack-1x"></i></span>', iframe:true,transition:'fade',loop:false, width:'85%', height:'85%',maxWidth:'820',maxHeight:'500'});
     $('.boxModal').colorbox({opacity:0.8, close:'<span class="fa-stack fa-lg"><i class="fa fa-circle-o fa-stack-2x"></i><i class="fa fa-times fa-stack-1x"></i></span>', iframe:false,transition:'fade',loop:false, width:'85%',maxWidth:'800' });
    // -------------------------

    
}); // document ready