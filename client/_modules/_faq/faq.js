$(window).on("load", function() {
    $('#faq_accordion .question').click(function () {
        $this=$(this);
        $('#faq_accordion .question').removeClass('actif');
        $('#faq_accordion .reponse').addClass('hidden');
        $this.addClass('actif');	
        $this.next('.reponse').removeClass('hidden');
        
        $this.next('.reponse').slideDown('fast', function() {
            $('#faq_accordion .hidden').slideUp( "slow");
        });
        
	});
}); // window load
