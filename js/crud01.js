let selectedRow = null;

function selectEnregistrement(row) {
    if (selectedRow !== null) {
        selectedRow.classList.remove('selected');
    }

    selectedRow = row;
    selectedRow.classList.add('selected');

    // Remplir le formulaire avec les données sélectionnées
    document.getElementById('nom').value = selectedRow.cells[1].textContent;
    document.getElementById('email').value = selectedRow.cells[2].textContent;

    // Activer le bouton Modifier et Effacer
    document.getElementById('ajouterBtn').disabled = true;
    document.getElementById('modifierBtn').disabled = false;
    document.getElementById('effacerBtn').disabled = false;

}

function resetForm() {
    document.getElementById('form').reset();
    selectedRow = null;
    document.getElementById('ajouterBtn').disabled = false;
    document.getElementById('modifierBtn').disabled = true;
    document.getElementById('effacerBtn').disabled = true;
}

function modifierEnregistrement() {
    selectedRow.cells[1].textContent = document.getElementById('nom').value;
    selectedRow.cells[2].textContent = document.getElementById('email').value;

    // Réinitialiser le formulaire et désactiver les boutons Modifier et Effacer
    resetForm();
}

function effacerEnregistrement() {
    document.getElementById('table').deleteRow(selectedRow.rowIndex);

    // Réinitialiser le formulaire et désactiver les boutons Modifier et Effacer
    resetForm();
}
