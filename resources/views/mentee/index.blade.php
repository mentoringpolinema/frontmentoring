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
                                            <div class="nk-block-des text-soft">
                                                <h5>Selamat Datang ! {{auth()->user()->username}}</h5>
                                            </div>
                                        </div><!-- .nk-block-head-content -->                                        
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-round btn-warning"><em class="icon ni ni-loader"></em><span>Status Mentoring : On Progress</span></a></li>
                                                        {{-- <button type="button" class="btn btn-round btn-success" data-toggle="tooltip" data-placement="bottom" title="Mentoring Anda Sudah Lulus, Segera Cetak Bukti."><em class="icon ni ni-check-circle-fill"></em>
                                                        Status Mentoring : Lulus
                                                        </button> --}}
                                                        {{-- <button type="button" class="btn btn-round btn-danger" data-toggle="tooltip" data-placement="bottom" title="Mentoring Anda Tidak Lulus, Segera Upload Kekurangan !"><em class="icon ni ni-cross-circle-fill"></em>
                                                        Status Mentoring : Tidak Lulus
                                                        </button> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <div class="row g-gs">
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total kegiatan</div>
                                                                            <div class="count">10</div>
                                                                        </div>
                                                                        <em class="icon bg-primary-dim ni ni-users"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Kelompok</div>
                                                                            <div class="count">20</div>
                                                                        </div>
                                                                        <em class="icon bg-secondary-dim ni ni-link-group"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Kelompok</div>
                                                                            <div class="count">20</div>
                                                                        </div>
                                                                        <em class="icon bg-secondary-dim ni ni-link-group"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    <div class="col-lg-6 col-xxl-4">
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
                                                                            <div class="timeline-date">{{$kegiatan->tanggal_kegiatan}}</div>
                                                                            <div class="timeline-data">
                                                                                <h6 class="timeline-title">{{$kegiatan->nama_kegiatan}}</h6>
                                                                                <div class="timeline-des">
                                                                                    <p>{{$kegiatan->detail_kegiatan}}</p>
                                                                                    <strong><span class="time">Waktu : {{$kegiatan->jam_kegiatan}}</span></strong>
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
                                                    <div class="col-lg-6 col-xxl-4">
                                                        <div class="card h-100">
                                                            <div class="card-inner border-bottom">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title">Pengumuman</h6>
                                                                    </div>                                                       
                                                                </div>
                                                            </div>
                                                            <div class="card-inner">
                                                                <p>Ashiaap</p>
                                                            </div>
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        
@stop