
<div id="div-ajout" class="div-ajout">
    <form enctype="multipart/form-data" action="{{ route('article.index') }}" method="POST">
        @csrf

        <!-- Affichage du message flash de succès, s'il existe -->
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif


        <h1>Modifier article</h1>

        <div class="div-form-product">
            <div class="div2-form-product">
                <div class="div-input-type-product">
                    <div>
                        <input type="radio" id="meuble" name="produit" value="meuble" checked onclick="togglePriceInput('div-dimensions', 'div-materials', 'div-taille', 'meuble')">
                        <label for="meuble">Meuble</label>
                    </div>

                    <div>
                        <input type="radio" id="literie" name="produit" value="literie" onclick="togglePriceInput('div-dimensions', 'div-materials', 'div-taille', 'literie')">
                        <label for="literie">Literie</label>
                    </div>
                    <div>
                        <input type="radio" id="accessoire" name="produit" value="accessoire" onclick="togglePriceInput('div-dimensions', 'div-materials', 'div-taille', 'accessoire')">
                        <label for="accessoire">Accessoire</label>
                    </div>

                </div>

                <div class="div-input-product">
                    <label for="name">Nom du produit</label>
                    <input type="text" name="name" id="name" class="form-input" value="{{$product->name}}">
            {{-- alerte erreur des inputs --}}

                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="div-input-product">
                    <label for="price">Prix</label>
                    <input type="text" name="price" id="price" class="form-input" value="{{$product->price}}">
                    @error('price')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="div-input-product">
                    <label for="imagePrincipal">Image</label>
                    <input type="file" name="imagePrincipal"  id="imagePrincpal" class="form-control">
                    @error('imagePrincipal')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="div-input-product">
                    <label for="images">Image :</label>
                    <input type="file" name="images[]"  id="images" multiple class="form-control">
                    @error('images')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>


                <div class="div-input-product">
                    <label for="reference_product">Référence</label>
                    <input type="text" name="reference_product" id="reference_product" class="form-input" value="{{$product->reference_product}}">
                    @error('reference_product')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
               <div class="div-input-product">

                <label for="categorie">Catégories</label>
                <select class="div-input-product" name="categorie" id="categorie">

                    <option selected>Choisissez la catégorie:</option>


                    @foreach ($categories as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                    @endforeach

                </select>
               </div>
            </div>
            <div class="div2-form-product">
                <div class="div-input-position">
                    <div>
                        <div>
                            <input type="checkbox" id="chambre" name="chambre" value="chambre">
                            <label for="chambre">Chambre</label>
                        </div>
                        <div>
                            <input type="checkbox" id="salon" name="salon" value="salon">
                            <label for="salon">Salon</label>
                        </div>

                        <div>
                            <input type="checkbox" id="salle-manger" name="salle-manger" value="salle-manger">
                            <label for="salle-manger">Salle a manger</label>
                        </div>
                    </div>
                    <div>
                        <div>
                            <input type="checkbox" id="cuisine" name="cuisine" value="cuisine">
                            <label for="cuisine">Cuisine</label>
                        </div>
                        <div>
                            <input type="checkbox" id="salle-bain" name="salle-bain" value="salle-bain">
                            <label for="salle-bain">Salle de bain</label>
                        </div>
                        <div>
                            <input type="checkbox" id="bureau" name="bureau" value="bureau">
                            <label for="bureau">Bureau</label>
                        </div>
                    </div>

                </div>

                <div class="div-input-product" id="div-taille">
                    <label for="taille">Taille</label>
                    <input type="text" name="taille" id="taille" class="form-input">
                    @error('taille')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="div-input-dimension div-input-product"  id="div-dimensions">
                    <div>
                        <label for="hauteur">Hauteur</label>
                        <input type="text" name="hauteur" id="hauteur" class="form-input">
                    </div>

                    <div>
                        <label for="largeur">Largeur</label>
                        <input type="text" name="largeur" id="largeur" class="form-input">
                    </div>

                    <div>
                        <label for="profondeur">Profondeur</label>
                        <input type="text" name="profondeur" id="profondeur" class="form-input">
                    </div>
                </div>

                <div class="div-input-product" id="div-materials">
                    <label for="materials">Matériaux</label>
                    <input type="text" name="materials" id="materials" class="form-input">
                    @error('materials')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>



                <div class="div-input-product">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="Votre description ..."></textarea>
                    @error('description')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="div-btn"><button type="submit">Modifier</button></div>

            </div>
        </div>
    </form>
</div>
