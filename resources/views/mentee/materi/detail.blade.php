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
                                        <li class="breadcrumb-item"><a href="#"></a>Materi </li>
                                        <li class="breadcrumb-item active"> Detail </li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Detail Materi</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Materi Minggu 1</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li><a href="{{$data_materi->link_materi}}" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Download Materi</span></a></li>
                                                        <li><a href="/mentee/materi" class="btn btn-outline-warning"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></li>                                                    
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="content-page wide-md m-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm mx-auto">
                                        <div class="nk-block-head-content text-center">
                                            <h2 class="nk-block-title fw-normal">Materi Minggu {{$data_materi->minggu_materi}}</h2>
                                            <div class="nk-block-des">
                                                <p class="lead"> {{$data_materi->nama_materi}}, Oleh Ust. Rijalus Sholihin</p>
                                                <p class="text-soft ff-italic">Last Update: {{$data_materi->created_at->format('d M Y')}}</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="card">
                                            <div class="card-inner card-inner-xl">
                                                <div class="entry">
                                                    <h3>{{$data_materi->nama_materi}}</h3>
                                                    <p>{!!$data_materi->detail_materi!!}</p>
                                                    <h4>Video Materi</h4>
                                                    <p>dibawah ini merupakan video materi tentang minggu {{$data_materi->minggu_materi}} yang disampaikan oleh Ust. Rijalus Sholihun</p>
                                                    <div class="card card-preview">
                                                        <div class="card-inner">
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                <iframe class="embed-responsive-item" src="{{$data_materi->link_materi_embed}}" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-preview -->                                                    
                                                </div>
                                            </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                    </div><!-- .nk-block -->
                                </div><!-- .content-page -->
                            </div>
                        </div>
                    </div>
                </div>
@stop