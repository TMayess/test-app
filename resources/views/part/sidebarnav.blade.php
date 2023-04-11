

<body>
    <aside class="sidebar">
        <div class="div-logo">
            <img src="{{asset('images/monlogo.png')}}" width="100px" alt="">
        </div>
        <div class="div-sidenav">
            <ul>
                @if (auth()->user()->hasRole())
                <li>
                    <a  class="{{ request()-> is('admin/gestion-utilisateur') ? 'active-side' : ''}}" href="{{route("utilisateur.index")}}">
                        <span>Gestion utilisateur</span>
                    </a>
                </li>
                @endif
                <li>
                <a  class="{{ request()-> is('admin/gestion-article') ? 'active-side' : ''}}" href="{{route("article.index")}}">
                    <span>Gestion article</span>
                </a>
                </li>
                <li>
                <a class="{{ request()-> is('admin/gestion-pack') ? 'active-side' : ''}}"  href="{{route("pack.index")}}">
                    <span>Gestion pack</span>
                </a>
                </li>
            </ul>
        </div>
    </aside>

</body>



