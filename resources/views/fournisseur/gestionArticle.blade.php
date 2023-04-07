@extends('app')
@section('content')

@include('part.sidebarnav')

    <section class="section-ajout">
        <form action="{{ route('article.index') }}" method="POST">
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
                <input type="text" name="image" id="image" class="form-input">
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
        <form action="{{ route('article.index') }}" method="POST">
            @csrf
            <h1>Modifier et supprimer un article</h1>

            <input type="text" name="recherche" id="recherche" placeholder="Recherche"  >

    <table class="table">
        <thead>
         <tr>
     <th scope="col">Image</th>
     <th scope="col">Nom</th>
    <th scope="col">Description</th>
    <th scope="col">Prix</th>
    <th scope="col">Ref</th>
    <th scope="col"></th>
    <th scope="col"></th>

</tr>
    </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                <td>{{$product->image}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->reference_product}}</td>
                <td><a href="">modif</a></td>
                <td><a href="">supp</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @endsection
        </form>
    </section>


