@extends('layout.site')

@section('content')
    <section class="hero-3-bg position-relative overflow-hidden d-flex align-items-center bg-primary" id="home">
        <div class="hero-3-bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center contentTop">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="hero-3-title text-white mb-4 font-weight-normal line-height-1_4 contentTitleTop">TECNOLOGIA PARA MICROEMPRESARIOS</h1>
                        <p class="text-white-50 mb-4">Quer melhorar a relação com seus clientes e vender mais? Nós podemos ajudar!</p>
                        <a href="" class="btn btn-warning">Conheça Nossos Produtos</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 mt-0 mb-2">
                    <div class="hero-3-img">
                        <img src="{{asset('images/hero-3-img2.png')}}" alt="" class="imgInit img-fluid mx-auto d-block">
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
                        <p class="text-muted">Apaixonados pela tecnologia e ajudando a transformar a vida dos seus clientes!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h2 class="font-weight-light line-height-1_6 text-dark mb-4 text-center">Apaixonados pela tecnologia e ajudando a transformar a vida dos seus clientes!
                    </h2>
                </div>
                <div class="col-md-7 offset-md-1">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-dark font-weight-light f-20 mb-3">Quem Somos?</h6>
                            <p class="text-muted font-weight-light">Somos uma empresa jovem e brasileira que surgiu do sonho de dois empreendedores. Ao longo da vida empreendedora de cada um, tiveram sucessos, fracassos e uma coisa em comum entre os dois momentos: a presença do seu cliente. Nesse momento, eles perceberam que o conhecimento de cada um em tecnologia, ajudaria a transformar essa situação e assim surgiu a Fidelix.</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-dark font-weight-light f-20 mb-3">Nosso Propósito</h6>
                            <p class="text-muted font-weight-light">Queremos ajudar o micro e o pequeno empresário a ter uma relação duradoura e fiel com seu cliente, de forma que os dois ganhem, como?: o empresário venda mais e o cliente tenha benefícios pela fidelidade.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Vídeo Responsivo Start-->
            <div class="title text-center mb-5">
                <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                </div>
            </div>
            <!--Vídeo Responsivo End-->
        </div>
    </section>
    <!-- Quem Somos End -->
    <!-- Formulário: Gostaria de Credenciar Start -->
    <section class="hero-3-bg position-relative overflow-hidden d-flex align-items-center bg-primary" id="home">
        <div class="container mb-5">    
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-4">
                            <div class="subscribe-icon">
                                <img src="images/icon/1.png" alt="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="subscribe-icon">
                                <img src="images/icon/2.png" alt="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="">
                                <img src="images/icon/3.png" alt="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mt-5 mb-4">
                        <h6 class="text-muted font-weight-normal">Gostaria de Credenciar seu Negócio? <span class="d-block mt-2">Quero!</span></h6>
                    </div>
                    <form action="//Bootstrapious.us10.list-manage.com/subscribe/post?u=97f1bc02efa56031b67a2b00f&amp;id=fc7b4ce646" method="post" target="_blank">
                        <div class="form-group app-label">
                            <label for="mce-EMAIL">Email</label>
                            <input type="email" class="form-control" required="required" name="EMAIL" id="mce-EMAIL">
                        </div>
                        <div class="form-group app-label">
                            <label for="mce-FNAME">Nome</label>
                            <input type="text" class="form-control" name="FNAME" id="mce-FNAME">
                        </div>
                            <div class="text-center mt-5 mb-2">
                                <button type="submit" class="btn btn-warning ml-2" align="center"><i class="fa fa-envelope-o"></i> Quero</button>
                            </div>

                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_97f1bc02efa56031b67a2b00f_fc7b4ce646" tabindex="-1" value=""></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Formulário: Gostaria de Credenciar End -->
    <!--Call To Action Start-->
    <section class="hero-3-bg position-relative overflow-hidden d-flex align-items-center bg-light" id="clients">
        <div class="container">
            <div class="row contentTop">
                <div class="text-center col-lg-4 mt-5">
                    <h3 class="font-weight-normal line-height-1_4">    <span class="font-weight-medium text-warning">Ficou Com Alguma Dúvida? </span></h3>
                    <button type="submit" class="btn btn-warning my-4">Contato</button>
                </div>
                <div class="col-lg-8 mb-5">
                    <div class="owl-carousel owl-theme">
                        <!--Como funciona? 1-->
                        <div class="item">
                            <div class="testi-content m-3 position-relative">
                                <div class="testi-box p-4">
                                    <h3 class="font-weight-normal mt-3 line-height-1_4">    <span class="font-weight-medium text-warning">Como Funciona? </span></h3>
                                    <p class="text-muted position-relative mb-0 f-14"><span class="f-20 mr-1">"</span> Sed ut perspiciatis unde omnis at iste natus error a voluptatem accusantium doloremque totam. <span class="f-16">"</span></p>
                                    <a href="#" class="f-16 text-warning">Saiba Mais <span class="right-icon ml-2">&#8594;</span></a>
                                </div>
                            </div>
                        </div>
                        <!--Como funciona? 2-->
                        <div class="item">
                            <div class="testi-content m-3 position-relative">
                                <div class="testi-box p-4">
                                    <h3 class="font-weight-normal mt-3 line-height-1_4">    <span class="font-weight-medium text-warning">Como Funciona? </span></h3>
                                    <p class="text-muted position-relative mb-0 f-14"><span class="f-20 mr-1">"</span> Sed ut perspiciatis unde omnis at iste natus error a voluptatem accusantium doloremque totam. <span class="f-16">"</span></p>
                                    <a href="#" class="f-16 text-warning">Saiba Mais <span class="right-icon ml-2">&#8594;</span></a>
                                </div>
                            </div>
                        </div>
                        <!--Como funciona? 3-->
                        <div class="item">
                            <div class="testi-content m-3 position-relative">
                                <div class="testi-box p-4">
                                    <h3 class="font-weight-normal mt-3 line-height-1_4">    <span class="font-weight-medium text-warning">Como Funciona? </span></h3>
                                    <p class="text-muted position-relative mb-0 f-14"><span class="f-20 mr-1">"</span> Sed ut perspiciatis unde omnis at iste natus error a voluptatem accusantium doloremque totam. <span class="f-16">"</span></p>
                                    <a href="#" class="f-16 text-warning">Saiba Mais <span class="right-icon ml-2">&#8594;</span></a>
                                </div>
                            </div>
                        </div>
                        <!--Como funciona? 4-->
                        <div class="item">
                            <div class="testi-content m-3 position-relative">
                                <div class="testi-box p-4">
                                    <h3 class="font-weight-normal mt-3 line-height-1_4">    <span class="font-weight-medium text-warning">Como Funciona? </span></h3>
                                    <p class="text-muted position-relative mb-0 f-14"><span class="f-20 mr-1">"</span> Sed ut perspiciatis unde omnis at iste natus error a voluptatem accusantium doloremque totam. <span class="f-16">"</span></p>
                                    <a href="#" class="f-16 text-warning">Saiba Mais <span class="right-icon ml-2">&#8594;</span></a>
                                </div>
                            </div>
                        </div>
                        <!--Como funciona? 5-->
                        <div class="item">
                            <div class="testi-content m-3 position-relative">
                                <div class="testi-box p-4">
                                    <h3 class="font-weight-normal mt-3 line-height-1_4">    <span class="font-weight-medium text-warning">Como Funciona? </span></h3>
                                    <p class="text-muted position-relative mb-0 f-14"><span class="f-20 mr-1">"</span> Sed ut perspiciatis unde omnis at iste natus error a voluptatem accusantium doloremque totam. <span class="f-16">"</span></p>
                                    <a href="#" class="f-16 text-warning">Saiba Mais <span class="right-icon ml-2">&#8594;</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Como funciona End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Call To Action End-->
@endsection