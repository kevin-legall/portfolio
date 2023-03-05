// faire les happenings sur la page 'about me'

const blocks = document.querySelectorAll('.timeline-block')

function showBlocks() {
    blocks.forEach(block => {
      let blockTop = block.getBoundingClientRect().top;
      let blockBottom = block.getBoundingClientRect().bottom;
  
      if (blockTop < window.innerHeight && blockBottom >= 0) {
        block.classList.add('show');
      } else {
        block.classList.remove('show');
      }
    });
}
window.addEventListener('scroll', showBlocks);
// le form multipages 
const pages = document.querySelectorAll('.page');
const headForm = document.querySelector('.headForm')
const nbPages = pages.length;
let pageActive = 1;

window.onload = () => {
    // affichage 1ere page du form
    document.querySelector('.page').style.display = "block";

    // affichage des numeros des pages dans l'entete
    // on parcoure la liste des pages
    pages.forEach((page, index) => {
        // on créé l'élément numéro de page
        let element = document.createElement('div')
        element.classList.add('page-num')
        element.id = 'num' + (index + 1)
        if(pageActive === index + 1) {
            element .classList.add('active')
        }
        element.innerHTML = index + 1
        headForm.appendChild(element)
    })
}

let boutons = document.querySelectorAll('button[type=button]');

for (let bouton of boutons) {
    bouton.addEventListener('click', pageSuivante)
}

function pageSuivante() {
    // on masque toutes les pages
    for(let page of pages) {
        page.style.display = 'none';
    }
    // on affiche la page suivante
    this.parentElement.nextElementSibling.style.display = 'block'// je vais chercher le parent de cet élement puis son frère pour afficher la page
    
    // on désactive la page active 
    document.querySelector('.active').classList.remove('active');

    pageActive++ // on incrémente pageActive

    //on active le nouveau numéro
    document.getElementById('num' + pageActive).classList.add('active');
}

// faire le bouton de la nav avec l'event click
const navMobile = document.querySelector('.nav-ul-mobile');
const socials = document.querySelector('.social-btn');
socials.addEventListener('click', () => {
    navMobile.classList.toggle('active');
    socials.classList.toggle('active');
});

// faire la nav qui scroll avec l'user ???

// faire les boutons de tri des creations

// la date en js
const date = new Date();
textYear = document.getElementById('year');
const year = date.getFullYear();
textYear.textContent = year;
