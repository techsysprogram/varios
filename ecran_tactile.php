<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Swipe avec jQuery</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    #swipe-area {
      width: 200px;
      height: 200px;
      background-color: #ccc;
      margin: 50px auto;
      text-align: center;
      line-height: 200px;
      font-size: 24px;
    }
  </style>
</head>
<body>

<div id="swipe-area">Faites glisser ici</div>

<script>
$(document).ready(function(){
  var startX, startY, endX, endY;
  var threshold = 50; // Seuil de déclenchement du swipe

  $('#swipe-area').on('touchstart', function(e){
    var touch = e.originalEvent.touches[0];
    startX = touch.clientX;
    startY = touch.clientY;
    /* alert("estoy : " + "aqui"); */
  });

  $('#swipe-area').on('touchmove', function(e){
    if (startX === undefined || startY === undefined) {
      return;
    }
    var touch = e.originalEvent.touches[0];
    endX = touch.clientX;
    endY = touch.clientY;
  });

  $('#swipe-area').on('touchend', function(e){
    if (startX === undefined || startY === undefined || endX === undefined || endY === undefined) {
      return;
    }
    var diffX = endX - startX;
    var diffY = endY - startY;
    if (Math.abs(diffX) > Math.abs(diffY)) {
      if (Math.abs(diffX) > threshold) {
        if (diffX > 0) {
          // Swipe vers la droite
          alert("Swipe vers la droite");
        } else {
          // Swipe vers la gauche
          alert("Swipe vers la gauche");
        }
      }
    } else {
      if (Math.abs(diffY) > threshold) {
        if (diffY > 0) {
          // Swipe vers le bas
          alert("Swipe vers le bas");
        } else {
          // Swipe vers le haut
          alert("Swipe vers le haut");
        }
      }
    }
    startX = startY = endX = endY = undefined; // Réinitialiser les variables
  });
});
</script>

</body>
</html>
