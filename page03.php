<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Border</title>    
  <!-- My CSS -->
    <link rel="stylesheet" href="css/page03.css">
    <!-- <script src="js/page02.js" defer></script> -->

    <!-- Lien vers la feuille de style Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> 

    <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Sélection de tous les éléments mini-card
      var miniCards = document.querySelectorAll('.mini-card');
      
      // Parcourir chaque mini-card
      miniCards.forEach(function(miniCard) {
        // Ajouter un écouteur d'événement de clic à chaque mini-card
        miniCard.addEventListener('click', function() {
          // Récupérer le texte de la mini-card sur laquelle l'utilisateur a cliqué
          var miniCardText = miniCard.textContent.trim();
          // Afficher l'alerte avec le texte de la mini-card
          alert('Vous avez cliqué sur : ' + miniCardText);
        });
      });
    });
  </script>
</head>
<body>
    <div class="techsys-center-wrapper">
        <div class="techsys-container">
            <div class="techsys-titre-app">Appartement près de la catedrale d'albi parking gratuit</div>
            <!-- Titre -->
            <div class="techsys-top-section">
                <div class="image-container">
                    <img src="https://unportraitpro.franckbarrieres.fr/wp-content/uploads/2022/02/Photo-CV-Lille-Un-Portrait-Pro-Lille-Franck-BARRIERES-Photographe-Lille-051.jpg" alt="Image">
                </div>
                <div class="text-container">
                    <p id="content">Ad sit est voluptate cupidatat. ex est voluptate cupidatat.ex dolore.</p>
                </div>
            </div>
            <div class="techsys-element">
                <!-- Nouvelle section pour les mini cartes -->
                <div class="mini-card-section">
                    <div class="mini-card">
                        <i class="fas fa-wifi"></i> wi-fi
                    </div>
                    <div class="mini-card">
                        <i class="fas fa-calculator"></i> digicode
                    </div>
                    <div class="mini-card">
                        <i class="fas fa-map-marker-alt"></i> autour
                    </div>
                    <div class="mini-card">
                        <i class="fas fa-phone"></i> num. utiles
                    </div>
                    <div class="mini-card">
                        <i class="fas fa-info-circle"></i> info
                    </div>
                    <div class="mini-card">
                        <i class="fas fa-calendar-alt"></i> les avis
                    </div>
                </div>

                <div class="techsys-arrow-button">
                    <i class="fas fa-arrow-left"></i>
                    <label>  1/2  </label>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
            
            <div class="techsys-botton-section">
                <p id="content">Dévéloppé par techsysprogram</p>
            </div>
        </div>
    </div>
</body>



</html>
