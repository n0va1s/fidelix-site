@extends('layout.site')

@section('content')
    <!-- Section 1 Start -->
    <section class="mt-3 mb-3 bg-primary" id="home">
        <div class="container p-2 text-center">
            <div class="row text-white">
                <div class="col-xd col-lg-6 offset-lg-3">
                    <h1 class="font-weight-normal">O SHOPPING VIRTUAL DOS COMERCIANTES DO BAIRRO!</h1>
                    <p class="text-muted">
                        Quer melhorar a relação com seus clientes e vender mais?
                        Quer digitalizar seu negócio? Acha caro ter um aplicativo?</p>
                    <a href="{{ route('site.product') }}" class="btn btn-warning m-3">Conheça Nossos Produtos</a>
                </div>
                <div class="mt-3 col-xd col-lg-6 offset-lg-3">
                    <img src="{{ asset('images/hero-3-img2.png') }}" alt="Imagem de fundo de pessoas fazendo compras" class="imgInit img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
    </section>
    <!-- Section 1 End -->

    <section class="mt-3 mb-3">
        <div class="container">
            <div class="row p-2 text-center">
                <div class="col-md-4">
                    <span class="icon-blue">
                        <i class="fas fa-store-alt fa-4x"></i>
                    </span>
                    <h4 class="font-weight-bold">Leve seu negócio para um Shopping Virtual</h4>
                    <p class="font-weight-light text-justify">Já pensou em expor os seus produtos em um shopping? Acha caro? Nós também, por isso criamos a Fidelix</p>
                </div>
                <div class="col-md-4">
                    <span class="icon-blue">
                        <i class="fas fa-heart fa-4x"></i>
                    </span>
                    <h4 class="font-weight-bold">Se relacione de verdade com seus clientes</h4>
                    <p class="font-weight-light text-justify">Nós aprendemos que uma venda é consequência de um bom relacionamento, assim nós criamos nossos produtos de fidelização de clientes</p>
                </div>
                <div class="col-md-4">
                    <span class="icon-blue">
                        <i class="fas fa-credit-card fa-4x"></i>
                    </span>
                    <h4 class="font-weight-bold">Aumente suas vendas com o poder da Internet</h4>
                    <p class="font-weight-light text-justify">Nos dias de hoje estar fora da Internet é estar sem a sua placa, sem o seu endereço. Então venha ser visto pelos seus e por vários clientes </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quem Somos Start -->
    <section class="mt-3 mb-3 bg-light" id="about">
        <div class="container">
            <div class="row p-2">
                <div class="col-md-12">
                    <h4 class="font-weight-bold text-center">Conheça a <span class="text-warning">Fidelix</span></h4>
                    <p class="font-weight-light text-center">Apaixonados por tecnologias que ajudem o pequeno comerciante a se relacinar melhor com seus clientes</p>
                </div>
                <div class="col-md-4">
                    <h2 class="font-weight-light line-height-1_6 text-center">Uma empresa jovem que nasceu com a missão de encantar clientes</h2>
                </div>
                <div class="col-md-7 offset-md-1">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="font-weight-bold">Quem Somos</h6>
                            <p class="font-weight-light">Somos uma empresa brasileira que surgiu do sonho de dois empreendedores com um objetivo em comum: usar a tecnologia para encantar clientes e ajudar o comerciante do bairro. Assim surgiu a Fidelix.</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="font-weight-bold">Nosso Propósito</h6>
                            <p class="font-weight-light">Queremos ajudar o micro e o pequeno empresário a ter uma relação duradoura e fiel com seu cliente, de forma que os dois ganhem. Como? O empresário venda mais e o cliente tenha benefícios pela fidelidade.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Vídeo Responsivo Start-->
                <div class="col embed-responsive embed-responsive-21by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/-y0a3Bz7IIU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!--Vídeo Responsivo End-->
            </div>
        </div>
    </section>
    <!-- Quem Somos End -->

    <!-- Formulário: Gostaria de Credenciar Start -->
    <section class="bg-primary mt-3 mb-3" id="lead">
        <div class="container">
            <div class="row col-lg-6 offset-lg-3 p-3 text-center">
                <div class="col-4">
                    <span class="icon-orange">
                        <i class="fas fa-envelope fa-4x"></i>
                    </span>
                </div>
                <div class="col-4">
                    <span class="icon-orange">
                        <i class="fas fa-paper-plane fa-4x"></i>
                    </span>
                </div>
                <div class="col-4">
                    <span class="icon-orange">
                        <i class="fas fa-comment-dots fa-4x"></i>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <h4 class="text-muted font-weight-normal">Quer participar desse movimento?</h4>
                    <h6 class="text-muted">Inscreva-se que entraremos em contato</h6>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col-md-6 offset-md-3 col-xd-12">
                    <form action="{{ route('site.lead') }}" method="post">
                        <div class="form-group app-label">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" required="required" name="email" id="email">
                        </div>
                        <div class="form-group app-label">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="text-center mt-5 mb-2">
                            <button type="submit" class="btn btn-warning ml-2">
                                <i class="fa fa-envelope-o"></i> Entraremos em contato
                            </button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>            
        </div>
    </section>
    <!-- Formulário: Gostaria de Credenciar End -->

    <!--Call To Action Start-->
    <section id="clients">
        <div class="container mt-3 mb-3">
            <div class="row p-2">
                <div class="col-lg-4 text-center">
                    <h3 class="font-weight-normal line-height-1_4">
                        <span class="font-weight-medium text-warning">Podemos ajudar mais? </span>
                    </h3>
                    <a href="{{ route('site.contact') }}" class="btn btn-warning"> Contato</a>
                    <p>&nbsp;</p>
                </div>
                <div class="col-lg-8 mb-5">
                    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="3300">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="text-center">
                                    <h5 class="hero-4-title font-weight-bold">Tenha uma vitrine</h5>
                                    <p class="text-dark ml-5 mr-5">Coloque o seu produto na nossa vitrine e alcance mais clientes</p>
                                    <a href="{{ route('site.product') }}" class="btn btn-warning"> Veja como</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="text-center">
                                    <h5 class="text-dark hero-4-title font-weight-bold">Antecipe suas vendas</h5>
                                    <p class="text-dark ml-5 mr-5">Crie cupons de produtos ou serviços e ofereça aos seus clientes</p>
                                    <a href="{{ route('site.product') }}" class="btn btn-warning"> Veja como</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="text-center">
                                    <h5 class="text-dark hero-4-title font-weight-bold">Conheça o cliente</h5>
                                    <p class="text-dark ml-5 mr-5">Conheça ainda mais o seu cliente e tenha um canal de comunicação sempre aberto</p>
                                    <a href="{{ route('site.product') }}" class="btn btn-warning"> Veja como</a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Call To Action End-->
@endsection
