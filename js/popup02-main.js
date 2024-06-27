const popup1 = new TechsysPopupWithButtons("Contenu du popup 1", "Oui", "Non");
document.getElementById("techsys-popup01-button1").addEventListener("click", () => popup1.show());

const popup2 = new TechsysPopupWithDropdown("Contenu du popup 2", ["Option 1", "Option 2", "Option 3"]);
document.getElementById("techsys-popup01-button2").addEventListener("click", () => popup2.show());
