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
            <select name="select-trier" id="select-trier" wire:model="tri">
  <option value="par-prix-asc" selected class="selected">Par prix ^</option>
  <option value="par-prix-desc" selected class="selected">Par prix </option>
  <option value="par-date-asc" class="unselected">Par date de publication ^</option>
  <option value="par-date-desc" class="unselected">Par date de publication</option>

</select>
        </div>
    </div>

    <div class="nav-categorie">

    <div id="chambre" class="item">
        <label>
            <input type="checkbox" wire:model="categories" value="chambre">
            Chambre
    </label>
    </div>
    <hr>
    <div id="salon" class="item">
        <label>
            <input type="checkbox" wire:model="categories" value="salon">
            Salon
        </label>
    </div>
    <hr>
    <div id="salle-manger" class="item">
        <label>
            <input type="checkbox" wire:model="categories" value="salle-manger">
            Salle à manger
        </label>
    </div>
    <hr>
    <div id="cuisine" class="item">
        <label>
            <input type="checkbox" wire:model="categories" value="cuisine">
            Cuisine
        </label>
    </div>
    <hr>
    <div id="salle-bain" class="item">
        <label>
            <input type="checkbox" wire:model="categories" value="salle-bain">
            Salle de bain
        </label>
    </div>
    <hr>
    <div id="bureau" class="item">
        <label>
            <input type="checkbox" wire:model="categories" value="bureau">
            Bureau
        </label>
    </div>

    <div class="div-input-product">


        @php
        // recupere les categories a la base de donne (list categorie)
        use App\Models\categories;
        $categories = categories::all();
        @endphp
        <select class="div-input-product" name="categorie" id="categorie" wire:model="categorieId">

            <option selected>Tout</option>

{{-- affiche les categorie (select) --}}
            @foreach ($categories as $categorie)
                <option value="{{$categorie->id}}">{{$categorie->name}}</option>
            @endforeach

        </select>
       </div>
</div>

    <article class="list-article-boutique">
        @foreach($products as $product)
        <div>
            <img class="img-a" src="{{ asset(Storage::url($product->image_principal))}}" alt="">
            <h5>{{$product->name}}</h5>
            <strong>{{$product->price}}</strong>
            <br>
            <a href="{{route('produit', $product->id)}}">Voir Article</a>
           {{-- si vs etes connecter tu peut ajouter au favoris --}}
            @if (Auth::check())
            <form wire:submit.prevent="addFavoris({{ $product->id }})">
                @csrf
                <?php
// recuperer de la table wishlist et verifie l'existance (boolean)
                    $userId = Auth::user()->id;
                    $isFavorited = DB::table('wishlists')
                                    ->where('user_id', $userId)
                                    ->where('product_id', $product->id)
                                    ->exists();
                ?>
                <button type="submit">
                    {{-- verifier si exist donc il affiche image plein --}}
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

// Parcourir tous les éléments et ajouter un écouteur d'événement de clic
const checkboxes = document.querySelectorAll('input[type="checkbox"]');

checkboxes.forEach(function(checkbox) {
  checkbox.addEventListener('click', function() {
    const selectedCategories = [];

    checkboxes.forEach(function(checkbox) {
      if (checkbox.checked) {
        selectedCategories.push(checkbox.value);
      }
    });

    // Utilisez selectedCategories pour faire quelque chose avec les catégories sélectionnées
  });
});

</script>

<style>
    .nav-categorie .item {
  background-color: #fff; /* Couleur de fond par défaut */
  padding: 10px;
  border-radius: 5px;
}

.nav-categorie .item.selected {
  background-color: #ff0; /* Couleur de fond lorsque sélectionné */
}
</style>
