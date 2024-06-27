function confirmAction(isConfirmed) {
    if (isConfirmed) {
      alert("Objet supprimé !");
      // Ajoutez ici votre logique de suppression d'objet
    } else {
      alert("Action annulée.");
    }
    closePopup();
  }
  
  function openPopup() {
    document.getElementById("popup").style.display = "flex";
  }
  
  function closePopup() {
    document.getElementById("popup").style.display = "none";
  }
  
  // Afficher le popup par défaut
  openPopup();
  