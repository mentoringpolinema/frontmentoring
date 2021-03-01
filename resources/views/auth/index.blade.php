<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    {{-- <base href="../../../"> --}}
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="template/homepage/assets/images/favicon.ico">
    <!-- Page Title  -->
    <title>Login | Mentoring Polinema <?php echo date("Y");?></title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="template/dashboard/assets/css/dashlite.css?ver=2.2.0">
    <link id="skin-default" rel="stylesheet" href="template/dashboard/assets/css/theme.css?ver=2.2.0">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="#" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg" src="template/dashboard/images/logoMini.png" srcset="./images/logo2x.png 2x" alt="logo">
                                        <img class="" src="template/dashboard/images/logoBig.png" width="300px" height="100px">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Log-In Mentoring Polinema <?php echo date("Y");?></h5>
                                        <div class="nk-block-des">
                                            <p>Gunakan NIM untuk mahasiswa dan username untuk admin</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <form action="/login" method="POST" class="form-validate">
                                    {{-- {{ csrf_field() }} --}}
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">NIM atau Username</label>
                                        </div>
                                        <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="NIM atau Username" required>
                                    </div><!-- .foem-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="html/pages/auths/auth-reset.html">Lupa Password?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password anda" required>
                                        </div>
                                    </div><!-- .foem-group -->
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Log in</button>
                                    </div>
                                </form><!-- form -->
                            </div><!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">
                                <div class="mt-3">
                                    <p>&copy; <?php echo date("Y");?> Mentoring Polinema.</p>
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="template/dashboard/images/slides/1.png" srcset="template/dashboard/images/slides/1.png" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Mentoring Polinema</h4>
                                                <p>Developed By Kerohanian Islam Politeknik Politeknik Negeri Malang Tahun <?php echo date("Y");?>.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="template/dashboard/images/slides/2.png" srcset="template/dashboard/images/slides/2.png" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Mentoring Polinema</h4>
                                                <p>Developed By Kerohanian Islam Politeknik Politeknik Negeri Malang Tahun <?php echo date("Y");?>.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="template/dashboard/images/slides/3.png" srcset="template/dashboard/images/slides/3.png" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Mentoring Polinema</h4>
                                                <p>Developed By Kerohanian Islam Politeknik Politeknik Negeri Malang Tahun <?php echo date("Y");?>.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                </div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="template/dashboard/assets/js/bundle.js?ver=2.2.0"></script>
    <script src="template/dashboard/assets/js/scripts.js?ver=2.2.0"></script>

</html>