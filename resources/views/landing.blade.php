@extends('main')
@section('external_assets')
    <meta charset="utf-8">
    <title>Diagnosa Gangguan Makan</title>
    <meta name="description" content="Professional Creative Template" />
    <meta name="author" content="IG Design">
    <meta name="keywords"
        content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
    <meta property="og:title" content="Professional Creative Template" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="470" />
    <meta property="og:image:height" content="246" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="Professional Creative Template" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="https://twitter.com/IvanGrozdic" />
    <meta name="twitter:domain" content="http://ivang-design.com/" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="Professional Creative Template" />
    <meta name="twitter:image" content="http://ivang-design.com/" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121" />
    <meta name="msapplication-navbutton-color" content="#212121" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <link rel="stylesheet" href="landing/css/bootstrap.min.css" />
    <link rel="stylesheet" href="landing/css/font-awesome.min.css" />
    <link rel="stylesheet" href="landing/css/style.css" />
    <link rel="stylesheet" href="landing/css/colors/color.css" />
    <link rel="stylesheet" href="landing/css/ionicons.min.css" />
    <link rel="stylesheet" href="landing/css/owl.carousel.css" />
    <link rel="stylesheet" href="landing/css/owl.transitions.css" />

    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

@endsection

@section('main_section')

<body class="royal_preloader">
    <nav id="menu-wrap" class="menu-back cbp-af-header">
        <div class="menu">
            <ul>
                <li>
                    <a class="text-uppercase change-hover" href="/dashboard">Dashboard</a>
                </li>
                <li>
                    <a class="text-uppercase change-hover dropdown-toggle" href="#">Menu</a>
                    <ul>
                        <li><a href="/form">Diagnosa</a></li>
                        <li><a href="/gejala">Gejala</a></li>
                        <li><a href="/gangguan">Gangguan Makan</a></li>
                    </ul>
                </li>
                <li>
                    <a class="text-uppercase change-hover" href="#kontak">Kontak</a>
                </li>

                @guest()
                <li>
                    <a class="text-uppercase change-hover" href="/login">Login</span></a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>


    <main>
        <div class="section full-height mob-height">
            <div class="background-parallax" style="background-image: url('landing/img/full-2-new.jpg')"
                data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>
            <div class="hero-center-text-wrap">
                <div class="container text-left ml-5">
                    <div class="row ml-5">
                        <div class="col-md-12">
                            <h1 class="parallax-fade-top-2 typed">
                                <span id="typed-1">
                                    Cek tingkat <strong class="fw-bold" style="-webkit-text-stroke: 0; font-size:9vw;">gangguan makan</strong>
                                sekarang!<br>
                                </span>
                            </h1>
                            <br>
                            <style>
                                .btn-glow:hover {
                                  box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
                                  transition: box-shadow 0.5s;
                                }
                              </style>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-left: 12px">
              <a href="/form" class="fw-bolder button-to-next btn btn-light btn-glow rounded-top" role="button">
                ISI FORM
              </a>
            </div>
        </div>


        <div class="section padding-top-big padding-bottom-big" style="z-index: 99999">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 page-center-text-wrap text-center">
                        <h1 class="parallax"><strong>-</strong> Project akhir semester mata kuliah
                            <strong>-</strong><br><span>expert system</span></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="section padding-top-bottom-big background-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <div id="owl-sep-1" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="quote">
                                    <p class="lead">"HealthyNourish adalah sebuah situs yang membantu dalam diagnosis gangguan makan. 
                                        Gangguan makan merupakan kondisi yang mempengaruhi pola makan seseorang dan dapat menyebabkan dampak negatif pada kesehatan fisik dan mental. 
                                        Dengan menggunakan HealthyNourish, Anda dapat mengukur tingkat keparahan gangguan makan Anda dengan mengisi formulir pertanyaan yang disediakan."</p>
                                    <h6>
                                        <h6>&rarr;</h6>
                                    </h6>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <p class="lead">"Ingatlah bahwa HealthyNourish bukanlah pengganti layanan
                                        profesional, jadi pastikan untuk selalu mencari bantuan medis yang tepat jika
                                        Anda mengalami gejala gangguan makan."</p>
                                    <h6>&rarr;</h6>
                                </div>
                            </div>
                            <div class="item">
                                <div class="quote">
                                    <p class="lead">"Kami membuat HealthyNourish sebagai proyek akhir untuk membantu
                                        teman-teman kami yang mungkin mengalami gangguan makan untuk mengetahui tingkat gangguan makan
                                        mereka dan menemukan solusi sesuai."</p>
                                    <h6>&rarr;</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="kontak" class="section padding-top-big">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 text-center mb-5">
                        <h4 class="fw-bold">ANGGOTA KELOMPOK 3</h4>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="team-wrap">
                            <img class="rounded-5 bg-dark shadow" src="landing/img/team1-new.jpg" alt="foto-1">
                            <p class="fw-bold">M0520018</p>
                            <h6>Bintang Putro Wicaksono</h6>
                            <div class="social-team">
                                <ul class="list-social-team">
                                    <li class="icon-team tipped" data-title="<span>github</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf09b;</a>
                                    </li>
                                    <li class="icon-team tipped" data-title="<span>pinterest</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf231;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4 m-xl-0 text-center">
                        <div class="team-wrap">
                            <img class="rounded-5 bg-dark shadow" src="landing/img/team2-new.jpg" alt="foto-2">
                            <p class="fw-bold">M0520019</p>
                            <h6>Christopher Aaron Widodo</h6>
                            <div class="social-team">
                                <ul class="list-social-team">
                                    <li class="icon-team tipped" data-title="<span>twitter</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf099;</a>
                                    </li>
                                    <li class="icon-team tipped" data-title="<span>facebook</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf09a;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4 m-md-0 text-center">
                        <div class="team-wrap">
                            <img class="rounded-5 bg-dark shadow" src="landing/img/team3-new.jpg" alt="foto-3">
                            <p class="fw-bold">M0520024</p>
                            <h6>Enricho Abrar Ashari</h6>
                            <div class="social-team">
                                <ul class="list-social-team">
                                    <li class="icon-team tipped" data-title="<span>github</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf09b;</a>
                                    </li>
                                    <li class="icon-team tipped" data-title="<span>pinterest</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf231;</a>
                                    </li>
                                    <li class="icon-team tipped" data-title="<span>facebook</span>"
                                        data-tipper-options='{"direction":"bottom","follow":"true","margin":25}'>
                                        <a href="#">&#xf09a;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="section padding-top-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer" class="section footer padding-top-big background-dark background-image-cover m-0 rounded-top"
            style="background-image: url(img/footer.jpg);">
            <div class="container">
            </div>
        </div>
    </main>

    <script src="landing/js/jquery.js"></script>
    <script src="landing/js/royal_preloader.min.js"></script>
    <script src="landing/js/popper.min.js"></script>
    <script src="landing/js/bootstrap.min.js"></script>
    <script src="landing/js/plugins.js"></script>
    <script src="landing/js/custom.js"></script>
@endsection
