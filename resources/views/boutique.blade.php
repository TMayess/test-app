@extends('app')
@section('content')


<header>

    @include('part.navbar')

    <div class="head-page">
        <h2>LUXE A PETIT PRIX</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ea ducimus, numquam eius vel pariatur adipisci accusantium, autem magnam tenetur eveniet dolor</p>
    </div>

</header>

<section class="sctn-emplacement">


    <a class="a-tout" href="#sctn-article">Tout</a>
    <a class="a-chambre" href="#sctn-article">Chambre</a>
    <a class="a-salon" href="#sctn-article">Salon</a>
    <a class="a-salle-manger" href="#sctn-article">Salle a manger</a>
    <a class="a-cuisine" href="#sctn-article">Cuisine</a>
    <a class="a-salle-bain" href="#sctn-article">Salle de bain</a>
    <a class="a-bureau" href="#sctn-article">Bureau</a>
    <a class="a-accessoire" href="#sctn-article">Accessoires</a>

</section>

<div class="div-space-recherche">
    <div class="div-recherche">
        <input type="text" id="Recherche" name="recherche"  placeholder="Rechercher des article ...">
        <button type="submit">Recheche</button>
    </div>
</div>
<div class="tice"><h1 class="section_title">Nos article</h1></div>
<section id="sctn-article" class="sctn-article">
    <div>
        <h1 class="categorie-title">CATEGORIE</h1>
        <div class="selection-trier">
            <p>Trier</p>
            <select name="select-trier" id="select-trier">
                <option value="par prix" selected>Par prix <img src="images/top.png" alt=""></option>
                <option value="par prix" selected>Par prix</option>
                <option value="Par reduction">Par reduction</option>
                <option value="Par reduction">Par reduction</option>
                <option value="par date de publication">Par date de publication</option>
                <option value="par date de publication">Par date de publication</option>
            </select>
        </div>
    </div>
    <div class="nav-categorie">

        <div id="tout" class="item">
            <a class="sub-btn" href="#tout">Tout<img class="dropdown" src="images/icons8-vers-l'avant-52 (2).png" alt=""></a>
        </div>
        <hr>
        <div id="chambre" class="item">
            <a class="sub-btn" href="#chambre">Chambre<img class="dropdown" src="images/icons8-vers-l'avant-52 (2).png" alt=""></a>
            <div class="sub-menu">
                <a href="#">Lits</a>
                <a href="#">Matelas</a>
                <a href="#">Sommiers</a>
                <a href="#">couettes, couvre-lits, draps et taies d'oreiller</a>
                <a href="#">oreillers</a>
                <a href="#">Armoires</a>
                <a href="#">Commodes</a>
                <a href="#">Dressings</a>
                <a href="#">Tables de nuit </a>
            </div>
        </div>
        <hr>
        <div id="salon" class="item">
            <a class="sub-btn" href="#salon">Salon<img class="dropdown" src="images/icons8-vers-l'avant-52 (2).png" alt=""></a>
            <div class="sub-menu">
                <a href="">Canapés</a>
                <a href="">Fauteuils</a>
                <a href="">Table basses</a>
                <a href="">Meuble TV</a>
                <a href="">Bibliothéque</a>
                <a href="">Etagères</a>
                 <a href="">Poufs </a>
                 <a href="">Ensembles de salon  </a>
            </div>
        </div>
        <hr>
        <div id="salle-manger" class="item">
            <a class="sub-btn" href="#salle-manger">Salle a manger<img class="dropdown" src="images/icons8-vers-l'avant-52 (2).png" alt=""></a>
            <div class="sub-menu">
                <a href="">Tables</a>
                <a href="">Chaises</a>
                <a href="">Buffets</a>
                <a href="">Vitrines</a>
            </div>
        </div>
        <hr>
        <div id="cuisine" class="item">
            <a class="sub-btn" href="#cuisine">Cuisine<img class="dropdown" src="images/icons8-vers-l'avant-52 (2).png" alt=""></a>
            <div class="sub-menu">
                <a href="">Meubles de rangement</a>
                <a href="">Table et chaises de cuisine</a>
                <a href="">Eviers et robinets</a>
            </div>
        </div>
        <hr>
        <div id="salle-bain" class="item">
            <a class="sub-btn" href="#salle-bain">Salle de bain<img class="dropdown" src="images/icons8-vers-l'avant-52 (2).png" alt=""></a>
            <div class="sub-menu">
                <a href="">Meubles sous-vasque</a>
                <a href="">colonnes de rangement</a>
                <a href="">Baignoires, douches et Robinetterie</a>
                <a href="">Accessoires de salle de bain</a>
            </div>
        </div>
        <hr>
        <div id="bureau" class="item">
            <a class="sub-btn" href="#bureau">Bureau<img class="dropdown" src="images/icons8-vers-l'avant-52 (2).png" alt=""></a>
            <div class="sub-menu">
                <a href="">Bureaux</a>
                <a href="">Chaises de bureau</a>
                <a href="">Rangements de bureau</a>
                <a href="">Fauteuils de direction</a>
                <a href="">Tables de réunion</a>
            </div>
        </div>



    </div>
    <article class="list-article-boutique">
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>
        <div>
            <img src="images/meuble-tv.jpg" alt="">
            <h5>nom meuble</h5>
            <h6>10 000DA</h6>
        </div>

    </article>
</section>



<script>
    $(document).ready(function(){
        $('.sub-btn').click(function(){
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
        })
    })
</script>


<script>


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

// ajout de la pagination dans le DOM
document.querySelector('.list-article-boutique').parentNode.appendChild(pagination);


</script>



@include('part.footer')



@endsection
