<div>

    <div class="div-space-recherche">
        <div class="div-recherche">
            <input type="text" id="Recherche" name="recherche"  placeholder="Rechercher des article ..." wire:model.debounce.500ms="search">
        </div>
    </div>
    <div class="tice"><h1 class="section_title">Nos article</h1></div>
    <div>
        <h1 class="categorie-title">CATEGORIE</h1>
        <div class="selection-trier">
            <p>Trier</p>
            <select name="select-trier" id="select-trier">
                <option value="par prix" selected>Par prix <img src="images/top.png" alt=""></option>
                <option value="Par reduction">Par reduction</option>
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
        @foreach($products as $product)
        <div>
            <img class="img-a" src="{{$product->image_principal}}" alt="">
            <h5>{{$product->name}}</h5>
            <strong>{{$product->price}}</strong>
            <br>
            <a href="{{route('produit', $product->id)}}">Voir Article</a>
            @if (Auth::check())
            <form wire:submit.prevent="addFavoris({{ $product->id }})">
                @csrf
                <?php
                    $userId = Auth::user()->id;
                    $isFavorited = DB::table('wishlists')
                                    ->where('user_id', $userId)
                                    ->where('product_id', $product->id)
                                    ->exists();
                ?>
                <button type="submit">
                    @if ($isFavorited)
                        <img class="img-favoris" src="{{asset('images/icon/icon-aime-active.png')}}" alt="">
                    @else
                        <img class="img-favoris" src="{{asset('images/icon/icon-aime.png')}}" alt="">
                    @endif
                </button>
            </form>
            @endif
        </div>
    @endforeach

    </article>
    <div class=pagination>{{$products->links()}}</div>

</div>
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('favorisAdded', function () {
            window.location.href = '{{ route("boutique") }}';
        });
    });
</script>
