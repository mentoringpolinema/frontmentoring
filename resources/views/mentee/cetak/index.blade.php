@extends('layouts.master')
@section('content')
 <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Bukti Lulus Mentoring<strong class="text-primary small">#Cetak</strong></h3>
                                            <div class="nk-block-des text-soft">
                                                <ul class="list-inline">
                                                    <li>Created At: <span class="text-base"><?php echo date("d M Y");?></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="/mentee" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                            <a href="/mentee" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="invoice">
                                        <div class="invoice-action">
                                            <a class="btn btn-icon btn-lg btn-white btn-dim btn-outline-primary" href="/mentee/print" target="_blank"><em class="icon ni ni-printer-fill"></em></a>
                                        </div><!-- .invoice-actions -->
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
                                                                <td>1831710190</td>
                                                            </tr>                                                            
                                                            <tr>
                                                                <td>Kelas </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>MI-3A</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Prodi</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>D3 Manajemen Informatika</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jurusan</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>Teknologi Informasi</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mentor</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>Ust. Rijalus Sholikin</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kelompok</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>2</td>
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
                                                                <td colspan="3" class="w-20px">{{auth()->user()->name}} - 1831710190</td>
                                                            </tr>                                                            
                                                        </tfoot>
                                                    </table>
                                                    <div class="nk-notes ff-italic fs-12px text-soft"> Bukti ini dicetak otomatis oleh sistem, harap dijaga dengan baik sebagai bukti anda lulus Mentoring</div>
                                                </div>
                                            </div><!-- .invoice-bills -->
                                        </div><!-- .invoice-wrap -->
                                    </div><!-- .invoice -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
@stop