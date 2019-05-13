<!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Nigerian news on your PC or mobile phone. Read and Share current and interesting Nigerian news as covered by different Nigerian newspapers and others." />
        <meta name="keywords" content="nigeria, news, nigerian news, mobile news, news on the go, Punch, Guardian, Thisday,  Vanguard, Independent, Daily Trust, Tribune, Champion, The Sun" />
        <meta name="google-site-verification" content="0sZXG0QJYvoRlcUXLf7e4st7zTQiJAJ9tDinQfX_wA8" />
        <META NAME="copyright" content="GoldenSteps" />
        <META NAME="language" content="en-us" />
        <META NAME="rating" content="General" />
        <META NAME="robots" content="index,follow" />
        <META http-equiv="pragma" content="no-cache" />

        <title>Nigerian News - Current News in Nigeria</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        
        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="{{ asset('MDB/css/mdb.min.css') }}">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/shop-homepage.css') }}">

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-2732469417891860",
                enable_page_level_ads: true
            });

        </script>


        <script type="text/javascript" src="ajax/ajax.js"></script>
        <script type="text/javascript">
            function add_art(top_div, source_id) {

                var source = parseInt(document.getElementById(source_id).value);

                if (source <= 120) {
                    var new_limit = source + 12;

                    document.getElementById(source_id).value = new_limit;


                    subject_id = top_div;

                    http.open("GET", "ajax/more_stories.php?start=" + escape(source), true);
                    http.onreadystatechange = handleHttpResponse;
                    http.send(null);

                }

            }

        </script>
    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"> News in Nigeria </a>
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

        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <div class="col-lg-3">

                    <h1 class="my-4"><img src="img/logo.png" /></h1>
                    <div class="list-group">
                        <div>
                            <form class="needs-validation" id="book_small" novalidate>

                                <div>

                                    <div class="form-row">
                                        <label for="sub_email">Subscribe to Our News Letter</label>

                                        <input class="form-control form-control-sm" placeholder="Email" id="sub_email" name="sub_email" type="email">
                                    </div>


                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-info" type="submit"> Send me Info <i class="fa fa-search ml-1"></i></button>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- medium_rec_nt -->
                        <ins class="adsbygoogle" style="display:inline-block;width:250px;height:250px" data-ad-client="ca-pub-2732469417891860" data-ad-slot="5546605186"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});

                        </script>
                    </div>

                </div>
                <!-- /.col-lg-3 -->

                <div class="col-lg-9">

                    <div class="row">
                        <div class="col-lg-3"><img src="img/1x1.gif" /> </div>
                        <div id="carouselExampleIndicators" class="carousel slide my-4 col-lg-9" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" src="ads/access.jpg" alt="Access Bank Nigeria">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="ads/mtn.jpg" alt="MTN Communications">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="ads/gtb.jpg" alt="Guaranty Trust Bank">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                        </div>
                    </div>

                    <div class="row" id="articles">


                        <?php topstories ($link);?>


                    </div>
                    <!-- /.row -->

                    <div class="alert alert-info" role="alert">
                        <div class="btn btn-rounded btn-sm btn-info" onclick="add_art('articles', 'art_num')">
                            Load More Stories ...
                        </div>
                        <input name="art_num" type="hidden" id="art_num" value="12" />
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

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
