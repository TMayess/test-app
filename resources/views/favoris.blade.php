@extends('app')
@section('content')
<header>
    @include('part.navbar')
</header>

<livewire:favoris-table />

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

</style>

@endsection
