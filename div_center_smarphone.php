<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Div</title>
    <link rel="stylesheet" href="css/div_center_smarphone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<div id="maDiv" class="techsys-main-content">
    <div class="techsys-center-wrapper">
        <div class="techsys-container">
<!--             <div class="techsys-haut-centre-absolute">
                <div class="techsys-option01-wrapper">
                    <div class="techsys-option01-option">
                        <input value="option1" onchange="functionACTION('USER_MODE_EDIT_TRUE')" name="btn" type="radio" class="techsys-option01-input">
                        <div class="techsys-option01-btn">
                            <span class="techsys-option01-span"><i class="fas fa-pen"></i></span>
                        </div>
                    </div>
                    <div class="techsys-option01-option">
                        <input checked="" value="option2" onchange="functionACTION('USER_MODE_EDIT_FALSE')" name="btn" type="radio" class="techsys-option01-input">
                        <div class="techsys-option01-btn">
                            <span class="techsys-option01-span"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Titre -->
            <div class="techsys-titre-app">
                appartement de toutlouse
                <div class="techsys-langue_user">
                    <select class="tech_style_combobox" id="id_tech_langue" onchange="functionACTION('MOSTRAR_APP')">
                        <option value="_FR" selected="">FR</option><option value="_EN">EN</option><option value="_ES">ES</option>
                    </select>
                </div>
            </div>

            <div class="techsys-top-section">
                <div class="techsys-custom-image">
                    <img src="https://unportraitpro.franckbarrieres.fr/wp-content/uploads/2022/02/Photo-CV-Lille-Un-Portrait-Pro-Lille-Franck-BARRIERES-Photographe-Lille-051.jpg" alt="Image">
                </div>
                <div class="techsys-text-container">
                    <p id="content">bonjour</p>
                </div>
            </div>

            <div class="techsys-element">


                <div class="techsys-navigation">
                    <button id="leftBtn" class="techsys-nav-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>

                    <button id="rightBtn" class="techsys-nav-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>



                <!-- Nouvelle section pour les mini cartes -->
                <div class="techsys-mini-card-section">
                    <div class="techsys-mini-card" onclick="functionPOPUP('wifi_1')" style="color: #000000; background-color: rgb(237, 2, 229);">
                        <i class="fas fa-wifi"></i>wi-fi
                    </div>

                    <div class="techsys-mini-card" onclick="functionPOPUP('message_0')" style="color: #000000; background-color: rgb(0, 183, 255);">
                        <i class="fas fa-bell"></i>info
                    </div>

                    <div class="techsys-mini-card" onclick="functionPOPUP('wifi_2')" style="color: #000000; background-color: rgb(237, 2, 229);">
                        <i class="fas fa-calendar-alt"></i>wi-fi
                    </div>

                    <div class="techsys-mini-card" onclick="functionPOPUP('coordonnees_0')" style="color: #000000; background-color: rgba(142, 205, 230, 0.40);">
                        <i class="fas fa-calculator"></i>contact
                    </div>

                    <div class="techsys-mini-card" onclick="functionPOPUP('coordonnees_1')" style="color: #000000; background-color: rgb(0, 183, 255);">
                        <i class="fas fa-camera-retro"></i>contactos
                    </div>

                    <div class="techsys-mini-card" onclick="functionPOPUP('wifi_0')" style="color: #000000; background-color: rgba(142, 205, 230, 0.40);">
                        <i class="fas fa-calendar-alt"></i>wi-fi
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Menu fixe en bas -->
<div class="techsys-botton-section">
    <div class="techsys-botton-section02">
        <!-- <div class="btn-container"> -->
            <button class="tech_style_button3" onclick="function_pag_sel_BACK(3)"><i class="fas fa-arrow-left"></i></button>

            <div class="techsys-ovale-label">
                <label>1/3</label>
            </div>

            <button class="tech_style_button3" onclick="function_pag_sel_NEXT(3)"><i class="fas fa-arrow-right"></i></button>
        <!-- </div> -->

    </div>

    <!-- <p id="content">Développé par techsysprogram</p> -->
</div>

<script>
    function functionACTION(sAction) { //aqui accepto todas las actiones
        var bouton = document.getElementById("btn_action_util");
        bouton.innerText = sAction;
        bouton.click();
    }

    function functionPOPUP(sAction) {
        var bouton = document.getElementById("btn_popup_util");
        bouton.innerText = sAction;
        bouton.click();
    }

    function functionACTION_Edit(sAction) {
        var bouton = document.getElementById("btn_action_edit");
        bouton.innerText = sAction;
        bouton.click();
    }
</script>

</body>
</html>
