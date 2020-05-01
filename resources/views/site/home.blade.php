@extends('layout.site')

@section('content')
    <!-- Section 1 Start -->
    <section class="hero-3-bg position-relative overflow-hidden d-flex align-items-center bg-primary" id="home">
        <div class="hero-3-bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center contentTop">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="hero-3-title text-white mb-4 font-weight-normal line-height-1_4 contentTitleTop">A VITRINE DOS COMERCIANTES DO BAIRRO!</h1>
                        <p class="text-white-50 mb-4">Quer melhorar a relação com seus clientes e vender mais?<br /> Nós podemos ajudar!</p>
                        <a href="{{ route('site.product') }}" class="btn btn-warning">Conheça Nossos Produtos</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 mt-0 mb-2">
                    <div class="hero-3-img">
                        <img src="{{ asset('images/hero-3-img2.png') }}" alt="Imagem de fundo de pessoas fazendo compras" class="imgInit img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 1 End -->

    <!-- Quem Somos Start -->
    <section class="section bg-light" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 contentTop">
                    <div class="title text-center mb-5">
                        <h1 class="font-weight-medium text-dark">Quem <span class="text-warning">Somos</span></h1>
                        <p class="text-muted">Apaixonados por tecnologias que ajudem o pequeno comerciante a se relacinar melhor com seus clientes</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h2 class="font-weight-light line-height-1_6 text-dark mb-4 text-center">Uma empresa jovem que nasceu com a missão de encantar clientes</h2>
                </div>
                <div class="col-md-7 offset-md-1">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-dark font-weight-light f-20 mb-3">Quem Somos</h6>
                            <p class="text-muted font-weight-light">Somos uma empresa brasileira que surgiu do sonho de dois empreendedores com um objetivo em comum: usar a tecnologia para encantar clientes e ajudar o comerciante do bairro. Assim surgiu a Fidelix.</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-dark font-weight-light f-20 mb-3">Nosso Propósito</h6>
                            <p class="text-muted font-weight-light">Queremos ajudar o micro e o pequeno empresário a ter uma relação duradoura e fiel com seu cliente, de forma que os dois ganhem. Como? O empresário venda mais e o cliente tenha benefícios pela fidelidade.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Vídeo Responsivo Start-->
            <div class="embed-responsive embed-responsive-21by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/E8cCzdllwvg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <!--Vídeo Responsivo End-->
        </div>
    </section>
    <!-- Quem Somos End -->

    <!-- Formulário: Gostaria de Credenciar Start -->
    <section class="hero-3-bg position-relative overflow-hidden d-flex align-items-center bg-primary" id="lead">
        <div class="container mb-5">    
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-4">
                            <div class="subscribe-icon">
                                <img src="{{ asset('images/icon/1.png') }}" alt="Icone de Mensagem" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="subscribe-icon">
                                <img src="{{ asset('images/icon/2.png') }}" alt="Icone de Mensagem" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="">
                                <img src="{{ asset('images/icon/3.png') }}" alt="Icone de Mensagem" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mt-5 mb-4">
                        <h6 class="text-muted font-weight-normal">Quer participar desse movimento?<span class="d-block mt-2">Quero!</span></h6>
                    </div>
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
                            <button type="submit" class="btn btn-warning ml-2" align="center"><i class="fa fa-envelope-o"></i> Quero</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Formulário: Gostaria de Credenciar End -->

    <!--Call To Action Start-->
    <section class="section" id="clients" style="padding-top:50px;">
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-4">
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
                                    <h5 class="text-dark hero-4-title font-weight-bold">Tenha uma vitrine</h5>
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
