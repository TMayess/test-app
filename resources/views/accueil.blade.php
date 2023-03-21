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
    <section>
        <article>
            <h2>Produits populaires</h2>
            <p>Offrez-vous le meilleur du confort avec nos produits de meubles et de literie les plus populaires</p>
            <div class="list-article bg-article-pp">
                <div>
                    <img src="images/meuble1.webp" alt="">
                    <h5>Meuble Vinyles en chêne</h5>
                    <h6>10 000DA</h6>
                </div>
                <div>
                    <img src="images/meuble2.webp" alt="">
                    <h5>Fauteuil Jimi</h5>
                    <h6>2 000DA</h6>
                </div>
                <div>
                    <img src="images/meuble3.webp" alt="">
                    <h5>Lit plateforme pin massif</h5>
                    <h6>6 000DA</h6>
                </div>
            </div>

        </article>
        <article>
            <h2>Nos nouveau produits</h2>
            <p>Découvrez nos derniers produits, conçus avec les dernières tendances en matière de design et de fonctionnalité,pour apporter une touche de modernité à votre intérieur</p>
            <div class="list-article bg-article-np">
                <div>
                    <img src="images/meuble4.webp" alt="">
                    <h5>Lits superposés</h5>
                    <h6>12 000DA</h6>
                </div>
                <div>
                    <img src="images/meuble5.webp" alt="">
                    <h5>Meuble de cuisine </h5>
                    <h6>9 000DA</h6>
                </div>
                <div>
                    <img src="images/meuble6.webp" alt="">
                    <h5>Table de bar haute</h5>
                    <h6>10 000DA</h6>
                </div>
            </div>

        </article>
        <article>
            <h2>Nos meilleurs promos</h2>
            <p>Profitez de nos offres promotions exceptionnelles et donnez à votre maison un nouveau look à petit prix </p>
            <div class="list-article bg-article-mp">
                <div>
                    <img src="images/meuble7.webp" alt="">
                    <h5>Buffet 3 portes Compo</h5>
                    <h6>21 000DA</h6>
                </div>
                <div>
                    <img src="images/meuble8.webp" alt="">
                    <h5>Fauteuil de table vintage</h5>
                    <h6>9 000DA</h6>
                </div>
                <div>
                    <img src="images/meuble9.webp" alt="">
                    <h5>Meuble Vinyle vintage</h5>
                    <h6>11 000DA</h6>
                </div>
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

<script>
    const menuHamburger = document.querySelector(".menu-hamburger")
    const navLinks = document.querySelector(".nav-page")

    menuHamburger.addEventListener('click',()=>{
    navLinks.classList.toggle('mobile-menu')
    })
</script>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
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
  </script>



    @include('part.footer')


@endsection











