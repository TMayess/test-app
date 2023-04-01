import './bootstrap';


const menuHamburger = document.querySelector(".menu-hamburger");
const navLinks = document.querySelector(".nav-page");

menuHamburger.addEventListener('click', () => {
  navLinks.classList.toggle('mobile-menu');
});

const swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


$(document).ready(function(){
    $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
    })
})



z


const itemsPerPage = 9; // nombre d'éléments à afficher par page
let currentPage = 1; // page actuelle

// récupération des éléments à paginer
const allItems = document.querySelectorAll('.list-article-boutique > div');

// fonction pour afficher les éléments correspondant à la page donnée
function showPage(pageNumber) {
  // calcul des index des premiers et derniers éléments à afficher
  const startIndex = (pageNumber - 1) * itemsPerPage;
  const endIndex = pageNumber * itemsPerPage - 1;

  // parcours des éléments et affichage ou masquage en fonction de leur index
  allItems.forEach((item, index) => {
    if (index >= startIndex && index <= endIndex) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
}

// initialisation : affichage de la première page
showPage(currentPage);

// ajout des liens de pagination dans le DOM
const pagination = document.createElement('div');
pagination.classList.add('pagination');

// bouton "Précédent"
const previousButton = document.createElement('a');
previousButton.href = '#';
previousButton.textContent = 'Prec';
previousButton.addEventListener('click', (event) => {
  event.preventDefault();
  if (currentPage > 1) {
    currentPage--;
    showPage(currentPage);
    // mise à jour de la classe active sur les liens de pagination
    updatePaginationLinks();
  }
});
pagination.appendChild(previousButton);

// liens de pagination pour chaque page
for (let i = 1; i <= Math.ceil(allItems.length / itemsPerPage); i++) {
  const link = document.createElement('a');
  link.href = '#';
  link.textContent = i;
  if (i === currentPage) {
    link.classList.add('active');
  }
  link.addEventListener('click', (event) => {
    event.preventDefault();
    currentPage = i;
    showPage(currentPage);
    // mise à jour de la classe active sur les liens de pagination
    updatePaginationLinks();
  });
  pagination.appendChild(link);
}

// bouton "Suivant"
const nextButton = document.createElement('a');
nextButton.href = '#';
nextButton.textContent = 'Suiv';
nextButton.addEventListener('click', (event) => {
  event.preventDefault();
  if (currentPage < Math.ceil(allItems.length / itemsPerPage)) {
    currentPage++;
    showPage(currentPage);
    // mise à jour de la classe active sur les liens de pagination
    updatePaginationLinks();
  }
});
pagination.appendChild(nextButton);

// fonction pour mettre à jour la classe active sur les liens de pagination
function updatePaginationLinks() {
  pagination.querySelectorAll('a').forEach((a) => {
    a.classList.remove('active');
    if (parseInt(a.textContent) === currentPage) {
      a.classList.add('active');
    }
  });
}





