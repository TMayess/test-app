@extends('app')
@section('content')

@include('part.sidebarnav')

    <section class="section-ajout">
        <div class="div-crud">
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
<div class="div-crud">

    <h1>Modifier et supprimer un article</h1>
    <div class="a"><input type="text" name="recherche" id="search" placeholder="Recherche"  ></div>

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
<th scope="col"></th>
<th class="last-col" scope="col"></th>

</tr>
</thead>
    <tbody>
        @foreach($products as $product)
            <tr>
            <td><img width="60px" src="{{ asset(Storage::url($product->image)) }}" width="20px" alt=""></td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->reference_product}}</td>

        <td><a href=""><img width="23px" src="{{asset('images/edit-icon1.png')}}" alt=""></a></td>
        <td><a href=""><img width="26px" src="{{asset('images/supp-icon1.png')}}" alt=""></a></td>
            </tr>
        @endforeach

    </tbody>
</table>


</form>
{{$products->links()}}
</div>


</section>


<script>
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
</script>


    @endsection

