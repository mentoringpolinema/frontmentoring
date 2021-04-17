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
                                        <li class="breadcrumb-item active">Materi dan Tugas</li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">                                            
                                            <h4 class="nk-block-title page-title">Materi dan Tugas</h4>
                                            <span>Beriku adalah Materi dan Tugas yang harus dikerjankan !</span>                                            
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-between">
                                             <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-info btn-round eg-swal-infoMateriMentee"><em class="icon ni ni-list"></em><span>Status Mentoring : Minggu Ke-2</span></a></li>
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
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="nk-download">
                                                <div class="data">
                                                    <div class="thumb">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                            <path d="M50,61H22a6,6,0,0,1-6-6V22l9-11H50a6,6,0,0,1,6,6V55A6,6,0,0,1,50,61Z" style="fill:#755de0" />
                                                            <path d="M27.2223,43H44.7086s2.325-.2815.7357-1.897l-5.6034-5.4985s-1.5115-1.7913-3.3357.7933L33.56,40.4707a.6887.6887,0,0,1-1.0186.0486l-1.9-1.6393s-1.3291-1.5866-2.4758,0c-.6561.9079-2.0261,2.8489-2.0261,2.8489S25.4268,43,27.2223,43Z" style="fill:#fff" />
                                                            <path d="M25,20.556A1.444,1.444,0,0,1,23.556,22H16l9-11h0Z" style="fill:#b5b3ff" /></svg>
                                                    </div>
                                                    <div class="info">
                                                        <h6 class="title"><span class="name">Materi Minggu 1</span> <span class="badge badge-dim badge-primary badge-pill">New</span></h6>
                                                        <div class="meta">
                                                            <span class="version">
                                                                <span class="text-soft">Materi: </span> <span>Makhorijul Huruf</span>
                                                            </span>
                                                            <span class="release">
                                                                <span class="text-soft">Status: </span> <span class="badge badge-dot badge-dot-xs badge-success">Selesai</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <a href="/mentee/materi/detailMateri" class="btn btn-sm btn-secondary">Detail</a>
                                                </div>
                                            </div><!-- .sp-pdl-item -->
                                        </div><!-- .col -->                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="nk-download">
                                                <div class="data">
                                                    <div class="thumb">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                            <g>
                                                                <path d="M50,61H22a6,6,0,0,1-6-6V22l9-11H50a6,6,0,0,1,6,6V55A6,6,0,0,1,50,61Z" style="fill:#599def" />
                                                                <path d="M25,20.556A1.444,1.444,0,0,1,23.556,22H16l9-11h0Z" style="fill:#c2e1ff" />
                                                                <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#fff" />
                                                                <rect x="27" y="36" width="18" height="2" rx="1" ry="1" style="fill:#fff" />
                                                                <rect x="27" y="41" width="18" height="2" rx="1" ry="1" style="fill:#fff" />
                                                                <rect x="27" y="46" width="12" height="2" rx="1" ry="1" style="fill:#fff" />
                                                            </g>
                                                        </svg></div>
                                                    <div class="info">
                                                        <h6 class="title"><span class="name">Tugas Minggu 1</span> <span class="badge badge-dim badge-primary badge-pill">New</span></h6>
                                                        <div class="meta">
                                                            <span class="version">
                                                                <span class="text-soft">Tugas: </span> <span>Makhorijul Huruf</span>
                                                            </span>
                                                            <span class="release">
                                                                <span class="text-soft">Status: </span> <span class="badge badge-dot badge-dot-xs badge-success">Selesai</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <a href="/mentee/materi/detailTugas" class="btn btn-sm btn-warning">Detail</a>
                                                </div>
                                            </div><!-- .sp-pdl-item -->
                                        </div><!-- .col -->                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="nk-download">
                                                <div class="data">
                                                    <div class="thumb">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                            <path d="M50,61H22a6,6,0,0,1-6-6V22l9-11H50a6,6,0,0,1,6,6V55A6,6,0,0,1,50,61Z" style="fill:#755de0" />
                                                            <path d="M27.2223,43H44.7086s2.325-.2815.7357-1.897l-5.6034-5.4985s-1.5115-1.7913-3.3357.7933L33.56,40.4707a.6887.6887,0,0,1-1.0186.0486l-1.9-1.6393s-1.3291-1.5866-2.4758,0c-.6561.9079-2.0261,2.8489-2.0261,2.8489S25.4268,43,27.2223,43Z" style="fill:#fff" />
                                                            <path d="M25,20.556A1.444,1.444,0,0,1,23.556,22H16l9-11h0Z" style="fill:#b5b3ff" /></svg>
                                                    </div>
                                                    <div class="info">
                                                        <h6 class="title"><span class="name">Materi Minggu 3</span> <span class="badge badge-dim badge-primary badge-pill">New</span></h6>
                                                        <div class="meta">
                                                            <span class="version">
                                                                <span class="text-soft">Tugas: </span> <span>Makhorijul Huruf</span>
                                                            </span>
                                                            <span class="release">
                                                                <span class="text-soft">Status: </span> <span class="badge badge-dot badge-dot-xs badge-danger"> Belum</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <a href="/mentee/materi/detailMateri" class="btn btn-sm btn-secondary">Detail</a>
                                                </div>
                                            </div><!-- .sp-pdl-item -->
                                        </div><!-- .col -->                                        
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="nk-download">
                                                <div class="data">
                                                    <div class="thumb">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                            <g>
                                                                <path d="M50,61H22a6,6,0,0,1-6-6V22l9-11H50a6,6,0,0,1,6,6V55A6,6,0,0,1,50,61Z" style="fill:#599def" />
                                                                <path d="M25,20.556A1.444,1.444,0,0,1,23.556,22H16l9-11h0Z" style="fill:#c2e1ff" />
                                                                <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#fff" />
                                                                <rect x="27" y="36" width="18" height="2" rx="1" ry="1" style="fill:#fff" />
                                                                <rect x="27" y="41" width="18" height="2" rx="1" ry="1" style="fill:#fff" />
                                                                <rect x="27" y="46" width="12" height="2" rx="1" ry="1" style="fill:#fff" />
                                                            </g>
                                                        </svg></div>
                                                    <div class="info">
                                                        <h6 class="title"><span class="name">Tugas Minggu 3</span> <span class="badge badge-dim badge-primary badge-pill">New</span></h6>
                                                        <div class="meta">
                                                            <span class="version">
                                                                <span class="text-soft">Tugas: </span> <span>Makhorijul Huruf</span>
                                                            </span>
                                                            <span class="release">
                                                                <span class="text-soft">Status: </span> <span class="badge badge-dot badge-dot-xs badge-danger">Belum</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <a href="/mentee/materi/detailTugas" class="btn btn-sm btn-warning">Detail</a>
                                                </div>
                                            </div><!-- .sp-pdl-item -->
                                        </div><!-- .col -->                                        
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
     @stop