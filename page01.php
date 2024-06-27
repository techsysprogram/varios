<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Button with Edit Icon</title>
  <!-- Inclure une bibliothèque d'icônes comme Font Awesome -->
  <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      rel="stylesheet"
    />
  <!-- Ajouter des styles personnalisés pour le bouton -->
  <style>
    .tech_style_button {
      background-color: #5cb85c; /* Vert zen */
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      display: inline-block;
      text-decoration: none;
    }

    .tech_style_button .icon {
      margin-right: 5px;
      color: #fff;
    }
  </style>
</head>
<body>
  <!-- Bouton avec classe "tech_style_button" et icône d'édition -->
  <button class="tech_style_button"><i class="fas fa-pencil-alt icon"></i>Edit</button>
</body>
</html>
