// Sélectionnez le paragraphe par son identifiant
const paragraph = document.getElementById('content');

// Récupérez le contenu du paragraphe
let content = paragraph.textContent;

// Vérifiez si le contenu dépasse 150 caractères
if (content.length > 150) {
    // Coupez le contenu à 150 caractères
    content = content.substring(0, 150);

    // Ajoutez "..." à la fin du contenu
    content += "...";
}

// Mettez à jour le contenu du paragraphe avec la version raccourcie
paragraph.textContent = content;
