<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <link rel="stylesheet" href="{{asset('css/gestion.css')}}">
    {{-- <link rel="stylesheet" href="css/part/navbar.css"> --}}
    <link rel="stylesheet" href="{{asset('css/article.css')}}">

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <title>Accueil</title>

</head>
<body>


@yield('content')



<body>

</html>
