document.addEventListener("DOMContentLoaded", function() {
    const loadAndDisplayContent = (popupId) => {
        let content = '';

        switch(popupId) {
            case 'overlay':
                content = `
                    <div class="techsys-style-popup-banner techsys-style-popup-content">
                        <button class="techsys-style-popup-close-top-right-btn" data-popup="overlay">×</button>
                        <img src="path-to-your-image.png" alt="Icon" class="techsys-style-popup-icon">
                        <h2 class="techsys-style-popup-title">À VENIR</h2>
                        <h3 class="techsys-style-popup-subtitle">Plateforme de monétisation de contenu</h3>
                        <p class="techsys-style-popup-description">
                            Transformez vos connaissances en source de revenus : rejoignez la liste d'attente pour obtenir les outils avec
                            <a href="#" class="techsys-style-popup-exclusive-offer">un tarif exclusif pour inscription anticipée !</a>
                        </p>
                        <a href="#" class="techsys-style-popup-join-waitlist">Rejoignez la liste d'attente →</a>
                        <button class="techsys-style-popup-close-btn" data-popup="overlay">Fermer</button>
                    </div>
                `;
                break;
            case 'delete-overlay':
                content = `
                    <div class="techsys-style-popup-banner techsys-style-popup-content">
                        <button class="techsys-style-popup-close-top-right-btn" data-popup="delete-overlay">×</button>
                        <h3 class="techsys-style-popup-subtitle">Souhaitez-vous modifier ?</h3>
                        <div class="techsys-style-popup-buttons">
                            <button class="techsys-style-popup-yes-btn" data-popup="delete-overlay">Widget</button>
                            <button class="techsys-style-popup-no-btn" data-popup="delete-overlay">Contenu</button>
                        </div>
                    </div>
                `;
                break;
            case 'info-overlay':
                content = `
                    <div class="techsys-style-popup-info-banner techsys-style-popup-content">
                        <button class="techsys-style-popup-close-top-right-btn" data-popup="info-overlay">×</button>
                        <button class="techsys-style-popup-arrow-left" data-popup="info-overlay">&larr;</button>
                        <h3 class="techsys-style-popup-info-title">Titre Centré</h3>
                        <img src="path-to-your-image.png" alt="Icon" class="techsys-style-popup-info-icon">
                        <p class="techsys-style-popup-info-description">Ceci est un paragraphe centré en bas de l'image.</p>
                        <button class="techsys-style-popup-arrow-right" data-popup="info-overlay">&rarr;</button>
                    </div>
                `;
                break;
            case 'gallery-overlay':
                content = `
                    <div class="techsys-style-popup-gallery-banner techsys-style-popup-content">
                        <button class="techsys-style-popup-close-top-right-btn" data-popup="gallery-overlay">×</button>
                        <button class="techsys-style-popup-gallery-arrow-left" data-popup="gallery-overlay">&larr;</button>
                        <img src="path-to-your-image1.png" alt="Image 1" class="techsys-style-popup-gallery-image">
                        <button class="techsys-style-popup-gallery-arrow-right" data-popup="gallery-overlay">&rarr;</button>
                    </div>
                `;
                break;
            case 'combobox-overlay':
                content = `
                    <div class="techsys-style-popup-banner techsys-style-popup-content">
                        <button class="techsys-style-popup-close-top-right-btn" data-popup="combobox-overlay">×</button>
                        <h3 class="techsys-style-popup-subtitle">Sélectionnez un élément</h3>
                        <select class="techsys-style-popup-combobox">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                        <div class="techsys-style-popup-buttons">
                            <button class="techsys-style-popup-yes-btn" data-popup="combobox-overlay">Oui</button>
                            <button class="techsys-style-popup-no-btn" data-popup="combobox-overlay">Non</button>
                        </div>
                    </div>
                `;
                break;
            default:
                console.error(`Invalid popup ID: '${popupId}'`);
                return;
        }

        overlay.innerHTML = content;
        overlay.style.display = 'flex';

        document.querySelectorAll('.techsys-style-popup-close-btn, .techsys-style-popup-yes-btn, .techsys-style-popup-no-btn, .techsys-style-popup-close-top-right-btn, .techsys-style-popup-arrow-left, .techsys-style-popup-arrow-right, .techsys-style-popup-gallery-arrow-left, .techsys-style-popup-gallery-arrow-right').forEach(newButton => {
            newButton.addEventListener('click', function() {
                const newPopupId = newButton.getAttribute('data-popup');
                let newAction = '';

                if (newButton.classList.contains('techsys-style-popup-close-btn') ||
                    newButton.classList.contains('techsys-style-popup-no-btn') ||
                    newButton.classList.contains('techsys-style-popup-close-top-right-btn')) {
                    newAction = 'close';
                } else if (newButton.classList.contains('techsys-style-popup-yes-btn')) {
                    newAction = 'yes';
                } else if (newButton.classList.contains('techsys-style-popup-arrow-left') ||
                           newButton.classList.contains('techsys-style-popup-gallery-arrow-left')) {
                    newAction = 'left-arrow';
                } else if (newButton.classList.contains('techsys-style-popup-arrow-right') ||
                           newButton.classList.contains('techsys-style-popup-gallery-arrow-right')) {
                    newAction = 'right-arrow';
                }

                handlePopupAction(newAction, newPopupId);
            });
        });
    };

    const handlePopupAction = (action, popupId) => {
        overlay = document.getElementById(`techsys-style-popup-${popupId}`);
        
        if (!overlay) {
            console.error(`Overlay with ID '${popupId}' not found.`);
            return;
        }

        switch(action) {
            case 'open':
                loadAndDisplayContent(popupId);
                break;
            case 'close':
                overlay.style.display = 'none';
                break;
            case 'yes':
                if (popupId === 'combobox-overlay') {
                    const combobox = document.querySelector('.techsys-style-popup-combobox');
                    alert(`Sélection: ${combobox.value}`);
                } else {
                    alert('Dossier supprimé');
                }
                overlay.style.display = 'none';
                break;
            case 'no':
                overlay.style.display = 'none';
                break;
            case 'left-arrow':
                alert('Flèche gauche cliquée dans ' + popupId);
                break;
            case 'right-arrow':
                alert('Flèche droite cliquée dans ' + popupId);
                break;
            default:
                console.error(`Invalid action: '${action}'`);
                break;
        }
    };

    window.myPopup = (popupId) => {
        handlePopupAction('open', popupId);
    };

    document.querySelectorAll('.techsys-style-popup-overlay').forEach(overlay => {
        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) {
                overlay.style.display = 'none';
            }
        });
    });
});
