<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- Base Meta Tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    {{-- Custom Meta Tags --}}
    @yield('meta_tags')

    {{-- Title --}}
    <title>
        @yield('title_prefix', config('adminlte.title_prefix', ''))
        @yield('title', config('adminlte.title', 'Proani srl'))
        @yield('title_postfix', config('adminlte.title_postfix', ''))
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Site Metas -->
    <meta name="keywords" content="knino, ktito, drago, sabueso adulto, sabueso cachorro, ktito salmon y atun, ktito leche, ktito carne, provimix, calcimin, s-lacteo, nutrifish">
    <meta name="description" content="venta de alimento balanceado para animales de casa y granja">
    <meta name="author" content="proanisrl">

    {{-- Custom stylesheets --}}
    @yield('css_pre')

    {{-- Base Stylesheets --}}

    <link rel="stylesheet" href="{{asset('theme/proanisrl/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('css/menu_flot.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">

    {{-- Custom Stylesheets --}}
    @yield('custom_css')

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />

    @livewireStyles

</head>

<body class="@yield('classes_body')" @yield('body_data') id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    {{-- Body Content --}}
    @yield('body')

    {{-- Custom Scripts --}}
    @livewireScripts
    @yield('custom_js')


</body>

</html>
