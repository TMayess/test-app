@extends('app')
@section('content')


<header>

    @include('part.navbar')

    <div class="head-page">
        <h2>LUXE A PETIT PRIX</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ea ducimus, numquam eius vel pariatur adipisci accusantium, autem magnam tenetur eveniet dolor</p>
    </div>

</header>

<section class="sctn-emplacement">


    <a class="a-tout" href="#sctn-article">Tout</a>
    <a class="a-chambre" href="#sctn-article">Chambre</a>
    <a class="a-salon" href="#sctn-article">Salon</a>
    <a class="a-salle-manger" href="#sctn-article">Salle a manger</a>
    <a class="a-cuisine" href="#sctn-article">Cuisine</a>
    <a class="a-salle-bain" href="#sctn-article">Salle de bain</a>
    <a class="a-bureau" href="#sctn-article">Bureau</a>
    <a class="a-accessoire" href="#sctn-article">Accessoires</a>

</section>


<section id="sctn-article" class="sctn-article">

    <livewire:boutique-table />
</section>
@if (session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif


@include('part.footer')

<style>
    .list-article-boutique div{
        position: relative;
    }
    .list-article-boutique form img{
        width: 30px;
        height: 30px;
    }
    .list-article-boutique form{
        position: absolute;
        top: 20px;
        right: 20px;
    }




</style>




@endsection
