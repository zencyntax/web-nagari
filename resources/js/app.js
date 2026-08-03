import { ClassicEditor } from 'ckeditor5';
import 'ckeditor5/ckeditor5.css';

import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';

import AOS from 'aos';
import 'aos/dist/aos.css';

window.ClassicEditor = ClassicEditor;

AOS.init();

// Navbar Scroll Effect

window.addEventListener("scroll", () => {

    const navbar = document.querySelector(".navbar-custom");

    if (!navbar) return;

    if (window.scrollY > 80) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }

});
