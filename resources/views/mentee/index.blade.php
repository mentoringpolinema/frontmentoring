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
                                                <h5>Selamat Datang ! </h5>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        {{-- <li class="nk-block-tools-opt"><a href="#" class="btn btn-round btn-warning eg-swal-warningMenteeStatus"><em class="icon ni ni-loader"></em><span>Status Mentoring : On Progress</span></a></li> --}}
                                                        <button type="button" class="btn btn-round btn-success" data-toggle="tooltip" data-placement="bottom" title="Mentoring Anda Sudah Lulus, Segera Cetak Bukti."><em class="icon ni ni-check-circle-fill"></em>
                                                        Status Mentoring : Lulus
                                                        </button>
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
                                                    <div class="col-xxl-4">
                                                <div class="nk-download">
                                                    <div class="data">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-success lg">
                                                                <em class="icon ni ni-user-alt"></em>
                                                            </div>
                                                            <div class="user-info">
                                                                {{-- <h4 class="title"><span class="name">Nama : {{auth()->user()->mentee->nama_mentee}} </span> <span class="badge badge-dim badge-success badge-pill">{{auth()->user()->role}}</span></h4> --}}
                                                                <h4 class="title"><span class="name">Nama : {{$data_mentee->nama_mentee}} </span> <span class="badge badge-dim badge-success badge-pill">{{auth()->user()->role}}</span></h4>
                                                            <div class="meta">
                                                                <span class="version">
                                                                    <span class="text-soft">Email : {{auth()->user()->email}}</span>
                                                                </span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        {{-- <a href="#" class="btn btn-success">Cetak Bukti</a> --}}
                                                        <a href="/mentee/cetak" class="btn btn-round btn-success"><em class="icon ni ni-printer-fill"></em><span>Cetak Bukti</span> </a>
                                                    </div>
                                                </div><!-- .sp-pdl-item -->
                                        </div><!-- .col -->
                                                    <div class="col-xxl-3 col-md-3">
                                                        <div class="card h-100 bg-primary text-white">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title text-white">Total Kegiatan</div>
                                                                            <div class="count text-white">{{$total_kegiatan}}</div>
                                                                        </div>
                                                                        <em class="icon bg-primary-dim ni ni-users"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-md-3">
                                                        <div class="card h-100 bg-danger text-white">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title text-white">Total Materi</div>
                                                                            <div class="count text-white">{{$total_materi}}</div>
                                                                        </div>
                                                                        <em class="icon bg-danger-dim ni ni-book-read"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-md-3">
                                                        <div class="card h-100 bg-warning text-white">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title text-white">Total Pertemuan</div>
                                                                            <div class="count text-white">{{$total_pertemuan}}</div>
                                                                        </div>
                                                                        <em class="icon bg-warning-dim ni ni-link-group"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-md-3">
                                                        <div class="card h-100 bg-success text-white">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title text-white">Total Tugas</div>
                                                                            <div class="count text-white">{{$total_tugas}}</div>
                                                                        </div>
                                                                        <em class="icon bg-success-dim ni ni-task"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    <div class="col-lg-6 col-xxl-4">
                                                        <div class="card h-100 bg-dark text-white">
                                                            <div class="card-inner border-bottom">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title"><span><em class="icon ni ni-clock-fill"></em></span>  Timeline Mentoring <?php echo date("Y");?></h6>
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
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    <div class="col-lg-6 col-xxl-4">
                                                        <div class="card h-100 ">
                                                            <div class="card-inner border-bottom">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 class="title"><span><em class="icon ni ni-notify"></em></span>  Pengumuman</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                <ul class="nk-support">
                                                                    @foreach ($data_pengumuman as $pengumuman)
                                                                    <li class="nk-support-item">
                                                                        @if($pengumuman->tagline_pengumuman == 'Mentoring')
                                                                        <div class="user-avatar bg-success">
                                                                            <span>MT</span>
                                                                        </div>
                                                                        @endif
                                                                        @if($pengumuman->tagline_pengumuman == 'Closing Mentoring')
                                                                        <div class="user-avatar bg-danger">
                                                                            <span>CM</span>
                                                                        </div>
                                                                        @endif
                                                                        @if($pengumuman->tagline_pengumuman == 'Pengambilan Sertifikat')
                                                                        <div class="user-avatar bg-warning">
                                                                            <span>PS</span>
                                                                        </div>
                                                                        @endif
                                                                        <div class="nk-support-content">
                                                                            <div class="title">
                                                                                <span>{{$pengumuman->judul_pengumuman}}</span>
                                                                                @if($pengumuman->status_pengumuman == 'Selesai')
                                                                                <span class="badge badge-dot badge-dot-xs badge-success ml-1">Selesai</span>
                                                                                @endif
                                                                                @if($pengumuman->status_pengumuman == 'On Going')
                                                                                <span class="badge badge-dot badge-dot-xs badge-dark ml-1">On Going</span>
                                                                                @endif
                                                                                @if($pengumuman->status_pengumuman == 'Coming Soon')
                                                                                <span class="badge badge-dot badge-dot-xs badge-warning ml-1">Coming Soon</span>
                                                                                @endif
                                                                            </div>
                                                                            <p>{{$pengumuman->detail_pengumuman}}</p>
                                                                            <span class="time">{{$pengumuman->created_at->format('d M Y')}}</span>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
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
