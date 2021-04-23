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
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-4">
                                                <div class="nk-download">
                                                    <div class="data">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-dark lg">
                                                                <em class="icon ni ni-user-alt"></em>
                                                            </div>
                                                            <div class="user-info">
                                                                <h4 class="title"><span class="name">Selamat Datang {{auth()->user()->name}} !</span> <span class="badge badge-dim badge-dark badge-pill">{{auth()->user()->role}}</span></h4>
                                                            <div class="meta">
                                                                <span class="version">
                                                                    <span class="text-soft">{{auth()->user()->email}}</span>
                                                                </span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <a href="#" class="btn btn-dark">Detail</a>
                                                    </div>
                                                </div><!-- .sp-pdl-item -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="card h-100 bg-warning text-white">
                                                <div class="card-inner">
                                                    <ul class="nk-store-statistics">
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title text-white">Data Mentee</div>
                                                                <div class="count text-white">3,795</div>
                                                            </div>
                                                            <em class="icon bg-warning-dim ni ni-users"></em>
                                                        </li>                                                        
                                                    </ul>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="card h-100 bg-success text-white">
                                                <div class="card-inner">
                                                    <ul class="nk-store-statistics">                                                        
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title text-white">Data Kelompok</div>
                                                                <div class="count text-white">120</div>
                                                            </div>
                                                            <em class="icon bg-info-dim ni ni-user"></em>
                                                        </li>                                                       
                                                    </ul>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-3 col-md-4">
                                            <div class="card h-100 bg-pink text-white">
                                                <div class="card-inner">
                                                    <ul class="nk-store-statistics">
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="title text-white">Data Materi</div>
                                                                <div class="count text-white">5</div>
                                                            </div>
                                                            <em class="icon bg-pink-dim ni ni-book"></em>
                                                        </li>
                                                    </ul>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-lg-12 col-xxl-4">
                                            <div class="card h-100 bg-dark text-white">
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
                                                                <div class="timeline-date">{{$kegiatan->tanggal_kegiatan->format('d M Y')}}</div>
                                                                <div class="timeline-data">
                                                                    <h6 class="timeline-title">{{$kegiatan->nama_kegiatan}}</h6>
                                                                    <div class="timeline-des">
                                                                        <p>{!!$kegiatan->detail_kegiatan!!}</p>
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
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
@stop