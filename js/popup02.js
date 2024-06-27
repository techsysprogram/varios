class TechsysPopup {
    constructor(content) {
        this.content = content;
        this.popupWrapper = document.createElement('div');
        this.popup = document.createElement('div');
        this.closeButton = document.createElement('button');

        this.popupWrapper.classList.add('techsys-popup01-popup-wrapper');
        this.popup.classList.add('techsys-popup01-popup');
        this.closeButton.innerText = 'x';
        this.closeButton.classList.add('techsys-popup01-close-button');
        this.closeButton.onclick = () => this.close();

        this.popup.innerHTML = this.content;
        this.popup.appendChild(this.closeButton);
        this.popupWrapper.appendChild(this.popup);
    }

    show() {
        document.body.appendChild(this.popupWrapper);
    }

    close() {
        this.popupWrapper.remove();
    }
}

class TechsysPopupWithButtons extends TechsysPopup {
    constructor(content, yesText, noText) {
        super(content);
        this.yesText = yesText;
        this.noText = noText;
        this.buttonWrapper = document.createElement('div'); // Création de la div pour les boutons
        this.yesButton = document.createElement('button');
        this.noButton = document.createElement('button');

        this.buttonWrapper.classList.add('techsys-popup01-buttons'); // Ajout de la classe à la div des boutons

        this.yesButton.innerText = this.yesText;
        this.yesButton.classList.add('techsys-popup01-yes-button');
        this.yesButton.onclick = () => this.onYes();

        this.noButton.innerText = this.noText;
        this.noButton.classList.add('techsys-popup01-no-button');
        this.noButton.onclick = () => this.onNo();

        this.buttonWrapper.appendChild(this.yesButton); // Ajout des boutons à la div des boutons
        this.buttonWrapper.appendChild(this.noButton);
        this.popup.appendChild(this.buttonWrapper); // Ajout de la div des boutons au popup
    }

    onYes() {
        console.log('Clique sur Oui');
        this.close();
    }

    onNo() {
        console.log('Clique sur Non');
        this.close();
    }
}

class TechsysPopupWithDropdown extends TechsysPopup {
    constructor(content, options) {
        super(content);
        this.dropdown = document.createElement('select');
        this.dropdown.classList.add('techsys-popup01-dropdown'); // Ajout de la classe au combobox

        options.forEach(option => {
            const optionElement = document.createElement('option');
            optionElement.text = option;
            this.dropdown.add(optionElement);
        });

        this.popup.appendChild(this.dropdown);
    }
}
