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
                                                        {{-- <li class="nk-block-tools-opt"><a href="#" class="btn btn-info btn-round eg-swal-infoMateriMentee"><em class="icon ni ni-video-fill"></em><span>Status Pertemuan : Minggu Ke-2</span></a></li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                               <div class="nk-block">
                                    <div class="row g-gs">
                                        @foreach ($data_pertemuan as $pertemuan)
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="/mentee/pertemuan/detail/{{$pertemuan->id_pertemuan}}" class="project-title">
                                                                <div class="user-avatar sq bg-warning"><span>PM</span></div>
                                                                <div class="project-info">
                                                                    <h6 class="title">{{$pertemuan->nama_pertemuan}}</h6>
                                                                    <span class="sub-text">Minggu Ke : {{$pertemuan->minggu_pertemuan}}</span>
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="/mentee/pertemuan/detail/{{$pertemuan->id_pertemuan}}" ><em class="icon ni ni-eye"></em><span>Lihat Pertemuan</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <p>{{$pertemuan->detail_pertemuan}}</p>
                                                        </div>
                                                        <div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    <div class="user-avatar sm bg-primary"><span>A</span></div>
                                                                </li>
                                                            </ul>
                                                            @if ($pertemuan->status_pertemuan == 'Open')
                                                                <span class="badge badge-dim badge-success"><em class="icon ni ni-check-circle"></em><span>Open</span></span>
                                                            @else
                                                                <span class="badge badge-dim badge-danger"><em class="icon ni ni-cross-circle"></em><span>Closed</span></span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
     @stop