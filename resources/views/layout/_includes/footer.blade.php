    <!-- Rodapé Start -->
    <section class="footer bg-primary">
        <div class="container">     
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center text-muted">
                        <div class="mb-4">
                            <ul class="list-unstyled footer-social-list mt-4">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                            </ul>
                            <!--Termos de Uso Button Start-->
                            <!--
                            <div class="container">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Termos de Uso
                                </button>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content"> 
                                            <div class="modal-header">
                                                <h4 class="modal-title">Termos de Uso</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                            Terms of Use Vs. Terms and Conditions

                                                Legally speaking, a Terms of Use agreement is the same thing as a Terms and Conditions agreement.

                                                We're using the phrase "Terms of Use" to describe a general agreement between you and your users. Different companies use different names for this type of agreement, including:

                                                    Terms and Conditions
                                                    Terms of Service
                                                    User Agreement
                                                    Acceptable Use Policy

                                                These documents usually serve the same purpose but can be used in different contexts.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            -->
                            <!--Termos de Uso Button End-->
                        </div>
                    </div>
                </div>
            </div>
            <!--Author MiSCapu -> Opcional Start-->
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center text-muted">
                        <p>2020  MiSCapu. Site Desenvolvido por MiSCapu</p>
                    </div>
                </div>
            </div>
            <!--Author MiSCapu -> Opcional Start-->
        </section>
        <!-- Rodapé End -->
        <!-- javascript -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/scrollspy.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <!-- Counter js -->
        <script src="{{ asset('js/counter.int.js') }}"></script>
        <!-- carousel -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
    @jquery
    @toastr_js
    @toastr_render

    <!-- PWA -->
    <script>
        // Check that service workers are supported
    if ('serviceWorker' in navigator) {
    // Use the window load event to keep the page load performant
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js');
    });
    }
    </script>

</html>