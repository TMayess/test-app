@extends('app')

@section('content')


<header>
    @include('part.navbar')
</header>

<section class="section-pa">
    <article class="article-image-pa">
        <img width="500px" src="{{$product->image}}" alt="">
          {{-- <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
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
</div> --}}
    </article>
    <article class="article-details-pa">
        <div class="part-detail">

            <div class="n-meuble">
                <h6>Meuble</h6>
            </div>

            <div class="n-product">
                <h3>{{$product->name}}</h3>
            </div>

            <div class="div-avis">
                <img src="images/stars.png" alt="">
                <h5>8/10</h5>
                <span>11 Achats</span>
            </div>


            <div class="div-description">
                <p>{{$product->description}}</p>
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
                <p>{{$product->materials}}</p>
            </div>

            <div class="marker">
                <h6>Couleur </h6>
                <div class="div-marker">
                    <div>{{$product->color}}</div>
                </div>
            </div>



            <div class="buy-article">
                <span>{{$product->price}} DZD</span>
                <form action="{{route('achat',$product->id)}}" method="POST" >
                    @csrf
                    <button type="submit">Acheter</button>
                </form>
            </div>



        </div>

    </article>
</section>


{{-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

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
  </script> --}}

@endsection
