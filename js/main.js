const boutonBurger = document.querySelector('.boutonBurger');
const menuBurger = document.querySelector('.menuBurger');

const boutonAccueil = document.querySelector('.boutonAccueil');
const boutonApropos = document.querySelector('.boutonApropos');
const boutonPortfolio = document.querySelector('.boutonPortfolio');
const boutonContact = document.querySelector('.boutonContact');


boutonBurger.addEventListener('click', function() {
    menuBurger.classList.toggle('menuBurgerOpen');
});

boutonAccueil.addEventListener('click', function () {
    menuBurger.classList.toggle('menuBurgerOpen');
})
boutonApropos.addEventListener('click', function () {
    menuBurger.classList.toggle('menuBurgerOpen');
})
boutonPortfolio.addEventListener('click', function () {
    menuBurger.classList.toggle('menuBurgerOpen');
})
boutonContact.addEventListener('click', function () {
    menuBurger.classList.toggle('menuBurgerOpen');
})