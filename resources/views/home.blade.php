@extends('layouts.app')

@section('content')
        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <div class="col-lg-3">

                    <h1 class="my-4"><img src="{{ asset('images/logo.png') }}" /></h1>
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
                        <div class="col-lg-3"><img src="{{ asset('images/1x1.gif') }}" /> </div>
                        <div id="carouselExampleIndicators" class="carousel slide my-4 col-lg-9" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" src="{{ asset('images/ads/access.jpg') }}" alt="Access Bank Nigeria">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="{{ asset('images/ads/mtn.jpg') }}" alt="MTN Communications">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="{{ asset('images/ads/gtb.jpg') }}" alt="Guaranty Trust Bank">
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
@endsection