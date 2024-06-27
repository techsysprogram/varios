<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup de Monétisation de Contenu</title>
    <link rel="stylesheet" href="css/example_banner01.css">
</head>
<body>
    <button class="techsys-popup02-open-btn">Ouvrir la Popup</button>
    <button class="techsys-popup02-open-delete-btn">Supprimer Dossier</button>
    <button class="techsys-popup02-open-info-btn">Afficher Info</button>
    <button class="techsys-popup02-open-gallery-btn">Ouvrir la Galerie</button>

    <div class="techsys-popup02-overlay" id="techsys-popup02-overlay">
        <div class="techsys-popup02-banner" id="techsys-popup02-banner">
            <img src="path-to-your-image.png" alt="Icon" class="techsys-popup02-icon">
            <h2 class="techsys-popup02-title">À VENIR</h2>
            <h3 class="techsys-popup02-subtitle">Plateforme de monétisation de contenu</h3>
            <p class="techsys-popup02-description">
                Transformez vos connaissances en source de revenus : rejoignez la liste d'attente pour obtenir les outils avec
                <a href="#" class="techsys-popup02-exclusive-offer">un tarif exclusif pour inscription anticipée !</a>
            </p>
            <a href="#" class="techsys-popup02-join-waitlist">Rejoignez la liste d'attente →</a>
            <button class="techsys-popup02-close-btn" id="techsys-popup02-close-btn">Fermer</button>
        </div>
    </div>

    <div class="techsys-popup02-overlay" id="techsys-popup02-delete-overlay">
        <div class="techsys-popup02-banner" id="techsys-popup02-delete-banner">
            <h3 class="techsys-popup02-subtitle">Souhaitez-vous supprimer ce dossier ?</h3>
            <div class="techsys-popup02-buttons">
                <button class="techsys-popup02-yes-btn" id="techsys-popup02-yes-btn">Oui</button>
                <button class="techsys-popup02-no-btn" id="techsys-popup02-no-btn">Non</button>
            </div>
        </div>
    </div>

    <div class="techsys-popup02-overlay" id="techsys-popup02-info-overlay">
        <div class="techsys-popup02-info-banner" id="techsys-popup02-info-banner">
            <button class="techsys-popup02-arrow-left" id="techsys-popup02-arrow-left">&larr;</button>
            <h3 class="techsys-popup02-info-title">Titre Centré</h3>
            <img src="path-to-your-image.png" alt="Icon" class="techsys-popup02-info-icon">
            <p class="techsys-popup02-info-description">Ceci est un paragraphe centré en bas de l'image.</p>
            <button class="techsys-popup02-arrow-right" id="techsys-popup02-arrow-right">&rarr;</button>
        </div>
    </div>

    <div class="techsys-popup02-overlay" id="techsys-popup02-gallery-overlay">
        <div class="techsys-popup02-gallery-banner" id="techsys-popup02-gallery-banner">
            <button class="techsys-popup02-gallery-arrow-left" id="techsys-popup02-gallery-arrow-left">&larr;</button>
            <img src="path-to-your-image1.png" alt="Image 1" class="techsys-popup02-gallery-image">
            <button class="techsys-popup02-gallery-arrow-right" id="techsys-popup02-gallery-arrow-right">&rarr;</button>
        </div>
    </div>

    <script src="js/example_banner01.js"></script>
</body>
</html>
