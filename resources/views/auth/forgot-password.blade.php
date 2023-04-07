{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends("app")
@section("content")


<header>
    @include("part.navbar")
</header>

<div class="container-auth">
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <p class="p-reset">Vous avez oublié votre mot de passe? Pas de problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons un lien de réinitialisation de mot de passe qui vous permettra d'en choisir un nouveau.</p>
        <div class="error">
            @error('email')
            {{$message}}
            @enderror
        </div>
        <input id="email" name="email" type="email" class="input-l"placeholder="Email">
        <button type="sabmit">Réinitialiser</button>
    </form>

</div>
@endsection
