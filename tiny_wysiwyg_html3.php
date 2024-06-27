<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Lien vers la feuille de style Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script src="https://cdn.tiny.cloud/1/inz03qpbhxsobjihf2kwqx1csq2j3nzvev2nhqv83w5eao5g/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
    // Initialiser TinyMCE
    tinymce.init({
        selector: 'textarea#my_tini_html', // Sélecteur pour votre textarea
        //plugins: 'link bold underline',  Plugin de lien, en gras et souligné
        toolbar: 'undo redo | bold underline | link | forecolor backcolor', // Personnalisation de la barre d'outils Personnalisation de la barre d'outils
        menubar: false, // Désactiver le menu supérieur
        forced_root_block: false //Désactiver les paragraphes par défaut

    });
    </script>
</head>


<body>
    <div class="general-container">
        <div class="container">
            <div id="sectionContainer2">
                Patientez svp...
            </div>
            <!-- Formulaire avec textarea pour l'édition -->
            <form>
                <label for="formy_tini_html">Description :</label>
                <textarea id="my_tini_html" name="my_tini_html"></textarea><br>
            </form>

            <!-- Bouton pour récupérer le contenu de TinyMCE -->
            <div class="flex-container">
                <button class="tech_style_button" onclick="functionACTION('SAVE')"><i class="fas fa-save"></i>
                    Enregistrer et Publier</button>
            </div>
        </div>

    </div>
</body>

</html>