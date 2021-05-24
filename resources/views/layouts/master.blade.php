<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Mentoring Polinema">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ehey.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('template/homepage/assets/images/favicon.ico')}}">
    <!-- Page Title  -->
    <title> Dashboard | Mentoring Polinema <?php echo date("Y");?> </title>
    <!-- StyleSheets  -->
    
	<link rel="stylesheet" href="{{asset('ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
    <link rel="stylesheet" href="{{asset('template/dashboard/assets/css/dashlite.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('template/dashboard/assets/css/theme.css?ver=2.2.0')}}">
    <!-- File Pond -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <!-- Email -->
    <link rel="stylesheet" href="{{asset('template/dashboard//assets/css/style-email.css')}}">

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
                                    <li class="nav-item"><?php echo date("d M Y");?></li>
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
    <!-- Sweet Alert-->
    @include('sweetalert::alert')
    <!-- JavaScript -->
    <script src="{{asset('vendor\jquery\jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('template/dashboard/assets/js/bundle.js?ver=2.2.0')}}"></script>
    <script src="{{asset('template/dashboard/assets/js/scripts.js?ver=2.2.0')}}"></script>
    <script src="{{asset('template/dashboard/assets/js/charts/chart-ecommerce.js?ver=2.2.0')}}"></script>
    <!-- Sweet Alert JS -->
    <script src="{{asset('template/dashboard/assets/js/example-sweetalert.js?ver=2.4.0')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    {{-- CK Editor --}}
    <script src="{{asset('ckeditor\ckeditor.js')}}"></script>
    <script src="{{asset('ckeditor\adapters\jquery.js')}}"></script>
	<script src="{{asset('ckeditor\sample.js')}}"></script>
    <script>
        initSample();
    </script>
    <!-- Summernote -->
    <link rel="stylesheet" href="{{asset('template/dashboard/assets/css/editors/summernote.css?ver=2.4.0')}}">
    <script src="{{asset('template/dashboard/assets/js/libs/editors/summernote.js?ver=2.4.0')}}"></script>
    <!-- editors -->
    <script src="{{asset('template/dashboard/assets/js/editors.js?ver=2.2.0')}}"></script>
    <!-- Inbox -->
    <script src="{{asset('template/dashboard/assets/js/apps/inbox.js?ver=2.4.0')}}"></script>
    <!-- Tagify -->
    <script src="{{asset('template/dashboard/assets/js/libs/tagify.js?ver=2.4.0')}}"></script>
    <!-- Messages -->
    <script src="{{asset('template/dashboardassets/js/apps/messages.js?ver=2.4.0')}}"></script>
    <!-- File Pond -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script> 
    {{-- @yield('script-filepond') --}}
    <script>
    (function (NioApp, $){
        $('.eg-swal-galulus').on("click", function (e) {
            Swal.fire("Good job!", "You clicked the button!", "error");
            e.preventDefault();
        });
    })(NioApp, jQuery);
    </script>
    @yield('jsAdd')

        {{-- <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/60a304b1b1d5182476b9cbd3/1f5ucklnn';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script--> --}}
    
</body>

</html>
