<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Mentoring Polinema - <?php echo date("Y");?></title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="template/homepage/assets/images/favicon.ico" type="image/png">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="template/homepage/assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="template/homepage/assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="template/homepage/assets/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="template/homepage/assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="template/homepage/assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="template/homepage/assets/css/style.css">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                       
                        <a class="navbar-brand" href="#">
                            <img src="{{asset('template/homepage/assets/images/LogoWhite.png')}}" alt="Logo" width="280px" height="85px">
                        </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#services">About</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#portfolio">Documentation</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#about">QnA</a></li>
                                {{-- <li class="nav-item"><a class="page-scroll" href="#team">Team</a></li> --}}
                                <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                                <li class="nav-item"><a class="page-scroll" href="/cekMentoring">Cek Mentoring</a></li>
                            </ul>
                        </div>
                        <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li><a class="solid" href="/login">Log In</a></li>
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    
    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
                <li data-target="#carouselThree" data-slide-to="1"></li>
                <li data-target="#carouselThree" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Mentoring Polinema 2020</h1>
                                    <p class="text">Program Pembinaan Mahasiswa Baru Muslim dalam bidang kerohanian di Politeknik Negeri Malang.</p>
                                    <!-- <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li>
                                        <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="{{asset('template/homepage/assets/images/slider/1.png')}}" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Mentoring New System</h1>
                                    <p class="text">Sistem Informasi Mentoring 2020 sudah disesuaikan oleh Sistem Kegiatan Terbaru dari Kegiatan Mentoring .</p>
                                    <ul class="slider-btn rounded-buttons">
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="{{asset('template/homepage/assets/images/slider/2.png')}}" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Mentoring Online Based</h1>
                                    <p class="text">Kegiatan dilakaksanakan dengan sistem online dengan mengintegrasikan antara zoom dan website ini.</p>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="{{asset('template/homepage/assets/images/slider/3.png')}}" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>

            <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                <i class="lni lni-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                <i class="lni lni-arrow-right"></i>
            </a>
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->
    
    <!--====== FEATRES TWO PART START ======-->

    <section id="services" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Kegiatan Kami</h3>
                        <p class="text">Mentoring adalah program pembinaan mahasiswa baru dalam bidang kerohanian di Politeknik Negeri Malang, dengan tujuan untuk menciptakan generasi yang cerdas dan berakhlak mulia, Kegiatan ini dilaksanakan Oleh : </p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Mentee</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-users"></i>
                                <img class="shape" src="{{asset('template/homepage/assets/images/f-shape-1.svg')}}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Mentee adalah mahasiswa baru muslim yang diajar oleh seorang mentor</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Mentor</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-user"></i>
                                <img class="shape" src="{{asset('template/homepage/assets/images/f-shape-1.svg')}}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Mentor Ialah tenaga pengajar mentoring yang berasal dari Ustadz/Ustadzah UMMI.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Panitia</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-consulting"></i>
                                <img class="shape" src="{{asset('template/homepage/assets/images/f-shape-1.svg')}}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Tenaga Penyelenggara dan Pengelola Kegiatan Mentoring dari UKM RISPOL.</p>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATRES TWO PART ENDS ======-->
    
    <!--====== PORTFOLIO PART START ======-->

    <section id="portfolio" class="portfolio-area portfolio-four pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Dokumentasi Kegiatan </h3>
                        <p class="text">Berikut adalah Dokumentasi Kegiatan Mentoring yang dilaksanakan, Meliputi Kegiatan Opening Mentoring, Closing Mentoring dan Kegiatan Mentoring itu sendiri</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="portfolio-menu text-center mt-50">
                        <ul>
                            <li data-filter="*" class="active">Seluruh Kegiatan</li>
                            <li data-filter=".branding-4">Opening Mentoring</li>
                            <li data-filter=".marketing-4">Closing Mentoring</li>
                            <li data-filter=".planning-4">Kegiatan Mentoring</li>
                        </ul>
                    </div> <!-- portfolio menu -->
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row no-gutters grid mt-50">
                        <div class="col-lg-4 col-sm-6 branding-4 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('template/homepage/assets/images/portfolio/opment-min.JPG')}}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{asset('template/homepage/assets/images/portfolio/opment-min.JPG')}}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4 research-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('template/homepage/assets/images/portfolio/2.png')}}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{asset('template/homepage/assets/images/portfolio/2.png')}}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 branding-4 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('template/homepage/assets/images/portfolio/opment2-min.JPG')}}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{asset('template/homepage/assets/images/portfolio/opment2-min.JPG')}}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 planning-4 research-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('template/homepage/assets/images/portfolio/4.png')}}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{asset('template/homepage/assets/images/portfolio/4.png')}}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('template/homepage/assets/images/portfolio/5.png')}}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{asset('template/homepage/assets/images/portfolio/5.png')}}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('template/homepage/assets/images/portfolio/6.png')}}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{asset('template/homepage/assets/images/portfolio/6.png')}}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 research-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('template/homepage/assets/images/portfolio/7.png')}}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{asset('template/homepage/assets/images/portfolio/7.png')}}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 branding-4 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('template/homepage/assets/images/portfolio/opment3-min.JPG')}}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="{{asset('template/homepage/assets/images/portfolio/opment3-min.JPG')}}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('template/homepage/assets/images/portfolio/9.png')}}" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="a{{asset('template/homepage/assets/images/portfolio/9.png')}}"><i class="lni lni-zoom-in"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="{{asset('template/homepage/assets/images/portfolio/shape.svg')}}" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PORTFOLIO PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-content mt-45">
                        <div class="about-title">
                            <h6 class="sub-title">Question And Answer Mentoring Polinema</h6>
                            <h4 class="title">Frequently Asked Questions <br> Mentoring Polinema</h4>
                        </div> <!-- faq title -->
                        <div class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                 <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Apakah Wajib Mengikuti Kegiatan Mentoring ?</a>
                                    </div>
                                    <div id="collapseTwo" class="collapsed" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text"><b>Wajib</b> Bagi Seluruh Mahasiswa Baru Muslim Polinema, Karena kegiatan ini masuk kegiatan Wajib Mahasiswa Baru dan akan mempengaruhi Kelulusan Kalian</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Syarat Pengambilannya Bagaimana ?</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text"><b>Wajib Mengikuti</b> Serangkaian Kegiatan Mentoring, yaitu Opening Mentoring, Closing Mentoring, dan 10 Pertemuan Wajib dengan perincian 5 Kali Pertemuan Zoom Meeting dan 5 Kali Penugasan</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingFore">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">Bagaimana Cara mengecek apakah kita sudah lulus atau tidak ?</a>
                                    </div>
                                    <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Bisa langsung cek dengan Masuk ke Halaman Login lalu masukkan NIM dan Password, setelah itu sistem akan menampilkan status Kelulusannya.</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Jika status belum lulus, Bagaimana cara menggantinya ?</a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Jika kalian dinyatakan <b>tidak lulus</b> maka kalian diwajibkan menggantinya, kebijakan pengganti mentoring akan disampaikan di akhir kegiatan, jadi jangan sampai alfa yah :).</p>
                                        </div>
                                    </div>
                                </div> <!-- card -->
                            </div>
                        </div> <!-- faq accordion -->
                    </div> <!-- faq content -->
                </div>
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{asset('template/homepage/assets/images/QnA.png')}}" alt="about">
                    </div> <!-- faq image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial-left-content mt-45">
                        <h6 class="sub-title">Testimonials</h6>
                        <h4 class="title">Apa Kata Mereka<br> Tentang Mentoring</h4>
                        <ul class="testimonial-line">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <p class="text">Seberapa Berkesan dan Bermanfaat Bagi Mereka ? Simak Kata Mereka Yuk !.</p>
                    </div> <!-- testimonial left content -->
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-right-content mt-50">
                        <div class="quota">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="testimonial-content-wrapper testimonial-active">
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Kegiatan Ini sangat membantu dalam dakwah keagamaan di Politeknik Negeri Malang. tak hanya itu, kegitan ini juga membantu mahasiswa dalam memberantas buta Al-Qur'an.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                            <img src="{{asset('template/homepage/assets/images/pirfak.JPG')}}" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">Irfak Wahyudi</h5>
                                            <span class="sub-title">Mentor Tahun 2019/2020</span>
                                        </div>
                                    </div>
                                    <!-- <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div> -->
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Ya gimana ye kegiatan ini sangat bagus bagi mahasiswa, dapat memberikan pemahaman seputar al-qur'an dan masih banyak manfaat yang didapatkan, tapi saya yang pusying s*t !”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                                <img src="{{asset('template/homepage/assets/images/prijal.JPG')}}" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">Rijalus Sholihin</h5>
                                            <span class="sub-title">Ketua Bidang Mentoring 2020/2021</span>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <!-- <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                                <img src="assets/images/author-3.jpg" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">Mr. Jems Bond</h5>
                                            <span class="sub-title">CEO Mbuild Firm</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div> -->
                            </div> <!-- single testimonial -->
                        </div> <!-- testimonial content wrapper -->
                    </div> <!-- testimonial right content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->
    
    <!--====== TEAM START ======-->

    <section id="team" class="team-area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Meet The Team</h3>
                        <p class="text">Dibalik Layar Website Sistem Informasi Mentoring Polinema 2020</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                            <img src="{{asset('template/homepage/assets/images/phudan.JPG')}}" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="https://youtube.com/yahyahudan"><i class="lni lni-youtube"></i></a></li>
                                    <li><a href="https://instagram.com/yahyahudann"><i class="lni lni-instagram"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Yahya Hudan</a></h4>
                            <span class="sub-title">Front-End Developer</span>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                            <img src="{{asset('template/homepage/assets/images/pirfak.JPG')}}" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="https://instagram.com/irfak_wahyu"><i class="lni lni-instagram"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Irfak Wahyudi</a></h4>
                            <span class="sub-title">Back-End Developer</span>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                            <img src="{{asset('template/homepage/assets/images/prijal.JPG')}}" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="https://www.instagram.com/rijalus_sholihin17/"><i class="lni lni-instagram"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#">Rijalus Sholihin</a></h4>
                            <span class="sub-title">Head Master Mentoring 2020/2021</span>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM  ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Contact</h3>
                        <p class="text">Ada Keperluan dan Pertanyaan Seputar Mentoring ? Langsung saja ke Lokasi Kami</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-map mt-30">
                        <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.524038825183!2d112.61270271437829!3d-7.9446726813397115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78839067137667:0x7467d75ceba4bc5d!2sGedung AS Polinema!5e0!3m2!1sen!2sid!4v1609772184170!5m2!1sen!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">Kesekretariaran UKM RISPOL<br>Gedung AS.01 Polinema.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">mentoringpolinema@polinema.ac.id</p>
                                <p class="text">rohispolinema@polinema.ac.id</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">+62 812 5922 4380</p>
                                <p class="text">+62 812 5922 4380</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                        <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Leave <span>A Message.</span></h4>
                        
                        <form id="contact-form" action="{{asset('template/homepage/assets/contact.php')}}" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Name</label>
                                        <div class="input-items default">
                                            <input name="name" type="text" placeholder="Name">
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Email</label>
                                        <div class="input-items default">
                                            <input type="email" name="email" placeholder="Email">
                                            <i class="lni lni-envelope"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input mt-25">
                                        <label>Massage</label>
                                        <div class="input-items default">
                                            <textarea name="massage" placeholder="Massage"></textarea>
                                            <i class="lni lni-pencil-alt"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="form-input light-rounded-buttons mt-30">
                                        <button class="main-btn light-rounded-two">Send Message</button>
                                    </div> <!-- form input -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html"><img src="template/homepage/assets/images/logoWhite.png" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/rohispolinema"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://instagram.com/rohis_polinema"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="https://youtube.com/rohis_polinema"><i class="lni lni-youtube"></i></a></li>
                    </ul> <!-- social -->
                    <div class="footer-support text-center">
                        <span class="number">+62 812 5922 4380</span>
                        <span class="mail">mentoringpolinema@polinema.ac.id</span>
                    </div>
                    <div class="copyright text-center mt-35">
                        <p class="text">Developed By Mentoring Polinema <br> Designed by <a href="https://uideck.com" rel="nofollow">UIdeck</a> and Built-with <a rel="nofollow" href="https://ayroui.com">Ayro UI</a> </p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="template/homepage/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="template/homepage/assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="template/homepage/assets/js/popper.min.js"></script>
    <script src="template/homepage/assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="template/homepage/assets/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="template/homepage/assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="template/homepage/assets/js/ajax-contact.js"></script>
    
    <!--====== Isotope js ======-->
    <script src="template/homepage/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="template/homepage/assets/js/isotope.pkgd.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="template/homepage/assets/js/jquery.easing.min.js"></script>
    <script src="template/homepage/assets/js/scrolling-nav.js"></script>
    
    <!--====== Main js ======-->
    <script src="template/homepage/assets/js/main.js"></script>
    
    {{-- Sticky Script --}}
    <script>
    $(window).on('scroll', function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 20) {
            $(".navbar-area").removeClass("sticky");
            $(".navbar-area img").attr("src", "template/homepage/assets/images/LogoWhite.png");
        } else {
            $(".navbar-area").addClass("sticky");
            $(".navbar-area img").attr("src", "template/homepage/assets/images/Logo_1.png");
        }
    });
    </script>

     <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='template/tawkto.js/tawkto.js';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
    <!--End of Tawk.to Script-->

</body>
</html>
