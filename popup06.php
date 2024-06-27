<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup de Monétisation de Contenu</title>
    <link rel="stylesheet" href="css/popup03.css">
</head>
<body>
    <!-- Ajout des boutons pour appeler les popups -->
    <button onclick="myPopup('overlay')">Charger et Afficher Overlay</button>
    <button onclick="myPopup('delete-overlay')">Charger et Afficher Delete</button>
    <button onclick="myPopup('info-overlay')">Charger et Afficher Info</button>
    <button onclick="myPopup('gallery-overlay')">Charger et Afficher Gallery</button>
    <button onclick="myPopup('combobox-overlay')">Charger et Afficher Combobox</button>

    <div class="techsys-style-popup-overlay" id="techsys-style-popup-overlay"></div>
    <div class="techsys-style-popup-overlay" id="techsys-style-popup-delete-overlay"></div>
    <div class="techsys-style-popup-overlay" id="techsys-style-popup-info-overlay"></div>
    <div class="techsys-style-popup-overlay" id="techsys-style-popup-gallery-overlay"></div>
    <div class="techsys-style-popup-overlay" id="techsys-style-popup-combobox-overlay"></div>

    <script src="js/popup03.js"></script>
</body>
</html>
