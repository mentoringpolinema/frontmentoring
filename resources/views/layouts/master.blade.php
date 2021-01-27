<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Mentoring Polinema">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ehey.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="template/homepage/assets/images/favicon.ico">
    <!-- Page Title  -->
    <title> Dashboard | Mentoring Polinema <?php echo date("Y");?> </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('template/dashboard/assets/css/dashlite.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('template/dashboard/css/theme.css?ver=2.2.0')}}">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('layouts.includes._sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('layouts.includes._header')
                <!-- main header @e -->
                <!-- content @s -->
                @yield('content')
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; <?php echo date("Y");?> Mentoring Polinema <a href="https://mentoringpolinema.my.id">UKM Kerohanian Islam Politeknik Politeknik Negeri Malang</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('template/dashboard//assets/js/bundle.js?ver=2.2.0')}}"></script>
    <script src="{{asset('template/dashboard//assets/js/scripts.js?ver=2.2.0')}}"></script>
    <script src="{{asset('template/dashboard//assets/js/charts/chart-ecommerce.js?ver=2.2.0')}}"></script>
</body>

</html>