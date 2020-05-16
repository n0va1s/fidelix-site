@extends('layout.site')

@section('content')
<!-- Clientes Start-->
<!--LOGO End-->
<section class="section" id="features">
    <div class="container">
        <div class="row justify-content-center contentTop">
            <div class="col-sm-12">
                <div class="title text-center mb-5">
                    <h3 class="font-weight-normal text-dark">Amigos da <span class="text-warning">Fidelix</span></h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-4">
                    <h3 class="font-weight-normal line-height-1_4">
                        <span class="font-weight-medium text-warning">Entre em contato </span>
                    </h3>
                    <a href="{{ route('site.contact') }}" class="btn btn-warning"> Contato</a>
                    <p>&nbsp;</p>
                </div>
                <div class="col-lg-8 mb-5">
                    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="3300">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="text-center">
                                    <img src="{{ asset('images/features/chiquinho.png') }}" alt="Chiquinho Barbearia">
                                    <h5 class="text-dark hero-4-title font-weight-light line-height-1_4 mb-4">Barbearia</h5>
                                    <p class="text-dark ml-5 mr-5">Os barbeiros mais brothers da cidade</p>
                                    <a href="https://vitrine.fidelix.com.br/collections/barbeariachiquinho" 
                                        class="btn btn-warning"> Conheça as Oportunidades
                                        <span class="right-icon ml-2">&#8594;</span>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="text-center">
                                    <img src="{{ asset('images/features/anuncie_aqui.png') }}" alt="Anuncie aqui">
                                    <h5 class="text-dark hero-4-title font-weight-light line-height-1_4 mb-4">Oportunidade</h5>
                                    <p class="text-dark ml-5 mr-5">Apareça para o seu bairro</p>
                                    <a href="./contato" 
                                        class="btn btn-warning"> Entre em contato
                                        <span class="right-icon ml-2">&#8594;</span>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="text-center">
                                    <img src="{{ asset('images/features/acredite.jpg')}}" alt="Anuncie aqui">
                                    <h5 class="text-dark hero-4-title font-weight-light line-height-1_4 mb-4">Inspiração</h5>
                                    <p class="text-dark ml-5 mr-5">E aí, vamos fazer diferente?</p>
                                    <a href="./contato" 
                                        class="btn btn-warning"> Entre em contato
                                        <span class="right-icon ml-2">&#8594;</span>
                                    </a>
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
    </div>
</section>
<!-- Clientes End -->
@endsection