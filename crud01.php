<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD avec PHP, MySQL, CSS et JavaScript</title>
    <link rel="stylesheet" href="css/crud01.css">
</head>
<body>

<?php
include 'config/crud01_config.php';

// Affichage des messages d'erreur ou de succès
if(isset($_GET['message'])) {
    echo "<p class='message'>{$_GET['message']}</p>";
}

// Récupération des données de la base de données
$query = "SELECT * FROM ma_table";
$result = mysqli_query($conn, $query);
?>

<div class="container">
    <h2>CRUD avec PHP, MySQL, CSS et JavaScript</h2>

    <!-- Affichage du formulaire pour ajouter un enregistrement -->
    <form id="form" action="add.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit" id="ajouterBtn">Ajouter</button>
        <button type="button" id="modifierBtn" onclick="modifierEnregistrement()">Modifier</button>
        <button type="button" id="effacerBtn" onclick="effacerEnregistrement()">Effacer</button>
    </form>

    <!-- Affichage des données -->
    <table id="table">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr onclick='selectEnregistrement(this)'>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['nom']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<script src="js/crud01.js"></script>
</body>
</html>
