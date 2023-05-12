<div>
    <section class="section-list">
        <div class="div-list">

            <div>
                <h1>Modifier et supprimer un article</h1>
            </div>

            <div class="div-rech">
                <div class="div-recherche">
                    <input type="text" name="recherche" id="search" placeholder="Recherche" wire:model="search"  >
                </div>
            </div>
            <div class="div-btn"><button onclick="afficherDiv()">Ajouter un article</button></div>
            <form action="{{ route('article.index') }}" method="POST">
                @csrf


        <table class="table">
            <thead>
             <tr>
         <th class="first-col" scope="col">Image</th>
         <th scope="col">Nom</th>
        <th scope="col">Description</th>
        <th scope="col">Prix</th>
        <th scope="col">Ref</th>
        <th class="last-col" scope="col">Action</th>

        </tr>
        </thead>
            <tbody>
                {{-- le produit on l'envoie depuis le controleur puis afficher les info du prduit --}}
                @foreach($products as $product)
                    <td><img width="60px" src="{{ asset(Storage::url($product->image_principal)) }}" width="20px" alt=""></td>

                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->reference_product}}</td>

                <td class="a-action"><a href="{{route('modif_article',$product)}}">Modifier</a><a href="{{route('delete_article',$product->id)}}">Supprimer</a></td>

                    </tr>
                @endforeach

            </tbody>
        </table>

       {{-- pr ajouter une page apartir 10 article 3la hsab productTable.php --}}
        </form>
        <div class=pagination>{{$products->links()}}</div>
        </div>



    </section>


</div>
