@extends('app')

@section('content')


<header>
    @include('part.navbar')
</header>

<section>

    <?php
        ?>
    <div class="article-image">
          <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
<div class="swiper-wrapper">
  <div class="swiper-slide">
    <img height="60px" src="{{asset(Storage::url($product->image_principal))}}" />
  </div>
  <div class="swiper-slide">
    <img src="{{asset(Storage::url($images[0]->image))}}" />
  </div>
  <div class="swiper-slide">
    <img src="{{asset(Storage::url($images[1]->image))}}" />
  </div>
  <div class="swiper-slide">
    <img src="{{asset(Storage::url($images[2]->image))}}" />
  </div>

</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>
<div thumbsSlider="" class="swiper mySwiper">
<div class="swiper-wrapper">
    <div class="swiper-slide">
        <img src="{{asset(Storage::url($product->image_principal))}}" />
      </div>
      <div class="swiper-slide">
        <img src="{{asset(Storage::url($images[0]->image))}}" />
      </div>
      <div class="swiper-slide">
        <img src="{{asset(Storage::url($images[1]->image))}}" />
      </div>
      <div class="swiper-slide">
        <img src="{{asset(Storage::url($images[2]->image))}}" />
      </div>

</div>
</div>
</div>
    <div>
        <div class="part-detail">

            <div class="Title">
                <div class="n-meuble">
                    <p>{{$product->tag}}</p>
                </div>
                <div class="n-product">
                    <h3>{{$product->name}}</h3>
                </div>

                @php
                    use App\Models\Achat;

                    $achats_count = Achat::select('achats.*')
                    ->where('achats.product_id', '=', $product->id)
                    ->count();
                @endphp

                <div class="div-avis">
                    <span>Nombre total d'achats pour cet article : {{$achats_count}} achat(s)</span>
                </div>


                <div class="div-description">
                    <p>{{$product->description}}</p>
                </div>

                @if ($product->tag === "#meuble")
                <div class="taille">
                    <div>
                        <h6>langueur</h6>
                        <span>{{$product->meuble->largeur}} cm</span>
                    </div>
                    <div>
                        <h6>largeur</h6>
                        <span>{{$product->meuble->hauteur}} cm</span>
                    </div>
                    <div>
                        <h6>Profondeur</h6>
                        <span>{{$product->meuble->profondeur}} cm</span>
                    </div>
                </div>

                <div class="matiere">
                    <h6>Matière</h6>
                    <p>{{$product->meuble->materials}}</p>
                </div>

                @endif

               @if ($product->tag === "#literie")
               <div class="marker">
                <h6>Taille :{{$product->literie->taille}}</h6>

                </div>
               @endif






                <div class="buy-article">
                    <span>{{$product->price}} DZD</span>
                    <form action="{{route('achat',$product->id)}}" method="POST" >
                        @csrf
                        <button class="btn-article" type="submit">Acheter</button>
                    </form>
                </div>

            </div>





        </div>

    </div>
</section>

{{-- <section class="section-pa">
    <article class="article-image-pa">
        <img width="500px" src="{{$product->image}}" alt=""> --}}
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
{{-- </div> --}}
    {{-- </article>
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
</section> --}}


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
<style>
    .part-detail{
    height: 55%;
    display: flex;
    flex-direction: column;
    flex-basis: 40%;
    flex-wrap: nowrap;
    justify-content: space-between;
    padding: 60px;
    background-color: #FCF8F4;

}
.n-meuble p{
    font-weight: 500;
    color: #8a8a8a;
}
.n-product h3{
    font-weight: bold;
    color: black;
    font-size: 2em;
}
.div-avis{
    margin-top: 15px;
    display: flex;
    align-items: end;
    gap: 7px;

}
.div-avis img{
    width: 20px;
}
.div-avis h5{
    font-size: 15px;
}
.div-avis span{
    color: #8a8a8a;
    font-weight: 500;
    font-size: 15px;
}





.part-detail h6{
    font-size: 17px;
}

.div-description{
    margin-top: 30px;
    margin-bottom: 30px;
}
.taille{
    width: 295px;
    display: block;
    margin-top: 50px;
    border-radius: 5px;
    border: 2px solid #8a8a8a;
}
.taille div{
    display: inline-block;
    padding: 10px;
    border-left:1px solid #8a8a8a ;
}
.taille div h6{
    display: block;
    color: #8a8a8a;
}
.taille span{
    display: block;
    text-align: center;
}

.taille h6{
    display: inline-block;
}
.taille p{
    display: inline-block;
    font-weight: 600;
    margin-left: 10px;
    color: #8a8a8a;
}
.matiere h6{
    margin-top: 50px;
    display: inline-block;
}
.matiere p{
    display: inline-block;
    font-weight: 600;
    margin-left: 10px;
    color: #8a8a8a;
}

.marker{
    margin-top: 15px;
}
.div-marker div{
    margin-top: 10px;
    display: inline-block;
    width: 25px;
    border-radius: 15px;
    height: 25px;
    margin-right: 5px;
    background-color: #85586D;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}


.buy-article{
    padding-top: 150px;
    display: flex;
    justify-content: space-between;
    align-items: end;
    align-items: center;
}
.buy-article span{
    font-size: 25px;
    font-weight: bolder;
}


button{
    padding: 15px 40px;
    background-color: #85586D;
    color: white;
    font-size: 16px;
    font-weight: 600;
    border: none;
    border-radius: 5px;
}
.swiper-button-next,
.swiper-button-prev {
    right:10px;
    padding: 30px;
    color: #85586D !important;
    fill: black !important;
    stroke: black !important;
}



.swiper {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 70%;
    height: 100%;
    object-fit: cover;
  }

  .swiper {
    width: 100%;
    height: 300px;
    margin-left: auto;
    margin-right: auto;
  }
  .article-image{
    max-width: 45%;
    margin-top: 70px;
    float: left;
    height: auto;
  }

  .swiper-slide {
    background-size: cover;
    background-position: center;
  }

  .mySwiper2 {
    height:70%;
    width: 100%;
  }

  .mySwiper {
    height: 20%;
    box-sizing: border-box;
    padding: 10px 0;
  }

  .mySwiper .swiper-slide {
    opacity: 0.4;
  }

  .mySwiper .swiper-slide-thumb-active {
    opacity: 1;
  }

  .btn-article{
    background: black;
  }
</style>
@endsection
