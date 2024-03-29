//Menu Code
"use strict";

let menuToggler = document.getElementById("menuToggler");
let menuTogglerLabel = document.getElementById("menuTogglerLabel");
let sidebar = document.getElementById("sidebar");
let menuItems = document.getElementsByClassName("menu__link");
menuToggler.addEventListener("change", function() {
    if (menuToggler.checked) {
        menuTogglerLabel.setAttribute("aria-pressed", "true");
        sidebar.setAttribute("aria-hidden", "false");
    } else {
        menuTogglerLabel.setAttribute("aria-pressed", "false");
        sidebar.setAttribute("aria-hidden", "true");
    }

    for (let menuItem of menuItems) {
        if (menuToggler.checked) {
            menuItem.setAttribute("tabindex", "0");
        } else {
            menuItem.setAttribute("tabindex", "-1");
        }
    }
});