@extends("app")
@section("content")


<header>
    @include("part.navbar")
</header>

<div class="container-auth">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1>S'inscrire</h1>
        <div class="error-div">
            <div class="test error">
                @error('name')
                {{$message}}
                @enderror
            </div>
            <div class="test error">
                @error('firstname')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="info-perso">
            <input id="name" name="name" type="text" placeholder="Nom">
            <input name="firstname" type="text" placeholder="Prenom">
        </div>
        <div class="error">
            @error('email')
            {{$message}}
            @enderror
        </div>
        <input id="email" name="email" type="email" class="input-l"placeholder="Email">
        <div class="error">
            @error('password')
            {{$message}}
            @enderror
        </div>
        <input  name="password" type="password" class="input-l"placeholder="Mot de passe">
        <div class="error">
            @error('password')
            {{$message}}
            @enderror
        </div>
        <input name="password_confirmation" type="password" class="input-l"placeholder="Mot de passe">
        <button type="sabmit">Inscription</button>
    </form>

</div>
@endsection
