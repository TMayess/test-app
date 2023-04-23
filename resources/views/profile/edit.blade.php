



@extends('app')
@section('content')

<header>
    @include('part.navbar')
</header>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>

{{-- <div class="container-profil">
    <form  method="" action="">
        @csrf
        <h2>Information personnelle</h2>
        <span>Mettez à jour les informations de profil et l'adresse e-mail de votre compte.</span>
        <div class="error">
            @error('email')
            {{$message}}
            @enderror
        </div>
        <div class="div-profil">
            <div class="div-profil-info modif-no" id="modif-nom">
                <div>
                    <span>Nom :</span>
                    <span>Tairi</span>
                </div>
                <div>
                    <img width="15px" src="images/icon-next.png" alt="">
                </div>
            </div>
            <div class="div-profil-modif" >
                <span>Modifier votre nom </span>
                <input name="name" class="input-l" type="name">
            </div>
        </div>
        <div class="div-profil">
            <div class="div-profil-info " id="modif-prenom">
                <div>
                    <span>Prenom :</span>
                    <span>Mayess</span>
                </div>
                <div>
                    <img width="15px" src="images/icon-next.png" alt="">

                </div>
            </div>
            <div class="div-profil-modif">
                <span>Modifier votre prenom </span>
                <input name="name" class="input-l" type="name">
            </div>
        </div>
        <div class="div-profil">
            <div class="div-profil-info modif-email">
                <div>
                    <span>Email :</span>
                    <span>Mayess@gmail.com</span>
                </div>
                <div>
                    <img width="15px" src="images/icon-next.png" alt="">
                </div>
            </div>
            <div class="div-profil-modif">
                <span>Modifier votre Email </span>
                <input name="name" class="input-l" type="name">
            </div>
            <div><button>Sauvegarder</button></div>
        </div>


    </form>

</div>
<div class="container-profil">
    <form  method="" action="">
        @csrf
        <h2>Réinitialiser le mot de passe</h2>
        <span>Assurez-vous que votre compte utilise un mot de passe long et aléatoire pour rester sécurisé.</span>
        <div class="error">
            @error('email')
            {{$message}}
            @enderror
        </div>
        <div class="div-profil">
            <div class="div-profil-info modif-nom" id="modif-nom">
                <div>
                    <span>Mot de passe :</span>
                    <span>**********</span>
                </div>
                <div>
                    <img width="15px" src="images/icon-next.png" alt="">
                </div>
            </div>
            <div class="div-profil-modif-pass">
                <div class="div-profil-pass">
                    <span>Mot de passe actuel </span>
                    <input name="name" class="input-l" type="name">
                </div>
                <div class="div-profil-pass">
                    <span>Nouveau Mot de passe</span>
                    <input name="name" class="input-l" type="name">
                </div>
                <div class="div-profil-pass">
                    <span>Confirmation mot de passe</span>
                    <input name="name" class="input-l" type="name">
                </div>
            </div>
            <div><button>Sauvegarder</button></div>
        </div>

    </form>


</div>

<div class="container-profil last">
    </form>
    <form  method="" action="">
        @csrf
        <h2>Supprimer votre compte</h2>
        <span>Une fois que votre compte est supprimé, toutes ses ressources et données seront supprimées de manière permanente. Avant de supprimer votre compte, veuillez télécharger toutes les données ou informations que vous souhaitez conserver.</span>
        <div><button>Supprimer</button></div>

    </form>

</div> --}}

{{-- <script>




    let divProfilInfos = document.querySelectorAll('.div-profil-info');

    divProfilInfos.forEach(function(divProfilInfo) {
        divProfilInfo.addEventListener('click', function() {
            let divProfilModif = this.nextElementSibling;
            divProfilModif.classList.toggle('active-div');
        });
    });




</script> --}}

@endsection




