<div>
    <section class="section-list">
        <div class="div-list">
            <div class="div-crud">

                <h1>Mes Favoris</h1>

                <div class="div-rech">
                    <div class="div-recherche">
                        <input type="text" name="recherche" id="search" placeholder="Recherche" wire:model="search">
                    </div>
                </div>

                <form action="{{ route('article.index') }}" method="POST">
                    @csrf

                    <table class="table">
                        <thead>
                        <tr>
                    <th class="first-col" scope="col">Image</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix</th>

                    <th class="last-col" scope="col">Action</th>

                    </tr>
                    </thead>
                        <tbody>
                            @foreach($wish as $w)
                            <tr>
                            <td><img width="60px" src="{{ asset(Storage::url($w->image_principal)) }}" width="20px" alt=""></td>
                            <td>{{$w->produit_name}}</td>
                            <td>{{$w->produit_description}}</td>
                            <td>{{$w->produit_price}}</td>
                                <td class="a-action"><a href="{{route('produit', $w->product_id)}}">Acheter</a><a href="{{route('delete_function',$w->product_id)}}">Supprimer</a></td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>


            </form>

            <div class=pagination>{{$wish->links()}}</div>
            </div>
        </div>
    </section>

</div>
