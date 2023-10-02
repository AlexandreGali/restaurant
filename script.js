// MENU BURGER

// JavaScript pour ouvrir et fermer le menu
const menuBurger = document.getElementById("menu-burger");
const menuDeroulant = document.querySelector(".menu-deroulant");
const fermerMenu = document.getElementById("fermer-menu");

menuBurger.addEventListener("click", () => {
  menuDeroulant.style.left = "0"; // Ouvrir le menu en cliquant
});

fermerMenu.addEventListener("click", () => {
  menuDeroulant.style.left = "-310px"; // Fermer le menu en cliquant sur la croix
});
 