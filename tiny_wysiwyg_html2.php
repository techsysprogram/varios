
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <script src="https://cdn.tiny.cloud/1/inz03qpbhxsobjihf2kwqx1csq2j3nzvev2nhqv83w5eao5g/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <style>
          /* Style pour limiter la hauteur maximale du textarea */
          #my_tini_html {
              max-height: 300px; /* Vous pouvez ajuster cette valeur selon vos besoins */
          }
      </style>
      <script>
          // Initialiser TinyMCE
          tinymce.init({
              selector: 'textarea#my_tini_html', // Sélecteur pour votre textarea
              plugins: 'link', // Plugin de lien
              toolbar: 'undo redo | link | forecolor backcolor', // Personnalisation de la barre d'outils
              menubar: false // Désactiver le menu supérieur
          });
          // Fonction pour récupérer le contenu de TinyMCE
          function getContenuHTML() {
              var contenuHTML = tinymce.get('my_tini_html').getContent();
              alert("Contenu HTML : " + contenuHTML);
          }
      </script>
  </head>

  <body>
      <!-- Formulaire avec textarea pour l'édition -->
      <form>
          <label for="my_tini_html">Description :</label>
          <textarea id="my_tini_html" name="description"></textarea><br>
      </form>

      <!-- Bouton pour récupérer le contenu de TinyMCE -->
      <button onclick="getContenuHTML()">Récupérer le contenu HTML</button>

    </body>

</html>
