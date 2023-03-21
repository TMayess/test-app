@extends('app')

@section('content')
<header>
    @include('part.navbar')
</header>

<section class="section-pa">
    <article class="article-image-pa">
          <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
<div class="swiper-wrapper">
  <div class="swiper-slide">
    <img src="images/meuble1.webp" />
  </div>
  <div class="swiper-slide">
    <img src="images/meuble1.webp" />
  </div>
  <div class="swiper-slide">
    <img src="images/meuble1.webp" />
  </div>
  <div class="swiper-slide">
    <img src="images/meuble1.webp" />
  </div>

</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>
<div thumbsSlider="" class="swiper mySwiper">
<div class="swiper-wrapper">
    <div class="swiper-slide">
        <img src="images/meuble1.webp" />
      </div>
      <div class="swiper-slide">
        <img src="images/meuble1.webp" />
      </div>
      <div class="swiper-slide">
        <img src="images/meuble1.webp" />
      </div>
      <div class="swiper-slide">
        <img src="images/meuble1.webp" />
      </div>

</div>
</div>
    </article>
    <article class="article-details-pa">
        <div class="part-detail">

            <div>
                <div class="n-meuble">
                    <h6>Meuble</h6>
                </div>
                
                <div class="n-product">
                    <h3>Nom du produit</h3>
                </div>

                <div class="div-avis">
                    <img src="images/stars.png" alt="">
                    <h5>8/10</h5>
                    <span>11 Achats</span>
                </div>


                <div class="div-description">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudianda Repudiandae dolorum quidem recusandae corrupti deleniti doloribus illo! Totam, dolore recusandae. Eligendi voluptatibus fugit optio esse quos fuga ab temporibus officia ratione!</p>
                </div>
                <div class="taille">
                    <div>
                        <h6>langueur</h6>
                        <span>50cm</span>
                    </div>
                    <div>
                        <h6>largeur</h6>
                        <span>40cm</span>
                    </div>
                    <div>
                        <h6>Profondeur</h6>
                        <span>59cm</span>
                    </div>
                </div>

                <div class="matiere">
                    <h6>Matière</h6>
                    <p>S lohh n l merzag</p>
                </div>

                <div class="marker">
                    <h6>Couleur </h6>
                    <div class="div-marker">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>






                <div class="buy-article">
                    <span>1000.00 DZD</span>
                    <button>Acheter</button>
                </div>

            </div>



        </div>

    </article>
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>

@endsection
