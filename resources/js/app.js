import "./bootstrap";
import "tinymce/tinymce";
import "tinymce/skins/ui/oxide/skin.min.css";
import "tinymce/skins/content/default/content.min.css";
import "tinymce/skins/content/default/content.css";
import "tinymce/icons/default/icons";
import "tinymce/themes/silver/theme";
import "tinymce/models/dom/model";

import Alpine from "alpinejs";
import "preline";

window.Alpine = Alpine;
Alpine.start();

import jQuery from "jquery";
window.$ = jQuery;

// hamburger
const hamburger = document.querySelector("#hamburger");
hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
});
