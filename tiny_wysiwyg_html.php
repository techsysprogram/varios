<!-- super simple de mettre ça dans le clavier, il suffie de creer un compte 
 https://www.tiny.cloud/ -->    
<!-- https://www.tiny.cloud/my-account/integrate/#html -->
<!-- recuperer l'api escribirlo y despues y en dashboard enregistrer le domaine simplement et voilà -->

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Inclure le script TinyMCE -->
    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script> -->
    <script src="https://cdn.tiny.cloud/1/inz03qpbhxsobjihf2kwqx1csq2j3nzvev2nhqv83w5eao5g/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<!--     tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
        { value: 'Víctor Miguel Bellota', title: 'First Name' },
        { value: 'techsysprogram@gmail.com', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    }); -->
  
  <script>
    // Initialiser TinyMCE
    tinymce.init({
        selector: 'textarea#description', // Sélecteur pour votre textarea
        plugins: 'link', // Seul le plugin de lien est conservé
    });
    // Fonction pour récupérer le contenu de TinyMCE
    function getContenuHTML() {
        var contenuHTML = tinymce.get('description').getContent();
        console.log(contenuHTML);
        alert("Contenu HTML : " + contenuHTML);
    }
  </script>
</head>

  <body>
    <!-- Formulaire avec textarea pour l'édition -->
    <form>
        <label for="description">Description :</label>
        <textarea id="description" name="description"></textarea><br>
    </form>

    <!-- Bouton pour récupérer le contenu de TinyMCE -->
    <button onclick="getContenuHTML()">Récupérer le contenu HTML</button>

  </body>

</html>
