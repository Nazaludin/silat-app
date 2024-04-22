import './bootstrap';

import Alpine from 'alpinejs';
import 'preline';

window.Alpine = Alpine;

Alpine.start();

// hamburger
const hamburger = document.querySelector('#hamburger')
hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('hamburger-active')
}); 