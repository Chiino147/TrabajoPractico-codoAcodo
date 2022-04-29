const navBoton = document.querySelector("#boton-nav");
const navMenu = document.querySelector(".nav-menu ");

navBoton.addEventListener("click", function() {
    navMenu.classList.toggle("nav-menu_visible")
})