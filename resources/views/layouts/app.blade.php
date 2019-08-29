<!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Nigerian news on your PC or mobile phone. Read and Share current and interesting Nigerian news as covered by different Nigerian newspapers and others." />
        <meta name="keywords" content="nigeria, news, nigerian news, mobile news, news on the go, Punch, Guardian, Thisday,  Vanguard, Independent, Daily Trust, Tribune, Champion, The Sun" />
        <meta name="google-site-verification" content="0sZXG0QJYvoRlcUXLf7e4st7zTQiJAJ9tDinQfX_wA8" />
        <META NAME="copyright" content="Otomatik" />
        <META NAME="language" content="en-us" />
        <META NAME="rating" content="General" />
        <META NAME="robots" content="index,follow" />
        <META http-equiv="pragma" content="no-cache" />

        <title>Celebrity News updates. Music, Football, Movies, Basketball, Track, Swimming</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        
        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="{{ asset('MDB/css/mdb.min.css') }}">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/shop-homepage.css') }}">

        
    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"> Celebrity News </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>



            </div>
        </nav>



        @yield('content')



        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Otomatik Ventures 2018</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="MDB/js/popper.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="MDB/js/mdb.min.js"></script>



        <script type="text/javascript">
            $(window).scroll(function() {
                if ($(window).scrollTop() >= $(document).height() - $(window).height() - 50) {
                    add_art('articles', 'art_num');
                }
            });

        </script>



        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

        </script>
        <script type="text/javascript">
            try {
                var pageTracker = _gat._getTracker("UA-7718160-3");
                pageTracker._trackPageview();
            } catch (err) {}

        </script>

    </body>

</html>
