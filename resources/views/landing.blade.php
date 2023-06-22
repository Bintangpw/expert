@extends('main')
{{-- <!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head> --}}
@section('external_assets')
    <!-- Basic Page Needs
 ================================================== -->
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

    <!-- Mobile Specific Metas
 ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121" />
    <meta name="msapplication-navbutton-color" content="#212121" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

    <!-- Web Fonts
 ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- CSS
 ================================================== -->
    <link rel="stylesheet" href="landing/css/bootstrap.min.css" />
    <link rel="stylesheet" href="landing/css/font-awesome.min.css" />
    <link rel="stylesheet" href="landing/css/style.css" />
    <link rel="stylesheet" href="landing/css/colors/color.css" />
    <link rel="stylesheet" href="landing/css/ionicons.min.css" />
    <link rel="stylesheet" href="landing/css/owl.carousel.css" />
    <link rel="stylesheet" href="landing/css/owl.transitions.css" />

    <!-- Favicons
 ================================================== -->
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

@endsection
{{-- </head> --}}

@section('main_section')

<body class="royal_preloader">

    <!-- <div id="royal_preloader"></div> -->


    <!-- Nav and Logo
 ================================================== -->


    <!-- MENU
    ================================================== -->

    <nav id="menu-wrap" class="menu-back cbp-af-header">
        <div class="menu">
            {{-- <a href="/">
                <div class="logo"></div>
            </a> --}}
            <ul>
                <li>
                    <a class="text-uppercase shadow-hover" href="/dashboard">Dashboard</a>
                </li>
                <li>
                    <a class="text-uppercase shadow-hover curent-shadow" href="#">Menu</a>
                    <ul>
                        <li><a href="/form">Diagnosa</a></li>
                        <li><a href="/gejala">Gejala</a></li>
                        <li><a href="/depresi">Gangguan Makan</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <a class="text-uppercase shadow-hover" href="/artikel">Artikel</a>
                </li> --}}
                <li>
                    <a class="text-uppercase shadow-hover" href="#kontak">Kontak</a>
                </li>
                <li>
                    <a class="text-uppercase shadow-hover" href="#faq">FAQ</a>
                </li>

                @guest()
                <li>
                    <a class="text-uppercase shadow-hover" href="/login">Login</span></a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>

    <!-- Primary Page Layout
 ================================================== -->

    <main>

        <!-- Hero Section -->

        <div class="section full-height mob-height">
            <div class="background-parallax" style="background-image: url('landing/img/full-2-new.jpg')"
                data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>
            <div class="hero-center-text-wrap">
                <div class="container text-left ml-5">
                    <div class="row ml-5">
                        <div class="col-md-12">
                            <br>
                            <br>
                            <h1 class="parallax-fade-top-2 typed">
                                {{-- Cek Tingkat <strong>gangguan makanmu</strong>
                                Sekarang!<br> --}}
                                <span id="typed-1">
                                    Cek Tingkat <strong style="-webkit-text-stroke: 0">gangguan makan</strong>
                                Sekarang!<br>
                                </span>
                            </h1>
                            <br>
                            <style>
                                .btn-glow:hover {
                                  box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
                                  transition: box-shadow 0.5s;
                                }
                              </style>
                              <div style="margin-left: 12px">

                                <a href="/form" class="btn btn-light btn-glow" role="button" style="color: rgb(218, 116, 22);">
                                  Isi form
                                </a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#footer" data-gal="m_PageScroll2id">
                <div class="scroll-to-next">ke bawah <i class="fa fa-long-arrow-down"></i></div>
            </a>
        </div>

        <!-- Portfolio -->


        <!-- Hero Section -->

        <div class="section padding-top-big padding-bottom-big">
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

        <!-- FAQ Section -->
        <section id="faq" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-5">Pertanyaan yang Sering Diajukan - FAQ</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apa itu HealthyNourish?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#faqAccordion">
                            <div class="card-body">
                                HealthyNourish adalah sebuah situs yang membantu mahasiswa akhir mengukur tingkat gangguan makan
                                mereka dengan mengisi formulir pertanyaan. Kami menyediakan solusi sesuai setelah
                                mahasiswa mengisi formulir tersebut.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Siapa yang bisa mengakses HealthyNourish?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#faqAccordion">
                            <div class="card-body">
                                HealthyNourish ditujukan untuk mahasiswa akhir, namun siapa saja dapat mengakses situs ini
                                dan mengisi formulir untuk mengetahui tingkat gangguan makan mereka.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Apakah hasil dari HealthyNourish dapat diandalkan?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#faqAccordion">
                            <div class="card-body">
                                Hasil dari HealthyNourish adalah sebuah estimasi dari tingkat gangguan makan seseorang, dan tidak
                                bisa dianggap sebagai diagnosis yang pasti. Kami sangat menyarankan agar seseorang yang
                                merasa memiliki tingkat gangguan makan yang tinggi untuk segera meminta bantuan profesional.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Bagaimana cara mengakses solusi yang ditawarkan HealthyNourish?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#faqAccordion">
                            <div class="card-body">
                                Setelah mengisi formulir, mahasiswa akan menerima rekomendasi solusi sesuai dengan
                                tingkat gangguan makan yang terdeteksi. Kami juga menyediakan tautan ke sumber informasi dan
                                bantuan profesional yang dapat membantu mahasiswa mengatasi gangguan makan mereka.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>






        <div id="footer" class="section footer padding-top-big background-dark background-image-cover m-0 rounded-top"
            style="background-image: url(img/footer.jpg);">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-md-12">
                        <img src="landing/img/logo-light.png" alt="logo image" />
                    </div>
                    <div class="col-md-12 my-4">
                        <ul class="footer-social">
                            <li>
                                <a href="#">Tw</a>
                            </li>
                            <li>
                                <a href="#">Fb</a>
                            </li>
                            <li>
                                <a href="#">G+</a>
                            </li>
                            <li>
                                <a href="#">Vm</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 mt-5">
                        <div class="footer-line"></div>
                    </div>
                    <div class="col-md-12 rights my-3">
                    </div>
                </div> --}}
            </div>
        </div>

        {{-- <div class="section footer padding-top-big background-image-cover"
            style="background-image: url(landing/img/footer.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="landing/img/logo-light.png" alt="logo image" />
                    </div>
                    <div class="col-md-12 my-4">
                        <ul class="footer-social">
                            <li>
                                <a href="#">Tw</a>
                            </li>
                            <li>
                                <a href="#">Fb</a>
                            </li>
                            <li>
                                <a href="#">G+</a>
                            </li>
                            <li>
                                <a href="#">Vm</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 mt-5">
                        <div class="footer-line"></div>
                    </div>
                    <div class="col-md-12 rights my-3">
                    </div>
                </div>
            </div>
        </div> --}}

    </main>


    <!-- JAVASCRIPT
    ================================================== -->
    <script src="landing/js/jquery.js"></script>
    <script src="landing/js/royal_preloader.min.js"></script>
    <script src="landing/js/popper.min.js"></script>
    <script src="landing/js/bootstrap.min.js"></script>
    <script src="landing/js/plugins.js"></script>
    <script src="landing/js/custom.js"></script>
    <script>
        // Type text

        // var typed = new Typed('#typed-1', {
        //     strings: ['diagnosa', 'solusi', 'atasi'],
        //     typeSpeed: 45,
        //     backSpeed: 0,
        //     startDelay: 200,
        //     backDelay: 2200,
        //     loop: true,
        //     loopCount: false,
        //     showCursor: true,
        //     cursorChar: "_",
        //     attr: null
        // });
    </script>
    <!-- End Document
================================================== -->

@endsection
