@extends('app')
@section('content')
<header>
    @include('part.navbar')
</header>


<section class="section-list">
    <div class="div-list">
        <div class="div-crud">

            <h1>Historique des achats</h1>

            
            <form action="{{ route('article.index') }}" method="POST">
                @csrf




        <table class="table">
            <thead>
             <tr>
         <th class="first-col" scope="col">Image</th>
         <th scope="col">Nom</th>
        <th scope="col">Description</th>
        <th scope="col">Prix</th>
        <th scope="col">Date d'achat</th>
        <th class="last-col" scope="col"></th>

        </tr>
        </thead>
            <tbody>
                    <tr>
                    <td><img width="60px" src="" width="20px" alt=""></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>

            </tbody>
        </table>


        </form>
        </div>
    </div>
</section>

<style>
    .section-list{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fdfdfd;
    }

    .div-list{
        width: 85%;
        margin-top: 50px;
        border-radius: .5rem;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
    .div-list h1{
        font-size: 2em;
        font-weight: bold;
        margin: 30px 0 0 20px;
    }
    .div-list table{
        width: calc(100% - 40px);
        margin: 30px 20px;
    }
    .div-rech{
        display: flex;
        justify-content: center;
    }

    table button{
        background: #FCF8F4;
        padding: 15px 20px;
        box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
        border-radius: 10px;
        font-weight: 500;
    }
</style>


@endsection
