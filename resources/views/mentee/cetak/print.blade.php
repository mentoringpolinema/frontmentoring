<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('template/homepage/assets/images/favicon.ico')}}">
    <!-- Page Title  -->
    <title>Dashboard | Mentoring Polinema <?php echo date("Y");?></title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('template/dashboard/assets/css/dashlite.css?ver=2.4.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('template/dashboard/assets/css/theme.css?ver=2.4.0')}}">
</head>

<body class="bg-white" onload="printPromot()">
    <div class="nk-block">
        <div class="invoice">
            <div class="invoice-wrap">
                                        <div class="invoice-brand text-center">
                                                <img src="{{asset('template/dashboard/images/logoMentoring.png')}}" srcset="{{asset('template/dashboard/images/logoMentoring.png 2x')}}" alt="">
                                                <img src="{{asset('template/dashboard/images/LogoRispol.png')}}" srcset="{{asset('template/dashboard/images/LogoRispol.png 2x')}}" alt="">
                                            </div>
                                            <div class="invoice-head">
                                                <div class="invoice-contact">
                                                    <span class="overline-title">Bukti Lulus</span>
                                                    <div class="invoice-contact-info">
                                                        <h4 class="title">Kegiatan Mentoring Tahun <?php echo date("Y");?></h4>
                                                    </div>
                                                </div>
                                                <div class="invoice-desc">
                                                    <ul class="list-plain">
                                                        <li class="invoice-id"><span>ID Cetak</span>:<span>66K5W3</span></li>
                                                        <li class="invoice-date"><span>Tanggal</span>:<span><?php echo date("d M Y");?></span></li>
                                                    </ul>
                                                </div>
                                            </div><!-- .invoice-head -->
                                            <div class="invoice-bills">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="w-60">#</th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th class="w-60"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Nama Lengkap </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>{{auth()->user()->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>NIM</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>{{auth()->user()->mentee->nim_mentee}}</td>
                                                            </tr>                                                            
                                                            <tr>
                                                                <td>Kelas </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>{{auth()->user()->mentee->kelas->kelas}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Prodi</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>{{auth()->user()->mentee->kelas->prodi->nama_prodi}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jurusan</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>{{auth()->user()->mentee->kelas->prodi->jurusan->nama_jurusan}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mentor</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>{{auth()->user()->mentee->kelompok->mentor->nama_mentor}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kelompok</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>{{auth()->user()->mentee->kelompok->nama_kelompok}}</td>
                                                            </tr>                                                            
                                                        </tbody>
                                                         <tfoot>                                                       
                                                            <tr style="height: 100px">
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>                                                           
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td colspan="3" class="w-20px">Tanda Tangan</td>
                                                            </tr>                                                            
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td colspan="3" class="w-20px">{{auth()->user()->name}} - {{auth()->user()->mentee->nim_mentee}}</td>
                                                            </tr>                                                            
                                                        </tfoot>
                                                    </table>
                                                    <div class="nk-notes ff-italic fs-12px text-soft"> Bukti ini dicetak otomatis oleh sistem, harap dijaga dengan baik sebagai bukti anda lulus Mentoring</div>
                                                </div>
                                            </div><!-- .invoice-bills -->
                                        </div><!-- .invoice-wrap -->
                                    </div><!-- .invoice -->
    </div><!-- .nk-block -->
    <script>
        function printPromot() {
            window.print();
        }
    </script>
</body>

</html>