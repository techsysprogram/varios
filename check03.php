<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tableau avec des options en style zen</title>
<style>
/* Style zen */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

table {
    width: 50%;
    margin: 20px auto;
    border-collapse: collapse;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

thead {
    background-color: #4CAF50;
    color: white;
}

th, td {
    padding: 10px;
    text-align: center;
}

tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

tbody tr:hover {
    background-color: #ddd;
}

input[type="checkbox"] {
    transform: scale(1.5);
}

</style>
</head>
<body>

<table>
    <thead>
<!--         <tr>
            <th>Colonne 1</th>
            <th>Colonne 2</th>
        </tr> -->
    </thead>
    <tbody>
        <tr>
            <td><label><input type="checkbox"> Option 1</label></td>
            <td><label><input type="checkbox"> Option 2</label></td>
        </tr>
        <tr>
            <td><label><input type="checkbox"> Option 3</label></td>
            <td><label><input type="checkbox"> Option 4</label></td>
        </tr>
        <tr>
            <td><label><input type="checkbox"> Option 5</label></td>
            <td><label><input type="checkbox"> Option 6</label></td>
        </tr>
        <tr>
            <td><label><input type="checkbox"> Option 7</label></td>
            <td><label><input type="checkbox"> Option 8</label></td>
        </tr>
        <tr>
            <td><label><input type="checkbox"> Option 9</label></td>
            <td><label><input type="checkbox"> Option 10</label></td>
        </tr>
    </tbody>
</table>

</body>
</html>