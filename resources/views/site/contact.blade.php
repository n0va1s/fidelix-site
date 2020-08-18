@extends('layout.site')

@section('content')
<!-- Contato Section Start -->
<section class="mt-3 mb-3 bg-primary">
    <div class="container">
        <div class="row p-2">
            <div class="col-lg-6 col-md-8">
                <div class="title text-center mb-5">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center">  
                <!--Email Start-->
                <!--Icon Email Start-->
                <span class="icon-white">
                    <i class="fas fa-envelope fa-2x"></i>
                </span>    
                <!--Icon Email End-->
                <div class="contact-address">
                    <h5 class="text-yellowFidelix font-weight-normal mb-4 f-18">Email</h5>
                    <p class="text-muted f-16"><a class="text-light" href="mailto:contato@fidelix.com.br">contato@fidelix.com.br</a></p>
                    <!--<p class="text-muted f-15 mb-4">Et harum quidem rerum facilis est et expedita sit distinctio at libero.</p>-->
                </div>
                <!--Email End-->
                <!--Space Start-->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-address">
                            <h4 class="text-dark mb-3 f-16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>                    
                        </div>
                    </div>
                </div>
                <!--Space End-->
                <!--Icon Social Network Start-->
                <span class="icon-white">
                    <i class="fas fa-concierge-bell fa-2x"></i>
                </span>
                <div class="contact-address">
                    <h5 class="text-yellowFidelix font-weight-normal mb-4 f-18">Mensagem</h5>
                    <p class="text-muted f-16 text-light">Estamos esperando a sua mensagem agora mesmo ;)</p>
                </div>
                <!--Redes Sociais End-->
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="custom-form mt-4 mt-lg-0">
                    <div id="message"></div>
                    <form method="post" action="{{ route('site.message') }}" name="contact-form" id="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label for="name">Nome</label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Meu Nome">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label for="email">Seu Email</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Meu Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label for="subject">Assunto</label>
                                    <input name="subject" id="subject" type="text" class="form-control" id="subject" placeholder="Qual seria a dúvida?" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label for="message">Mensagem</label>
                                    <textarea name="message" id="message" rows="3" class="form-control" placeholder="Minha Mensagem"></textarea>
                                </div>
                            </div>
                            <div class="col text-center">
                                <button type="submit" class="btn btn-warning ml-0 mb-5 mt-2">Enviar </button>
                            </div>
                            @csrf
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contato Section End -->

<!--Perguntas Frequentes-2 Start-->
<section class="section" id="questions" style="padding-top:50px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="title text-center">
                    <h3 class="font-weight-normal text-dark">
                        <span class="text-warning">Perguntas Frequentes</span>
                    </h3>
                    <p class="text-muted">&nbsp;</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-sm-12" style="background: url(images/features/features-bg.png) center center">
                <div class="features-img">
                    <img src="images/features/Doubt1.png" alt="" class="img-fluid d-block mx-auto">
                </div>
            </div>
            <div class="col-sm-12">
                <!--Start Bloco FAQ-->
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Os APPs estão nas lojas de aplicativos?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Não. Criamos aplicativos que ocupam menos espaço no seu celular e muito simples de usar. Então basta você acessar o endereço que o aplicativo já estará disponível.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Os APPs são seguros?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Sim. Basta você ver o cadeado no endereço do nosso site e nossos cuidados com a sua privacidade.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Como faço para instalar?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                No seu navegador (browser) no canto superior direito tem um menu (três pontinhos ou barrinhas) <br />
                                basta você clicar e selecionar a opção "Instalar"
                            </div>
                        </div>
                    </div>
                </div>    
                <!--End Bloco FAQ-->
            </div>
            <div class="col-sm-12">
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</section>
@endsection