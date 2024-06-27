<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmation Popup</title>
  <link rel="stylesheet" href="css/popup01.css">
</head>
<body>

<div class="techsys-popup01-popup-wrapper" id="popup">
  <div class="techsys-popup01-popup">
    <p>Souhaitez-vous supprimer cet objet ?</p>
    <div class="techsys-popup01-btn-container">
      <button class="techsys-popup01-button" onclick="confirmAction(true)">Oui</button>
      <button class="techsys-popup01-button" onclick="confirmAction(false)">Non</button>
    </div>
  </div>
</div>

<script src="js/popup01.js"></script>

</body>
</html>
