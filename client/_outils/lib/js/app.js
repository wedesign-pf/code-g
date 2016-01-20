// Au chargement de la page
    $(function() {

        // Traitement pour un copier/coller 
            $( ".listChamp" ).on( "click", "i", function(event) {

                var Cible = $(event.target);
                var Parent = Cible.parent();
                var Champ = Parent.prev();

                clipboard.copy(Champ.text()).then(function(){
                    Champ.css('background','#6DDC77');
                }, function(err){
                    alert(err);
                });

            });


    });