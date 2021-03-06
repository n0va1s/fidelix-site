<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv=”content-language” content=”{{ str_replace('_', '-', app()->getLocale()) }}” />
    <title>Fidelix: Ajudando Negócios de Bairro a Crecerem em Vendas e Relacionamento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name=”robots” content=”nofollow” />
    <meta name="description" content="Use a nossa metodologia para aumentar as suas vendas e ter um relacionamento incrível com seus clientes">
    <meta name="keywords" content="Responsabilidade Social, Impacto Social, Comércio Local, Shopping Virtual, Vitrine do Bairro, Pequenos Negócios, Pequenos Empreendedores, Voucher, Fidelidade, Startup, Vender Mais" />
    <meta name="author" content="MiSCapu"/>
    <meta name="creator" content="João Paulo Novais" />
    <meta name="theme-color" content="#2558ab" />
    <meta name=”application-name” content=”Fidelix”>

    <!-- Manifest -->
    <link rel="manifest" href="/manifest.json">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Fidelix - voucher">
    <link rel="apple-touch-icon" href="{{ asset('images/icon/app-icon-152-152.png') }}">

    <meta property=”og:locale” content=”{{ str_replace('_', '-', app()->getLocale()) }}” />
    <meta property=”og:type” content=”website” />
    <meta property=”og:title” content=”Fidelix: Ajudando Negócios de Bairro a Crecerem em Vendas e Relacionamento” />
    <meta property=”og:description” content=”Use a nossa metodologia para aumentar as suas vendas e ter um relacionamento incrível com seus clientes”>
    <meta property=”og:site_name” content=”Fidelix”>

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
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NH3WDZD');</script>
    <!-- End Google Tag Manager -->

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '160112085430698');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" 
    src="https://www.facebook.com/tr?id=160112085430698&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104095614-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-104095614-3');
    </script>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NH3WDZD"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
                        <a href="https://blog.fidelix.com.br" class="nav-link">Blog</a>
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