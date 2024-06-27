<!DOCTYPE html>
<html>
<head>
    <title>Exemple</title>
</head>
<body>
    <h1>Bonjour le monde</h1>
    <p>Ceci est un paragraphe.</p>
    <div id="maDiv01" class="megusta_esto">
        <div id="maDiv02" class="hayhay">
        <ul>
            <li>Élément 1</li>
            <li>Élément 2</li>
            <li>Élément 3</li>
        </ul>
    </div>
    <script>
        // Fonction pour convertir un élément DOM en objet JSON
        function domToJson(element) {
            // Si l'élément est un nœud de texte, retourner son contenu textuel
            if (element.nodeType === Node.TEXT_NODE) {
                return element.nodeValue.trim();
            }

            // Construire l'objet JSON pour l'élément DOM
            let obj = {
                tag: element.tagName.toLowerCase(),
                attributes: {},
                children: []
            };

            // Ajouter les attributs de l'élément
            for (let attr of element.attributes) {
                obj.attributes[attr.name] = attr.value;
            }

            // Ajouter les enfants de l'élément
            for (let child of element.childNodes) {
                let childObj = domToJson(child);
                if (childObj) {
                    obj.children.push(childObj);
                }
            }

            return obj;
        }

        // Sélectionner l'élément racine du document HTML
        let htmlElement = document.getElementById("maDiv01"); // document.documentElement;

        // Convertir l'élément HTML en JSON
        let htmlJson = domToJson(htmlElement);

        // Afficher le JSON dans la console
        console.log(JSON.stringify(htmlJson, null, 4));
    </script>
</body>
</html>
