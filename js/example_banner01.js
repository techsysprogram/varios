document.addEventListener("DOMContentLoaded", function() {
    const openBtn = document.querySelector('.techsys-popup02-open-btn');
    const closeBtn = document.getElementById('techsys-popup02-close-btn');
    const overlay = document.getElementById('techsys-popup02-overlay');

    const openDeleteBtn = document.querySelector('.techsys-popup02-open-delete-btn');
    const deleteOverlay = document.getElementById('techsys-popup02-delete-overlay');
    const yesBtn = document.getElementById('techsys-popup02-yes-btn');
    const noBtn = document.getElementById('techsys-popup02-no-btn');

    const openInfoBtn = document.querySelector('.techsys-popup02-open-info-btn');
    const infoOverlay = document.getElementById('techsys-popup02-info-overlay');
    const arrowLeft = document.getElementById('techsys-popup02-arrow-left');
    const arrowRight = document.getElementById('techsys-popup02-arrow-right');

    const openGalleryBtn = document.querySelector('.techsys-popup02-open-gallery-btn');
    const galleryOverlay = document.getElementById('techsys-popup02-gallery-overlay');
    const galleryArrowLeft = document.getElementById('techsys-popup02-gallery-arrow-left');
    const galleryArrowRight = document.getElementById('techsys-popup02-gallery-arrow-right');
    const galleryImage = document.querySelector('.techsys-popup02-gallery-image');

    openBtn.addEventListener('click', function() {
        overlay.style.display = 'flex';
    });

    closeBtn.addEventListener('click', function() {
        overlay.style.display = 'none';
    });

    overlay.addEventListener('click', function(e) {
        if (e.target === overlay) {
            overlay.style.display = 'none';
        }
    });

    openDeleteBtn.addEventListener('click', function() {
        deleteOverlay.style.display = 'flex';
    });

    yesBtn.addEventListener('click', function() {
        alert('Dossier supprimé');
        deleteOverlay.style.display = 'none';
    });

    noBtn.addEventListener('click', function() {
        deleteOverlay.style.display = 'none';
    });

    deleteOverlay.addEventListener('click', function(e) {
        if (e.target === deleteOverlay) {
            deleteOverlay.style.display = 'none';
        }
    });

    openInfoBtn.addEventListener('click', function() {
        infoOverlay.style.display = 'flex';
    });

    arrowLeft.addEventListener('click', function() {
        alert('Flèche gauche cliquée');
    });

    arrowRight.addEventListener('click', function() {
        alert('Flèche droite cliquée');
    });

    infoOverlay.addEventListener('click', function(e) {
        if (e.target === infoOverlay) {
            infoOverlay.style.display = 'none';
        }
    });

    openGalleryBtn.addEventListener('click', function() {
        galleryOverlay.style.display = 'flex';
    });

    galleryArrowLeft.addEventListener('click', function() {
        alert('Flèche gauche cliquée dans la galerie');
    });

    galleryArrowRight.addEventListener('click', function() {
        alert('Flèche droite cliquée dans la galerie');
    });

    galleryOverlay.addEventListener('click', function(e) {
        if (e.target === galleryOverlay) {
            galleryOverlay.style.display = 'none';
        }
    });
});
