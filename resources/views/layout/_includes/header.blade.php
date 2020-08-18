<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>Fidelix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O Shopping Center dos comerciantes do bairro" />
    <meta name="keywords" content="Fidelix, Cartao Fidelidade, Cupom de Desconto, Vitrine de Produtos, MEI, Microempreendedor, aplicativo" />
    <meta name="author" content="MiSCapu"/>

    <!-- Manifest -->
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#2558ab" />

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Fidelix - voucher">
    <link rel="apple-touch-icon" href="{{ asset('images/icon/app-icon-152-152.png') }}">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/fidelix.ico') }}">

    <!-- icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialdesignicons.min.css') }}" />    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pe-icon-7.css') }}" />

    <!--Sliders-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />    

    @toastr_css
    <script src="https://kit.fontawesome.com/c5448c5291.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Navbar Início Start-->
    <nav class="navbar navbar-expand-lg navbar-static-top navbar-custom sticky sticky-dark pr-3">
        <div class="container">
            <!-- LOGO Start-->
            <a class="navbar-brand logo desktoppic" href="/">
                <img src="images/logo-dark2.png" alt="Logomarca Fidelix" height="60">
            </a>
            <!--LOGO End-->
            <!--Mobile Button 1: Fidelix Conta 1 Start-->
            <a href="{{ route('site.contact') }}#questions">
                <button type="submit" class="text-center navbar-toggler p-0" 
                data-toggle="collapse">
                <i class="mdi mdi-help iconColor"></i>
                <ul class="navbar-nav navbar-center" id="mySidenav">
                    <li class="nav-item text-muted text-center f-12">
                        Dúvidas
                    </li>
                </ul>
                </button>
            </a>
            <!--Mobile Button 1: Fidelix Conta End-->
            <!--Mobile Button 2: Como Funciona Start-->
            <a href="{{ route('site.home') }}#lead">
                <button type="submit" class="text-center navbar-toggler p-0" 
                data-toggle="collapse">
                <i class="mdi mdi-mail iconColor"></i>
                <ul class="navbar-nav navbar-center" id="mySidenav">
                    <li class="nav-item text-muted text-center f-12">
                        Eu quero
                    </li>
                </ul>
                </button>
            </a>
            <!--Mobile Button 2: Como Funciona End-->
            <!--Mobile Button 3: Mais Start-->
            <button class="text-center navbar-toggler p-0" type="button" 
            data-toggle="collapse" data-target="#options" 
            aria-controls="navbarCollapse" 
            aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu iconColor"></i>
                <ul class="navbar-nav" id="mySidenav">
                    <li class="nav-item text-muted f-12">
                        Mais
                    </li>
                </ul>
            </button>
            <!--Mobile Button 3: Mais Start-->
            <div class="collapse navbar-collapse" id="options">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item">
                        <a href="{{ route('site.home') }}" class="nav-link">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('site.product') }}" class="nav-link">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('site.client') }}" class="nav-link">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('site.contact') }}" class="nav-link">Contato</a>
                    </li>
                    <li>
                        <a href="https://wa.me/5561981185815?Ola%20gostaria%20de%20informacoes" class="nav-link text-warning">
                            <img src="{{ asset('images/icon/WhatsApp.png') }}" class="img-fluid" alt="Whatsapp">
                        </a>
                    </li>
                </ul>
            </div>
            <!--Mobile Button 3: Mais End-->
        </div>
    </nav>
    <!-- Navbar Home End -->

    <!-- LOGO Start-->
    <div class="d-lg-none mb-2 mt-2 ml-3">
        <img class="img-fluid" width="64" height="66" src="images/logo-dark2.png">
        <!--<a href="#" class="btn btn-warning ml-5 btn-sm"> Baixe Agora</a>-->
    </div>
    <!--LOGO End-->