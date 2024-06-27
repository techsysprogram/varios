
        // Utiliser jQuery pour sélectionner tous les éléments i avec la classe fas (Font Awesome Solid) et extraire leur classe
        jQuery(document).ready(function($) {
            function myFunction() { 
                alert("estoy : " + "aqui");
                $('i.fas').each(function() {
                    var classes = $(this).attr('class').split(/\s+/);
                    
                    // Parcourir chaque classe pour trouver celle qui commence par "fa-"
                    $.each(classes, function(index, className) {
                        if (className.startsWith('fa-')) {
                            // Utiliser une expression régulière pour extraire le nom de l'icône
                            var iconName = className.match(/fa-[\w-]+/)[0].replace('fa-', '');

                            // Ajouter le nom de l'icône à la liste
                            $('#iconList').append('<li>' + iconName + '</li>');
                        }
                    });
                });
            }
            myFunction();
            
        });