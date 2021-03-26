<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CV. Rimera Serbic - Welcome</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('logo/logo_bersih.png')}}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
{{--  --}}
    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Selecao - v4.0.1
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    {{-- @foreach($tbl_sejarah as $val)
    {{$val->sejarah}}
    @endforeach --}}

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-white"><a href="index.html"></a> RIMERA SERBIC</h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="#visimisi">Visi Misi</a></li>
                    <li><a class="nav-link scrollto" href="#services">Konsultan</a></li>
                    {{-- <li><a class="nav-link scrollto " href="#portfolio">Kursus</a></li> --}}
                    <li><a class="nav-link scrollto " href="#testimonials">Profil Trainer</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#pricing">Portofolio</a></li> --}}
                    <li><a class="nav-link scrollto" href="#team">Partner Kami</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
                    <li><a class="nav-link scrollto" href={{route('login')}}>Login</a></li>
                    
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <div class="row">
                        <!-- <div class="col-sm-7"> -->
                            <center>
                                <img src="{{ asset('gambar/logo1.png') }}" style="width: 250px;" alt="" srcset="" class="animate__animated animate__fadeInUp"><br>
                                <h2 class="animate__animated animate__fadeInRight">
                                    Lembaga Syariah Economic Research and Bussiness Consulting
                                </h2>
                            {{-- <p class="animate__animated animate__fadeInRight">Jasa pembuatan website dan toko online dengan tampilan design web yang menarik, handal, dan banyak fitur. Cocok untuk company profile, online shop, personal website, e-commerce, microsite, website portal, dll.</p> --}}
                            </center>
                        <!-- </div> -->
                        <!-- <div class="col-sm-5">
              <img class="animate__animated animate__fadeInRight" src="assets/img/design-web.png" width="100%" alt="" srcset="">
            </div> -->
                    </div>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="background: #ef6603;">Read More</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <center>
                        <img src="{{ asset('gambar/logo1.png') }}" style="width: 250px;" alt="" srcset="" class="animate__animated animate__fadeInUp"><br>
                        <h2 class="animate__animated animate__fadeInRight">
                            syariah economic research and business consulting
                        </h2>
                    {{-- <p class="animate__animated animate__fadeInRight">Jasa pembuatan website dan toko online dengan tampilan design web yang menarik, handal, dan banyak fitur. Cocok untuk company profile, online shop, personal website, e-commerce, microsite, website portal, dll.</p> --}}
                    </center>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="background: #ef6603;">Read More</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <center>
                        <img src="{{ asset('gambar/logo1.png') }}" style="width: 250px;" alt="" srcset="" class="animate__animated animate__fadeInUp"><br>
                        <h2 class="animate__animated animate__fadeInRight">
                            syariah economic research and business consulting
                        </h2>
                    {{-- <p class="animate__animated animate__fadeInRight">Jasa pembuatan website dan toko online dengan tampilan design web yang menarik, handal, dan banyak fitur. Cocok untuk company profile, online shop, personal website, e-commerce, microsite, website portal, dll.</p> --}}
                    </center>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="background: #ef6603;">Read More</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>SEJARAH</h2>
                    <p class="text-success">Rimera Serbic Konsultan </p>
                </div>

                @foreach ($tbl_sejarah as $sejarah)
                    
                
                <div class="row content" data-aos="fade-up">
                    <div class="col-lg-6">
                        <p style="text-align: justify">
                            {!! $sejarah->sejarah !!}
                        </p>
                        {{-- <a href="#" class="btn-learn-more">Learn More</a> --}}
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <img src="{{asset('gambar')}}/{{$sejarah->photo}}" alt="" srcset="">
                    </div>
                </div>
                @endforeach
               
            </div>
           
        </section><!-- End About Section -->


        {{-- VIssi misi  --}}
        <section class="visimisi" id="visimisi">
            <div class="container">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="section-title mt-5" data-aos="zoom-out">
                            <h2>Struktur Organisasi</h2>
                            <p class="text-success">Struktur Organisasi</p>
                        </div>
                        @foreach ($tbl_so as $so)
                        <div class="row content" data-aos="fade-up">
                                <p>
                                    {{-- {{$sejarah->sejarah}}. --}}
                                    <img src="{{asset('gambar')}}/{{$so->photo}}" width="100%" alt="" srcset="">
                                </p>
                                {{-- <a href="#" class="btn-learn-more">Learn More</a> --}}
                        @endforeach
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row content" data-aos="fade-up">
                            <div class="section-title mt-5" data-aos="zoom-out">
                                <h2>Visi Misi</h2>
                                <p class="text-success">Visi Misi</p>
                                
                            </div>
                                @foreach ($tbl_visimisi as $visi_misi)
                                <label><h3>Visi </h3></label>
                                <div >
                                    <p>
                                        {{$visi_misi->visi}}.
                                    </p>
                                </div>

                                <label class="mr-5 mt-3"> <h3>Misi</h3></label>
                                    <div class="col-lg-12">
                                        <ul>
                                            <?php
                                                $misi = explode('|', $visi_misi->misi);
                                                foreach ($misi as $pdd) {
                                                ?>
                                                    <li>{{ $pdd }}</li>
                                                <?php
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                @endforeach
                        </div>
                    </div>
                </div>

                
                <div class="row content" data-aos="fade-up">
                    <div class="float-end">
                        
                    </div>
                </div>
            </div>
        </section>
        {{-- End VIssi misi  --}}

        <!-- ======= Services Section ======= -->
        <section id="services" class="services" style="position:relative; background-color: rgb(253, 253, 234) ">
            <img src="{{asset('logo/New.png')}}" alt="" style="position: absolute; width:400px; buttom:0; right: 11em; top: 7em;" >
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Konsultan</h2>
                    <p class="text-success">Konsultan</p>
                </div>
                
                
                <div class="row">
                    @foreach ($tbl_konsultan as $konsultan)
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="zoom-in-left">
                            {{-- <div class="icon"><i class="bi bi-laptop" style="color: #ff689b;"></i></div> --}}
                            <h4 class="title"><a href="">{{$konsultan->konsultan_servis}}</a></h4>
                            <p class="description">{{$konsultan->konsultan_servis}}.</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Services Section -->
  
        <section id="services" class="services">
            <div class="container">
                <img src="{{asset('logo/New.png')}}" alt="" style="position: absolute; width:400px; left: 0;" >
                <div class="section-title" data-aos="zoom-out" style="text-align: right;">
                    <h2>Training</h2>
                    <p class="text-success">Training</p>
                </div>
                <div class="row" >
                    <div class="col-lg-8 col-md-6 offset-md-4" >
                        <div class="row"> 
                        @foreach ($tbl_training as $training)
                            <div class="col-lg-6 col-md-6">
                                <div class="icon-box" data-aos="zoom-in-left">
                                    {{-- <div class="icon"><i class="bi bi-laptop" style="color: #ff689b;"></i></div> --}}
                                    {{-- <h4 class="title"><a href="">{{$training->kode . $training->id . $training->id_b}}</a></h4> --}}
                                    <p class="description">{{$training->judul_uk}}.</p>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Profile Trainer</h2>
                    <p class="text-success">Profile Trainer</p>
                </div>
                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($tbl_profil as $profil)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('gambar/'.$profil->foto_trainer)}}" class="testimonial-img" alt="foto_trainer.jpg">
                                <h2>{{ $profil->nama_trainer }}</h2>
                                <hr>
                                <h3>Pendidikan</h3>
                                <h4 style="text-align: left;">
                                    <?php 
                                    $no = 1;
                                    $pdd = explode('|',$profil->pendidikan);
                                    foreach ($pdd as $key => $value) {
                                        ?>
                                        {{ $no++ }}
                                        {{ ')'.$value }}<br><br>
                                        <?php
                                    }    
                                    ?>
                                </h4>
                                <hr>
                                {{-- <h4>{{$profil->pendidikan}}</h4> --}}
                                <h3>Pengalaman</h3>
                                <h4 style="text-align: justify;">
                                    <?php 
                                    $no = 1;
                                    $pgl = explode('|',$profil->pengalaman_kerja);
                                    foreach ($pgl as $key => $value2) {
                                        ?>
                                        {{$no++}}
                                        {{ ')'.$value2 }}<br><br>
                                        <?php
                                    }    
                                    ?>
                                </h4>
                                <!-- <h4>Ceo &amp; Founder</h4> -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Pricing Section ======= -->
        {{-- <section id="pricing" class="pricing" style="background-color: rgb(253, 253, 234);">

            <div class="container">
                <div class="section-title" data-aos="zoom-out">
                    <h2>CV. Mediatama Web Indonesia</h2>
                    <p>Portofolio</p>
                </div>

                <div class="row">
                    <div class="col-sm-3"><img src="assets/img/port1.png" width="250px" alt="" srcset=""></div>
                    <div class="col-sm-3"><img src="assets/img/port2.png" width="250px" alt="" srcset=""></div>
                    <div class="col-sm-3"><img src="assets/img/port3.png" width="250px" alt="" srcset=""></div>
                    <div class="col-sm-3"><img src="assets/img/port4.png" width="250px" alt="" srcset=""></div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-12 mt-4">
                        <center>
                            <a href="#" class="btn btn-sm btn-success">View More Portofolio</a>
                        </center>
                    </div>
                </div>
                <hr>
                <center>
                    <h3>PORTOFOLIO APLIKASI MEDIATAMA WEB INDONESIA</h3>
                    <div class="row">
                        <div class="col-sm-4"><img src="assets/img/porto1.png" class="mt-2" width="350px" alt="" srcset=""></div>
                        <div class="col-sm-4"><img src="assets/img/porto2.png" class="mt-2" width="350px" alt="" srcset=""></div>
                        <div class="col-sm-4"><img src="assets/img/porto3.png" class="mt-2" width="350px" alt="" srcset=""></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><img src="assets/img/porto4.png" class="mt-2" width="350px" alt="" srcset=""></div>
                        <div class="col-sm-4"><img src="assets/img/porto5.png" class="mt-2" width="350px" alt="" srcset=""></div>
                        <div class="col-sm-4"><img src="assets/img/porto6.png" class="mt-2" width="350px" alt="" srcset=""></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><img src="assets/img/porto7.png" class="mt-2" width="350px" alt="" srcset=""></div>
                        <div class="col-sm-4"><img src="assets/img/porto8.png" class="mt-2" width="350px" alt="" srcset=""></div>
                        <div class="col-sm-4"><img src="assets/img/porto9.png" class="mt-2" width="350px" alt="" srcset=""></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><img src="assets/img/porto10.png" class="mt-2" width="350px" alt="" srcset=""></div>
                        <div class="col-sm-4"><img src="assets/img/porto11.png" class="mt-2" width="350px" alt="" srcset=""></div>
                    </div>
                </center>

            </div>



        </section><!-- End Pricing Section --> --}}
{{--  --}}
        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>CV. RIMERA SERBIC</h2>
                    <p class="text-success">Partner Kami</p>
                </div>

                <div class="row">
                    <div class="col-lg-2 col-md-3"></div>
                    @foreach ($tbl_partner as $partner)
                    <div class="col-lg-2 col-md-3">
                        <img src="{{asset('gambar')}}/{{$partner->logo_instansi}}" data-aos="fade-up" width="150px" class="img-fluid" alt="">
                        {{-- <h3>{{$partner->nama_instansi}}</h3> --}}
                    </div>
                    @endforeach
                    <div class="col-lg-2 col-md-3"></div>
                    {{-- <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien2.png" data-aos="fade-up" data-aos-delay="100" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien3.png" data-aos="fade-up" data-aos-delay="200" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien4.png" data-aos="fade-up" data-aos-delay="300" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien5.png" data-aos="fade-up" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien6.png" data-aos="fade-up" data-aos-delay="100" height="200px" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien7.png" data-aos="fade-up" data-aos-delay="200" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien8.png" data-aos="fade-up" data-aos-delay="300" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien9.png" data-aos="fade-up" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien10.png" data-aos="fade-up" data-aos-delay="100" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien11.png" data-aos="fade-up" data-aos-delay="200" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien12.png" data-aos="fade-up" data-aos-delay="300" height="200px" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien13.png" data-aos="fade-up" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien14.png" data-aos="fade-up" data-aos-delay="100" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien15.png" data-aos="fade-up" data-aos-delay="200" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien16.png" data-aos="fade-up" data-aos-delay="300" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien17.png" data-aos="fade-up" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien18.png" data-aos="fade-up" data-aos-delay="100" height="200px" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien19.png" data-aos="fade-up" data-aos-delay="200" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien20.png" data-aos="fade-up" data-aos-delay="300" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien21.png" data-aos="fade-up" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien22.png" data-aos="fade-up" data-aos-delay="100" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien23.png" data-aos="fade-up" data-aos-delay="200" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien24.png" data-aos="fade-up" data-aos-delay="300" height="200px" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien25.png" data-aos="fade-up" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien26.png" data-aos="fade-up" data-aos-delay="100" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien27.png" data-aos="fade-up" data-aos-delay="200" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien28.png" data-aos="fade-up" data-aos-delay="300" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien29.png" data-aos="fade-up" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien30.png" data-aos="fade-up" data-aos-delay="100" height="200px" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien31.png" data-aos="fade-up" data-aos-delay="200" height="200px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="assets/img/klien32.png" data-aos="fade-up" data-aos-delay="300" height="200px" class="img-fluid" alt="">
                    </div>
                </div> --}}

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact" style="background-color: #fffaf7">
            <div class="container">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="section-title" data-aos="zoom-out">
                            <h2>Contact</h2>
                            <p class="text-success">Kontak Kami</p>
                        </div>
    
                        {{-- <div class="row"> --}}
                            {{-- <div class="col-sm-12"> --}}
                                <img src="{{ asset('gambar/logo1.png') }}" data-aos="fade-right" width="250px" alt="" srcset="">
                                <p data-aos="fade-right">RIMERA SERBIC <br> Lembaga Syariah Economic Research and Bussiness Consulting</p>
                            {{-- </div> --}}
                        {{-- </div> --}}
                        {{-- <div class="col-lg-4" data-aos="fade-right"> --}}
                            <div class="info" data-aos="fade-right">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Lokasi:</h4>
                                    <p>Jorong Supanjang, Nagari Subadak, Kecamatan Lima Kaum, Kab. Tanah Datar, 27216</p>
                                </div>
    
                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>rimeraserbic@gmail.com</p>
                                </div>
    
                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>0852-3323-5460-0</p>
                                    <p>0812-1792-5209</p>
                                </div>
    
                            </div>    
                        {{-- </div> --}}
{{--  --}}
                    </div>

                    <div class="col-sm-6">
                        @include('sweetalert::alert')
                        <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left">
                            <div class="section-title" data-aos="zoom-out">
                                <h2>Formulir</h2>
                                <p class="text-success">Pendaftaran</p>
                            </div>
    
                            <form action="{{ route('pendaftaran.tambah') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-3 form-group">
                                        <input type="text" name="asal" class="form-control" id="asal" placeholder="Asal" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3">
                                        <textarea name="alamat" class="form-control" id="" rows="5" placeholder="Masukkan Alamat"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Masukkan No Telp" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <select name="nama_training" id="" class="form-control">
                                        <option value="">-- Pilih Training --</option>
                                        @foreach ($tbl_training as $item)
                                        <option value="{{ $item->judul_uk }}">{{ $item->judul_uk }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{--  --}}
    
                                <div class="text-center mt-3">
                                    {{-- <button type="submit">Daftar</button> --}}
                                    <button class="btn btn-lg" style="background-color: #ef6603; color: white; border-radius: 50px;">Daftar</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>RIMERA SERBIC</h3>
            <h4>Lembaga Syariah Economic Research and Bussiness Consulting</h4>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/rimera.serbic" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/rimeraserbic/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>CV. MEDIATAMA WEB INDONESIA</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
                {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>