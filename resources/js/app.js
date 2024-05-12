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

import jQuery from 'jquery';
window.$ = jQuery;
// hamburger
const hamburger = document.querySelector('#hamburger')
const navMenu = document.querySelector('#nav-menu')
hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('hamburger-active')
    navMenu.classList.toggle('-translate-y-[30rem]')

}); 

window.onscroll = function() {
    var className = "fixed-header";
    var scrollTrigger = 100;
  // We add pageYOffset for compatibility with IE.
  if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
    document.getElementsByTagName("header")[0].classList.add(className);
  } else {
    document.getElementsByTagName("header")[0].classList.remove(className);
  }
};

    const sections = document.querySelectorAll('section');
    const links = document.querySelectorAll('a');

    window.addEventListener('scroll', () => {
        let scrollPosition = window.scrollY + 80;

        sections.forEach(section => {
            if (scrollPosition >= section.offsetTop) {
                links.forEach(link => {
                    link.classList.remove('active');
                    if (section.getAttribute('id') === link.getAttribute('href').substring(1)) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });


// Scroll Show Element 

// window.addEventListener('scroll', reveal);

// function reveal(){
//     var reveals = document.querySelectorAll('.reveal');

//     for(var i = 0; i < reveals.length; i++){

//         var windowheight = window.innerHeight;
//         var revealtop = reveals[i].getBoundingClientRect().top;
//         var revealpoint = 50;

//         if(revealtop < windowheight - revealpoint){
//             reveals[i],classList.add('scrollShow');
//         }else{
//             reveals[i].classList.remove('scrollShow');
//         }
        
//     }
// }

document.querySelector('#progressbar').animate(
    {
      backgroundColor: ['red', 'darkred'],
      transform: ['scaleX(0)', 'scaleX(1)'],
    },
    {
      duration: 2500,
      fill: 'forwards',
      easing: 'linear',
     }
  );