@extends('app')
@section('content')


<header>
    @include('part.navbar')
</header>


    <div id="div-ajout" class="div-ajout">
        <button class="btn-div" onclick="fermerDiv()">fermer</button>
        <form enctype="multipart/form-data" action="{{ route('article.index') }}" method="POST">
            @csrf

            <!-- Affichage du message flash de succès, s'il existe -->
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif


            <h1>Ajouter un nouvel article</h1>

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
                        <input type="text" name="name" id="name" class="form-input">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="div-input-product">
                        <label for="price">Prix</label>
                        <input type="text" name="price" id="price" class="form-input">
                        @error('price')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="div-input-product">
                        <label for="image">Image</label>
                        <input type="file" name="image[]"  id="image" multiple class="form-control">

                        @error('image')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="div-input-product">
                        <label for="reference_product">Référence</label>
                        <input type="text" name="reference_product" id="reference_product" class="form-input">
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

                    <div class="div-btn"><button type="submit">Ajouter</button></div>

                </div>
            </div>
        </form>
    </div>


<livewire:product-table />

 {{-- <script>
    $('#search').on('keyup', function(){
        search();
    });
    function search(){
        var keyword = $('#search').val();
        $.post('{{ route("search.products") }}',
        {
            _token: $('meta[name="csrf-token"]').attr('content'),
            keyword:keyword
        },
        function(data){
            table_post_row(data);
            console.log(data);
        });
    }
    // table row with ajax
    function table_post_row(res){
    let htmlView = '';
    if(res.products.length <= 0){
        htmlView+= `
        <tr>
            <td colspan="4">No data.</td>
        </tr>`;
    }
    for(let i = 0; i < res.products.length; i++){
        htmlView += `
        <tr>
 <th class="first-col" scope="col">Image</th>
 <th scope="col">Nom</th>
<th scope="col">Description</th>
<th scope="col">Prix</th>
<th scope="col">Ref</th>
<th scope="col"></th>
<th class="last-col" scope="col"></th>

</tr>
</thead>
    <tbody>
        @foreach($products as $product)
            <tr>
            <td><img width="60px" src="{{asset('/storage/`+res.products[i].image+`')}}" alt=""></td>


            <td>`+res.products[i].name+`</td>
            <td>`+res.products[i].description+`</td>
            <td>`+res.products[i].price+`</td>
            <td>`+res.products[i].reference_product+`</td>

            <td><a href=""><img width="23px" src="{{asset('images/edit-icon1.png')}}" alt=""></a></td>
        <td><a href=""><img width="26px" src="{{asset('images/supp-icon1.png')}}" alt=""></a></td>

      </tr>
      @endforeach
            `;
    }
        $('tbody').html(htmlView);
    }

    $(document).ready(function() {
        $('.session').css('opacity', 1).delay(1000).animate({opacity: 0}, 1000, function() {
            $(this).css('display', 'none');});
    });
</script> --}}
<style>
    .section-list{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fdfdfd;
        padding-bottom: 40px;
    }

    .div-list{
        width: 85%;
        margin-top: 50px;
        border-radius: .5rem;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
    .div-list h1,.div-ajout h1{
        font-size: 2em;
        font-weight: bold;
        margin: 30px 0 0 20px;
    }
    .div-list table{
        width: calc(100% - 40px);
        margin: 30px 20px;
    }

    table button{
        background: #FCF8F4;
        padding: 15px 20px;
        box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
        border-radius: 10px;
        font-weight: 500;
    }

    .div-rech{
        display: flex;
        justify-content: center;
    }


    .div-ajout{
        display: none;
        position: fixed;
        top:100px;
        left: 100px;
        right: 100px;
        padding: 30px;
        background: white;
        border-radius: .5rem;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .div-ajout div input{
        padding: 10px;
    }
    .div-ajout div button{
        float: right;
        background: #FCF8F4;
        padding: 20px 40px;
        margin: 20px;
        box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
        border-radius: 10px;
        font-weight: 500;
    }
    .div-ajout div button:hover{
        color: #fdfdfd;
        background: #85586D;
    }

    .div-input-product{
        display: flex;
        justify-content:space-between;
        align-items: center;
        padding: 10px;
    }
    .div-input-product input,.div-input-product textarea{
        width: 60%;
    }
    .div-input-position{
        display: flex;
        padding: 10px;
        flex-direction: row;
    }
    .div-input-position div{
        width: 100%;
        display: inline-block;
    }


    .div-input-dimension input{
        width: 100px
    }

    .div-input-type-product{
        padding: 10px;
        display: flex;
        justify-content: space-evenly;
    }

    .div-form-product{
        display: flex;
    }
    .div2-form-product{
        flex-basis: 50%;
        padding: 20px
    }
    .btn-div{
        position: absolute;
        right: 10px;
        top: 10px;
    }
    .a-action a{
        padding: 15px 20px;
        margin: 10px;
        background: #85586D;
        color: white;
        border-radius: 10px;
        font-weight: 500;
    }
    .a-action{
        width: 100px;
    }
    .div-btn{
        width: 100%;
    }
    .div-btn button{
        float: right;
        padding: 15px 20px;
        background: #85586D;
        color: white;
        font-weight: 500;
        margin: 30px;
    }


</style>

<script>
    var div4 = document.getElementById('div-taille');
    div4.style.display = 'none';
    function togglePriceInput(divId1, divId2, divId3, type) {
        var div1 = document.getElementById(divId1);
        var div2 = document.getElementById(divId2);
        var div3 = document.getElementById(divId3);
        if (type == 'meuble') {
            div1.style.display = 'flex';
            div2.style.display = 'flex';
            div3.style.display = 'none';
        } else if (type == 'literie') {
            div1.style.display = 'none';
            div2.style.display = 'none';
            div3.style.display = 'flex';
        }else if (type == 'accessoire') {
            div1.style.display = 'none';
            div2.style.display = 'none';
            div3.style.display = 'none';
        }
    }

    function afficherDiv() {
        var div = document.getElementById("div-ajout");
        div.style.display = "block";
    }
    function fermerDiv() {
        var div = document.getElementById("div-ajout");
        div.style.display = "none";
    }
</script>


    @endsection

{{-- /*<div class="div-crud">
    <form enctype="multipart/form-data" action="{{ route('article.index') }}" method="POST">
        @csrf

        <!-- Affichage du message flash de succès, s'il existe -->
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif


        <h1>Ajouter un nouvel article</h1>

        <div>
            <label for="name">Nom du produit</label>
            <input type="text" name="name" id="name" class="form-input">
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="price">Prix</label>
            <input type="text" name="price" id="price" class="form-input">
            @error('price')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-input">
            @error('image')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="reference_product">Référence</label>
            <input type="text" name="reference_product" id="reference_product" class="form-input">
            @error('reference_product')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="dimensions">Dimensions</label>
            <input type="text" name="dimensions" id="dimensions" class="form-input">
            @error('dimensions')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="materials">Matériaux</label>
            <input type="text" name="materials" id="materials" class="form-input">

            @error('materials')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="color">Couleur</label>
            <input type="text" name="color" id="color" class="form-input">
            @error('color')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Votre description ..."></textarea>
            @error('description')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="div-btn"><button type="submit">Ajouter</button></div>
    </form>
</div>
*/ --}}
