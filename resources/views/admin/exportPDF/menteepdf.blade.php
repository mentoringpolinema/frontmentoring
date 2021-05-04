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
    <title>Dashboard | menteeing Polinema <?php echo date("Y");?></title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('template/dashboard/assets/css/dashlite.css?ver=2.4.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('template/dashboard/assets/css/theme.css?ver=2.4.0')}}">
</head>

<body class="bg-white" onload="printPromot()">
{{-- <body class="bg-white"> --}}
    <div class="nk-block">
        <div class="invoice">
            <div class="invoice-wrap">
                                        <div class="invoice-brand text-center">
                                                <img src="{{asset('template/dashboard/images/logomentoring.png')}}" srcset="{{asset('template/dashboard/images/logomentoring.png 2x')}}" alt="">
                                                <img src="{{asset('template/dashboard/images/LogoRispol.png')}}" srcset="{{asset('template/dashboard/images/LogoRispol.png 2x')}}" alt="">
                                            </div>
                                            <div class="invoice-head">
                                                <div class="invoice-contact">
                                                    <span class="overline-title">Kegiatan Mentoring Tahun <?php echo date("Y");?></span>
                                                    <div class="invoice-contact-info">
                                                        <h4 class="title">Cetak Data Mentee</h4>
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
                                                     <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">                                                            
                                                            <th class="nk-tb-col"><span class="sub-text">Nama</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">NIM </span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Kelas</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Prodi</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Jurusan</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_mentee as $mentee)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span>{{$mentee->nama_mentee}}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$mentee->nim_mentee}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$mentee->kelas->kelas}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$mentee->kelas->prodi->nama_prodi}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$mentee->kelas->prodi->jurusan->nama_jurusan}}</span>
                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                    <div class="nk-notes ff-italic fs-12px text-soft"> Dokumen ini dicetak otomatis oleh sistem, harap dijaga dengan baik - panitia</div>
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