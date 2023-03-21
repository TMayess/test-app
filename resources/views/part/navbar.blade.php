<nav>
    <div class="logo">
        <img src="images/monlogo.png" width="60px" >
    </div>
    <div class="div-nav">
        <ul class="nav-page mobile-menu">
            <li><a class="{{ request()-> is('/') ? 'active' : ''}}" href="{{ route('accueil')}}">Accueil</a></li>
            <li><a class="{{ request()-> is('boutique') ? 'active' : ''}}" href="{{ route('boutique')}}">Nos Articles</a></li>
            <li><a id="a-connexion" href="{{ route('auth')}}">Connexion</a></li>
        </ul>
    </div>
    <img src="images/menu-btn2.png" alt="menu" class="menu-hamburger">
</nav>

