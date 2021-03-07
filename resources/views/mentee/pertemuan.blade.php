@extends('layouts.master')
@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <nav>
                                    <ul class="breadcrumb breadcrumb-arrow">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Pertemuan</li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">                                            
                                            <h4 class="nk-block-title page-title">Pertemuan</h4>
                                            <span>Pertemuan Rutin Mentoring antara Mente dengan Mentor, <br>yang dilaksanakan seraca Online Melaui Media Zoom Meeting</span>                                            
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-between">
                                             <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-info btn-round eg-swal-infoMateriMentee"><em class="icon ni ni-video-fill"></em><span>Status Pertemuan : Minggu Ke-2</span></a></li>
                                                        {{-- <button type="button" class="btn btn-round btn-success" data-toggle="tooltip" data-placement="bottom" title="Mentoring Anda Sudah Lulus, Segera Cetak Bukti."><em class="icon ni ni-check-circle-fill"></em>
                                                        Status Mentoring : Lulus
                                                        </button> --}}
                                                        {{-- <button type="button" class="btn btn-round btn-danger" data-toggle="tooltip" data-placement="bottom" title="Mentoring Anda Tidak Lulus, Segera Upload Kekurangan !"><em class="icon ni ni-cross-circle-fill"></em>
                                                        Status Mentoring : Tidak Lulus
                                                        </button> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                               <div class="nk-block">
                                    <div class="row g-gs">
                                        {{-- @foreach ($data_materi as $materi) --}}
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="#" data-toggle="modal" data-target="#modalDetailMateri" class="project-title">
                                                                <div class="user-avatar sq bg-warning"><span>MM</span></div>
                                                                <div class="project-info">
                                                                    <h6 class="title">Ashiap</h6>
                                                                    <span class="sub-text">Ashiap</span>
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#" data-toggle="modal" data-target="#modalDetailMateri"><em class="icon ni ni-eye"></em><span>Lihat Pertemuan</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <p>Ashiap ...</p>
                                                            {{-- <p>{{$materi->link_materi}}</p> --}}
                                                        </div>
                                                        <div class="project-progress">
                                                            <div class="project-progress-details">
                                                                <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>1 Link Pertemuan</span></div>
                                                                <div class="project-progress-percent">100%</div>
                                                            </div>
                                                            <div class="progress progress-pill progress-md bg-success">
                                                                <div class="progress-bar" data-progress="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    <div class="user-avatar sm bg-primary"><span>A</span></div>
                                                                </li>
                                                            </ul>
                                                            {{-- <span class="badge badge-dim badge-warning"><em class="icon ni ni-clock"></em><span>4 Days Left</span></span> --}}
                                                            <span class="badge badge-dim badge-success"><em class="icon ni ni-check-circle"></em><span>Selesai</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @endforeach --}}
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
     @stop