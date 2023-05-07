@extends('app')
@section('content')

    <header>

        @include('part.navbar')

        <div class="row">
            <div class="col-1">
                <h1>Bienvenue sur notre site<br>de vente de meubles<br>et de literie !<br></h1>
                <p>Nous avons une grande variété de styles de meubles pour toutes <br>les pièces de votre maison, ainsi qu'une gamme complète <br>de literie pour vous assurer des nuits confortables. N'hésitez pas<br>à parcourir notre catalogue en ligne pour découvrir tous nos <br>produits et offres spéciales</p>
                <a href="{{ route('boutique')}}" class="btn">Acheter maintenant</a>
            </div>
            <div class="col-2">
                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide"><img src="images/acc/2.jpg" alt=""></div>

                        <!-- <div class="swiper-slide"><img src="images/acc/3.psd 2.jpg" alt=""></div>  -->
                        <div class="swiper-slide"><img src="images/acc/1.psd 2.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="images/acc/4.psd 2.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="images/acc/5.psd 2.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="images/acc/6.psd 2.jpg" alt=""></div>


                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
        </div>


    </header>
    <div class="div-space"></div>

    @php
use App\Models\Product;

$topProducts = Product::select('products.id', 'products.name', 'products.description', 'products.tag', 'products.valide', 'products.image_principal', 'products.price')
                        ->join('achats', 'products.id', '=', 'achats.product_id')
                        ->groupBy('products.id', 'products.name', 'products.description', 'products.tag', 'products.valide', 'products.image_principal', 'products.price')
                        ->orderByRaw('COUNT(achats.id) DESC')
                        ->limit(3)
                        ->get();
    @endphp
    <section>
        <article>
            <h2>Produits populaires</h2>
            <p>Offrez-vous le meilleur du confort avec nos produits de meubles et de literie les plus populaires</p>
            <div class="list-article bg-article-pp">
               @foreach ($topProducts as $product)
               <div>
                <img  width="400px" src="{{asset(Storage::url($product->image_principal))}}" alt="">
                <h5>{{$product->name}}</h5>
                <h6>{{$product->price}}</h6>
                 </div>

               @endforeach
            </div>

        </article>
        @php


$produits = Product::select('products.id', 'products.name', 'products.description', 'products.tag', 'products.valide', 'products.image_principal', 'products.price')
                   ->where('valide', 1)
                   ->latest('created_at')
                   ->take(3)
                   ->get();
        @endphp
        <article>
            <h2>Nos nouveau produits</h2>
            <p>Découvrez nos derniers produits, conçus avec les dernières tendances en matière de design et de fonctionnalité,pour apporter une touche de modernité à votre intérieur</p>
            <div class="list-article bg-article-np">
                @foreach ($produits as $produit)
                <div>
                    <img width="400px" src="{{asset(Storage::url($produit->image_principal))}}" alt="">
                    <h5>{{$produit->name}}</h5>
                    <h6>{{$produit->price}} DZD</h6>
                </div>
                @endforeach


            </div>

        </article>


        <article class="contact-us">
            <span>
                <h2>CONTACTEZ-NOUS</h2>
                <p>Merci de visiter notre site !
                    Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter.
                    Nous sommes là pour vous aider et pour rendre votre expérience de magasinage
                    en ligne agréable et facile. Vous pouvez nous envoyer un e-mail ou remplir le
                    formulaire de contact ci-dessous, et nous ferons de notre mieux pour vous
                    répondre rapidement. Nous apprécions vos commentaires et vos suggestions,
                    alors n'hésitez pas à nous les envoyer</p>
            </span>
            <div class="contact-form">
                <form>
                    <input type="text" id="nom" name="nom" placeholder="Votre" >
                    <input type="email" id="email" name="email"  placeholder="Votre adresse e-mail">
                    <input type="text" id="sujet" name="sujet"  placeholder="Le Sujet">
                    <textarea id="message" name="message"  placeholder="Votre message ..."></textarea>
                    <button class="btn-form" type="submit">Envoyer</button>
                  </form>
            </div>
        </article>

    </section>





    @include('part.footer')


@endsection











