    <!-- Rodapé Start -->
    <section class="footer bg-primary">
        <div class="container">
            <div class="row col-lg-6 offset-lg-3 text-center">
                <div class="col">
                    <a href="https://m.me/fidelixbr?fbclid=IwAR0yotabGhsW0rACtp5zQ7lTYvYAfOU-VYMaETqytkc5OdDS9aCqO7594n8">
                        <i class="fab fa-facebook fa-2x" style="color: #FFFFFF;"></i>
                    </a>
                </div>
                <div class="col">
                    <a href="https://instagram.com/fidelixbr?fbclid=IwAR3vnr3GcAfZaWqHaUX9-ZcbLTvnsnXRpfT_lBRbGITdZyxL8gPHCV-5A3c">
                        <i class="fab fa-instagram fa-2x" style="color: #FFFFFF;"></i>
                    </a>
                </div>
                <div class="col">
                    <a href="https://twitter.com/fidelixbr">
                        <i class="fab fa-twitter fa-2x icon-white"></i>
                    </a>
                </div>
                <div class="col">
                    <a href="https://medium.com/@fidelixbr">
                        <i class="fab fa-medium fa-2x" style="color: #FFFFFF;"></i>
                    </a>
                </div>
                <div class="col-12 text-center p-2">
                    <p class="text-muted text-center">2020  MiSCapu. Site Desenvolvido por MiSCapu</p>
                </div>
            </div>            
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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104095614-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-104095614-3');
    </script>

</html>