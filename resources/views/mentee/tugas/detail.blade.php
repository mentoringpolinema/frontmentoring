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
                                        <li class="breadcrumb-item"><a href="#"></a>Tugas </li>
                                        <li class="breadcrumb-item active"> Detail </li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Detail Tugas</h3>
                                            {{-- <div class="nk-block-des text-soft">
                                                <p>Tugas Minggu 1</p>
                                            </div> --}}
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        {{-- <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Download Materi</span></a></li> --}}
                                                        <li><a href="/mentee/materi" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></li>
                                                        <li><a href="/mentee/materi" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a></li>                                                        
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="row g-gs">
                                         <div class="col-xxl-3 col-md-12">
                                            <div class="card card-preview">
                                                <div class="card-inner">
                                                    <div class="preview-block">
                                                        <div class="row gy-4">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <h4>Tugas Minggu - 1 </h4>
                                                                    <p>Tugas untuk Minggu ke-1 Adalah mengerjakan soal-soal serta dijawab di word ! </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="card card-preview">
                                                <div class="card-inner">
                                                    <div class="preview-block">
                                                        <div class="row gy-4">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                <label class="form-label" for="customMultipleFilesLabel">Silahkan Upload Tugas yang telah diberikan</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="custom-file">
                                                                        <input type="file" multiple class="custom-file-input" id="customMultipleFiles">
                                                                        <label class="custom-file-label" for="customMultipleFiles">Choose files</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-warning">Upload</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xxl-4">
                                            <div class="card h-100">
                                                <div class="card-inner border-bottom">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Tugas-mu</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-support">
                                                    <li class="nk-support-item">
                                                        <div class="user-avatar bg-purple-dim">
                                                            <span>TG1</span>
                                                        </div>
                                                        <div class="nk-support-content">
                                                            <div class="title">
                                                                <span>Tugas Minggu 1</span>
                                                            </div>
                                                            <span class="time">2 Hours ago</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- .card -->
                                        </div>
                                    </div><!-- .card-preview -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
@stop