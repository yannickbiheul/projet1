const boutonBurger = document.querySelector('.boutonBurger');
const menuBurger = document.querySelector('.menuBurger');

const span1 = document.querySelector('.span1');
const span2 = document.querySelector('.span2');
const span3 = document.querySelector('.span3');

const boutonAccueil = document.querySelector('.boutonAccueil');
const boutonApropos = document.querySelector('.boutonApropos');
const boutonPortfolio = document.querySelector('.boutonPortfolio');
const boutonContact = document.querySelector('.boutonContact');


boutonBurger.addEventListener('click', function() {
    menuBurger.classList.toggle('menuBurgerOpen');
    span1.classList.toggle('span1Open');
    span2.classList.toggle('span2Open');
    span3.classList.toggle('span3Open');
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