

<body>
    <aside class="sidebar">
        <div class="div-logo">
            <img src="images/monlogo.png" width="100px" alt="">
        </div>
        <div class="div-sidenav">
            <ul>
                <li>
                    <a  class="{{ request()-> is('gestion-utilisateur') ? 'active-side' : ''}}" href="{{route("utilisateur.index")}}">
                        <span>Gestion utilisateur</span>
                    </a>
                </li>
                <li>
                <a  class="{{ request()-> is('gestion-article') ? 'active-side' : ''}}" href="{{route("article.index")}}">
                    <span>Gestion article</span>
                </a>
                </li>
                <li>
                <a class="{{ request()-> is('gestion-pack') ? 'active-side' : ''}}"  href="{{route("pack.index")}}">
                    <span>Gestion pack</span>
                </a>
                </li>
            </ul>
        </div>
    </aside>

</body>



