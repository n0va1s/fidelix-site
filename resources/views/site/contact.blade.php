@extends('layout.site')

@section('content')
<!-- Contato Section Start -->
<section class="hero-3-bg position-relative overflow-hidden d-flex align-items-center bg-primary">
    <div class="container">
        <div class="row justify-content-center contentTop">
            <div class="col-lg-6 col-md-8">
                <div class="title text-center mb-5">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center">  
                <!--Email Start-->
                <!--Icon Email Start-->
                <span><i class="pe-7s-mail service-icon2 mb-2"></i></span>    
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
                <!--Redes Sociais Start-->
                <!--Icon Social Network Start-->
                <span><i class="pe-7s-like2 service-icon2 mb-3"></i></span>    
                <!--Icon Social Network End-->
                <div class="contact-address text-center">
                    <h5 class="text-yellowFidelix mb-4 font-weight-normal f-18">Redes Sociais</h5>
                    <!--Button Social Networks Start-->
                    <ul class="list-unstyled footer-social-list1 mt-6">
                        <li class="list-inline-item"><a href="https://www.facebook.com/fidelixbr/"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/fidelixbr/"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/FidelixBr"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="whatsapp://send/?phone=5561981185815"><i class="mdi mdi-whatsapp"></i></a></li>
                    </ul>
                    <!--Button Social Netwrorks End-->
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
                        </div>
                        <div class="row text-center">
                            <button type="submit" class="btn btn-warning ml-0 mb-5 mt-2">Enviar 
                                <i class="mdi mdi-telegram ml-2"></i>
                            </button>
                        </div>
                        @csrf
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
                                    Collapsible Group Item #1
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Collapsible Group Item #2
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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