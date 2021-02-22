<?php
    function dateIndonesia($date){
        if($date != '0000-00-00'){
            $date = explode('-', $date);
  
            $data = $date[2] . ' ' . bulan($date[1]) . ' '. $date[0];
        }else{
            $data = 'Format tanggal salah';
        }
  
        return $data;
    }
  
    function bulan($bln) {
        $bulan = $bln;
  
        switch ($bulan) {
            case 1:
                $bulan = "Januari";
                break;
            case 2:
                $bulan = "Februari";
                break;
            case 3:
                $bulan = "Maret";
                break;
            case 4:
                $bulan = "April";
                break;
            case 5:
                $bulan = "Mei";
                break;
            case 6:
                $bulan = "Juni";
                break;
            case 7:
                $bulan = "Juli";
                break;
            case 8:
                $bulan = "Agustus";
                break;
            case 9:
                $bulan = "September";
                break;
            case 10:
                $bulan = "Oktober";
                break;
            case 11:
                $bulan = "November";
                break;
            case 12:
                $bulan = "Desember";
                break;
        }
        return $bulan;
    }

?>

@extends('layouts.master')
@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Dashboard</h3>                                            
                                            <h5>Selamat Datang ! {{auth()->user()->username}}</h5>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group mb-2">
                                                        <div class="card-title">
                                                            <h6 class="title">Data Mentoring</h6>
                                                        </div>
                                                    </div>
                                                    <ul class="nk-store-statistics">
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title">Data Mentee</div>
                                                                <div class="count">3,795</div>
                                                            </div>
                                                            <em class="icon bg-primary-dim ni ni-users"></em>
                                                        </li>
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title">Data Mentor</div>
                                                                <div class="count">120</div>
                                                            </div>
                                                            <em class="icon bg-info-dim ni ni-user"></em>
                                                        </li>
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title">Data Materi</div>
                                                                <div class="count">5</div>
                                                            </div>
                                                            <em class="icon bg-pink-dim ni ni-book"></em>
                                                        </li>
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title">Data Kegiatan</div>
                                                                <div class="count">10</div>
                                                            </div>
                                                            <em class="icon bg-warning-dim ni ni-video-fill"></em>
                                                        </li>
                                                    </ul>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group mb-2">
                                                        <div class="card-title">
                                                            <h6 class="title">Data Kampus</h6>
                                                        </div>
                                                    </div>
                                                    <ul class="nk-store-statistics">
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title">Data Kelas</div>
                                                                <div class="count">250</div>
                                                            </div>
                                                            <em class="icon bg-primary-dim ni ni-home"></em>
                                                        </li>
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title">Data Prodi</div>
                                                                <div class="count">25</div>
                                                            </div>
                                                            <em class="icon bg-info-dim ni ni-list"></em>
                                                        </li>
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title">Data Jurusan</div>
                                                                <div class="count">6</div>
                                                            </div>
                                                            <em class="icon bg-pink-dim ni ni-setting"></em>
                                                        </li>
                                                    </ul>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-lg-7 col-xxl-4">
                                            <div class="card h-100">
                                                <div class="card-inner border-bottom">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Timeline Mentoring <?php echo date("Y");?></h6>
                                                        </div>                                                       
                                                    </div>
                                                </div>
                                                <div class="card-inner">
                                                    <div class="timeline">
                                                        <ul class="timeline-list">
                                                            @foreach ($data_kegiatan as $kegiatan)
                                                            <li class="timeline-item">
                                                                <div class="timeline-status bg-success is-outline"></div>
                                                                <div class="timeline-date">{{dateIndonesia($kegiatan->tanggal_kegiatan)}}</div>
                                                                <div class="timeline-data">
                                                                    <h6 class="timeline-title">{{$kegiatan->nama_kegiatan}}</h6>
                                                                    <div class="timeline-des">
                                                                        {{$kegiatan->detail_kegiatan}}
                                                                        {{-- <strong><span class="time">Waktu : {{$kegiatan->jam_kegiatan}}</span></strong> --}}
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            {{-- <li class="timeline-item">
                                                                <div class="timeline-status bg-primary"></div>
                                                                <div class="timeline-date">06 Jan <em class="icon ni ni-alarm-alt"></em></div>
                                                                <div class="timeline-data">
                                                                    <h6 class="timeline-title">Penyampaian Materi : Minggu 2</h6>
                                                                    <div class="timeline-des">
                                                                        <p>Materi berupa video dan Mengerjakan Kuis.</p>
                                                                        <span class="time">09:30am</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="timeline-item">
                                                                <div class="timeline-status bg-pink"></div>
                                                                <div class="timeline-date">07 Jan <em class="icon ni ni-alarm-alt"></em></div>
                                                                <div class="timeline-data">
                                                                    <h6 class="timeline-title">Pertemuan Zoom : Minggu 3</h6>
                                                                    <div class="timeline-des">
                                                                        <p>Pertemuan Mentee dengan Mentor melalui Media Daring Zoom.</p>
                                                                        <span class="time">09:30am</span>
                                                                    </div>
                                                                </div>
                                                            </li> --}}
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-3 col-md-5">
                                            <div class="card card-full overflow-hidden">
                                                <div class="nk-ecwg nk-ecwg7 h-100">
                                                    <div class="card-inner flex-grow-1">
                                                        <div class="card-title-group mb-4">
                                                            <div class="card-title">
                                                                <h6 class="title">Statistik Keluhan</h6>
                                                            </div>
                                                        </div>
                                                        <div class="nk-ecwg7-ck">
                                                            <canvas class="ecommerce-doughnut-s1" id="orderStatistics"></canvas>
                                                        </div>
                                                        <ul class="nk-ecwg7-legends">
                                                            <li>
                                                                <div class="title">
                                                                    <span class="dot dot-lg sq" data-bg="#816bff"></span>
                                                                    <span>Sertifikat Hilang</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="title">
                                                                    <span class="dot dot-lg sq" data-bg="#13c9f2"></span>
                                                                    <span>Absensi</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="title">
                                                                    <span class="dot dot-lg sq" data-bg="#ff82b7"></span>
                                                                    <span>Kegiatan</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div><!-- .card-inner -->
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
@stop