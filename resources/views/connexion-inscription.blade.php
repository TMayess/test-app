@extends('app')
@section('content')
<header>
    @include('part.navbar')
</header>
<section class="section-auth">
    <div class="sec-container">
        <div class="formWrapper">
            <div class="card show">
                <div class="card-header">
                    <div id="forLogin" class="form-header active">Se connecter</div>
                    <div id="forRegister" class="form-header">S'inscrire</div>
                </div>
                <div class="card-body" id="formContainer">
                    <form class="form-auth" action="" id="loginForm">
                        <input type="text" class="form-control" placeholder="Email" />
                        <input type="password" class="form-control" placeholder="Mot de passe" />

                        <button class="formButton">Connexion</button>
                    </form>

                    <form  action="" id="registerForm" class="toggleForm form-auth">
                        <div class="div-input">
                            <input type="text"placeholder="Nom">
                            <input type="text"  placeholder="Prenom">
                        </div>
                        <input type="email" class="form-control" placeholder="Email">
                        <input type="password" class="form-control" placeholder="Mot de passe">
                        <input type="password" class="form-control" placeholder="Mot de passe">

                        <button class="formButton">Inscription</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




    <script type="text/javascript">
        function _(e) {
            return document.getElementById(e);
        }
        let forlogin = _('forLogin');
        let loginForm = _('loginForm');
        let forRegister = _('forRegister');
        let registerForm = _('registerForm');
        let formContainer = _('formContainer');

        forlogin.addEventListener('click', (e) => {
            e.preventDefault;
            forRegister.classList.remove('active');
            forlogin.classList.add('active');
            if (loginForm.classList.contains('toggleForm')) {
                formContainer.style.transform = 'translate(0%)';
                formContainer.style.transition = 'transform .5s';
                loginForm.classList.remove('toggleForm');
                registerForm.classList.add('toggleForm');
            }
        });

        forRegister.addEventListener('click', (e) => {
            e.preventDefault;
            forlogin.classList.remove('active');
            forRegister.classList.add('active');
            if (registerForm.classList.contains('toggleForm')) {
                formContainer.style.transform = 'translate(-100%)';
                formContainer.style.transition = 'transform .5s';
                registerForm.classList.remove('toggleForm');
                loginForm.classList.add('toggleForm');
            }
        });


    </script>

@endsection
