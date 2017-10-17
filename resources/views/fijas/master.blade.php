<html>
    <head>
        @include('fijas.head')
        <script>
            // toggle class scroll
            $(window).scroll(function() {
                if($(this).scrollTop() > 50)
                {
                    $('.navbar-trans').addClass('afterscroll');
                } else
                {
                    $('.navbar-trans').removeClass('afterscroll');
                }

            });
        </script>
    </head>
    <body>
        <header>
                @include('fijas.header')
        </header>
        <section>
                @yield('section')
        </section>
        <footer class="footer-distributed">
            @include('fijas.footer')
        </footer>
    </body>
</html>