
<?php $user = Auth::user(); ?>
<nav>
    <div class="logo">
        <img src="images/monlogo.png" width="60px" >
    </div>
    <div class="div-nav">
        <ul class="nav-page mobile-menu">
            <li><a class="{{ request()-> is('/') ? 'active' : ''}}" href="{{ route('accueil')}}">Accueil</a></li>
            <li><a class="{{ request()-> is('boutique') ? 'active' : ''}}" href="{{ route('boutique')}}">Boutique</a></li>
            @if (Auth::check())

            <li><a class="{{ request()-> is('list-achat') ? 'active' : ''}}" href="{{ route('list-achat')}}">Liste achats</a></li>
            <li><a class="{{ request()-> is('favoris') ? 'active' : ''}}" href="{{ route('favoris')}}">Mes favoris</a></li>

            @if($user->role == "fournisseur")
                <li><a class="{{ request()-> is('article.index') ? 'active' : ''}}" href="{{ route('article.index')}}">Gestion article</a></li>
            @endif

            <li><a href="#"><div class="div-user" onclick="onClickToggle()"  >
                <img width="25px" src="images/icons8-utilisateur-90.png" title="Mon compte" alt="">
                <span>{{$user->name}} {{$user->firstname}}</span>
                </div></a></li>

            @else
                <li><a class="btn-connexion {{ request()-> is('login') ? 'active-btn' : ''}}" href="{{ route('login')}}">Connexion</a></li>
                <li><a class="btn-inscription {{ request()-> is('register') ? 'active-btn' : ''}}" href="{{ route('register')}}">Inscription</a></li>
                <div></div>
            @endif
        </ul>
        {{-- @if (Auth::check()) --}}
            <div class="sub-menuwrap" id="sub-menuwrap"  >
                <ul>
                    <li><li><a href="{{route('profile.edit')}}">Mon profile</a></li>
                    <hr>
                    <li><form  method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button>Deconnection</button>
                        </form>
                    </li>
                </ul>
            </div>
        {{-- @endif --}}


    </div>
    <img src="images/menu-btn2.png" alt="menu" class="menu-hamburger">
</nav>
<script>
    let subMenuWrap = document.getElementById("sub-menuwrap");

    function onClickToggle(){
        subMenuWrap.classList.toggle("open-menu");
    }
</script>


