<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intégrer une vidéo YouTube</title>
</head>
<body>
    <h1>Vidéo YouTube intégrée</h1>
    <div id="video-container"></div>
    <p>le code est 04 05 789</p>

    <script>
        // ID de la vidéo YouTube à intégrer
        const videoId = "mNJOWXc83Y4"; // Remplacez par l'ID de la vidéo YouTube souhaitée

        // URL de la vidéo YouTube intégrée
        const videoUrl = `https://www.youtube.com/embed/${videoId}`;

        // Créer l'élément iframe
        const iframe = document.createElement('iframe');
/*         iframe.width = "560";
        iframe.height = "315"; */
        iframe.width = "360";
        iframe.height = "185";
        iframe.src = videoUrl;
        iframe.frameBorder = "0";
        iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
        iframe.allowFullscreen = true;

        // Ajouter l'iframe au conteneur
        const videoContainer = document.getElementById('video-container');
        videoContainer.appendChild(iframe);
    </script>
</body>
</html>
