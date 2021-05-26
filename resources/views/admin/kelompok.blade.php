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
                                        <li class="breadcrumb-item active">Kelompok </li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Kelompok Mentoring</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Total Kelompok Tersedia : {{$total_kelompok}} Kelompok .</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        {{-- <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li> --}}
                                                        <li><a href="#" data-toggle="modal" data-target="#addKelompokModal" class="btn btn-info"><em class="icon ni ni-plus"></em><span>Tambah Kelompok</span></a></li>                                                        
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-preview">
                                        <div class="card-inner">
                                        <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h6 class="title">Cari Kelompok</h6>
                                                    </div>
                                                    <div class="card-tools mr-n1">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li>
                                                                <a href="#" class="search-toggle toggle-search btn btn-icon" data-target="search"><em class="icon ni ni-search"></em></a>
                                                            </li><!-- li -->
                                                            {{-- <li class="btn-toolbar-sep"></li><!-- li --> --}}
                                                            {{-- <li>
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                                        <div class="badge badge-circle badge-primary">2</div>
                                                                        <em class="icon ni ni-filter-alt"></em>
                                                                    </a>
                                                                    <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                                                        <div class="dropdown-head">
                                                                            <span class="sub-title dropdown-title">Filter By</span>
                                                                            <div class="dropdown">
                                                                                <a href="#" class="link link-light">
                                                                                    <em class="icon ni ni-more-h"></em>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-body dropdown-body-rg">
                                                                            <div class="row gx-6 gy-4">
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <label class="overline-title overline-title-alt">Jurusan</label>
                                                                                        <select class="form-select form-select-sm">
                                                                                            <option value="any">Teknologi Informasi</option>
                                                                                            <option value="deposit">Teknik Elektro</option>
                                                                                            <option value="buy">Teknik Mesin</option>
                                                                                            <option value="sell">Teknik Kimia</option>
                                                                                            <option value="transfer">Akutansi</option>
                                                                                            <option value="withdraw">Administrasi Niaga</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <label class="overline-title overline-title-alt">Angkatan</label>
                                                                                        <select class="form-select form-select-sm">
                                                                                            <option value="2020">2020</option>
                                                                                            <option value="2021">2021</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <button type="button" class="btn btn-secondary">Filter</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- .filter-wg -->
                                                                </div><!-- .dropdown -->
                                                            </li><!-- li --> --}}
                                                            {{-- <li>
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                                        <em class="icon ni ni-setting"></em>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                                        <ul class="link-check">
                                                                            <li><span>Order</span></li>
                                                                            <li class="active"><a href="#">DESC</a></li>
                                                                            <li><a href="#">ASC</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- .dropdown -->
                                                            </li><!-- li --> --}}
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .card-tools -->
                                                    <div class="card-search search-wrap" data-search="search">
                                                        <div class="search-content">
                                                            <form action="/admin/kelompok" method="GET">
                                                                <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                                <input type="text" name="cari" class="form-control border-transparent form-focus-none" placeholder="Cari Kelompok">
                                                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                            </form>        
                                                        </div>
                                                    </div><!-- .card-search -->
                                                </div><!-- .card-title-group -->
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row g-gs">
                                        @foreach ($data_kelompok as $kelompok)
                                            <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card">
                                                <div class="card-inner">
                                                    <div class="team">
                                                        <div class="team-status bg-success text-white"><em class="icon ni ni-check-thick"></em></div>
                                                        <div class="team-options">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="/admin/kelompok/del/{{$kelompok->id_kelompok}}"><em class="icon ni ni-trash"></em><span>Hapus Kelompok</span></a></li>
                                                                        <li><a href="/admin/kelompok/{{$kelompok->id_kelompok}}"><em class="icon ni ni-eye"></em><span>Detail Kelompok</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="user-card user-card-s2">
                                                            <div class="user-avatar md bg-warning">
                                                                <span>K{{$kelompok->id_kelompok}}</span>
                                                                <div class="status dot dot-lg dot-success"></div>
                                                            </div>
                                                            <div class="user-info">
                                                                <h6>Kelompok {{$kelompok->nama_kelompok}}</h6>
                                                                <span class="sub-text">Mentor : {{$kelompok->mentor->nama_mentor}}</span>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="team-details">
                                                            <p>Kelompok terdiri dari Jurusan Teknik Sipil dan Administrasi Niaga.</p>
                                                        </div>
                                                        <ul class="team-statistics">
                                                            <li><span>213</span><span>Mentee</span></li>
                                                            <li><span>87.5%</span><span>Kehadiran</span></li>
                                                            <li><span>587</span><span>Tugas</span></li>
                                                        </ul> --}}
                                                        <div class="team-view">
                                                            <a href="/admin/kelompok/{{$kelompok->id_kelompok}}" class="btn btn-round btn-outline-light w-150px"><span>Detail Kelompok</span></a>
                                                        </div>
                                                    </div><!-- .team -->
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        @endforeach                                        
                                        
                                        {{-- <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card">
                                                <div class="card-inner">
                                                    <div class="team">
                                                        <div class="team-status bg-success text-white"><em class="icon ni ni-check-thick"></em></div>
                                                        <div class="team-options">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Hapus Kelompok</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>Detail Kelompok</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="user-card user-card-s2">
                                                            <div class="user-avatar md bg-info">
                                                                <span>K2</span>
                                                                <div class="status dot dot-lg dot-success"></div>
                                                            </div>
                                                            <div class="user-info">
                                                                <h6>Kelompok 2</h6>
                                                                <span class="sub-text">Mentor : Faiz Shofi</span>
                                                            </div>
                                                        </div>
                                                        <div class="team-details">
                                                            <p>Kelompok terdiri dari Jurusan Teknologi Informasi dan Akutansi.</p>
                                                        </div>
                                                        <ul class="team-statistics">
                                                            <li><span>213</span><span>Mentee</span></li>
                                                            <li><span>87.5%</span><span>Kehadiran</span></li>
                                                            <li><span>587</span><span>Tugas</span></li>
                                                        </ul>
                                                        <div class="team-view">
                                                            <a href="/admin/kelompok/detail" class="btn btn-round btn-outline-light w-150px"><span>Detail Kelompok</span></a>
                                                        </div>
                                                    </div><!-- .team -->
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col --> --}}
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Added Mentor Mentee -->
    <div class="modal fade" tabindex="-1" role="dialog" id="addKelompokModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Tambah Kelompok</h5>
                    <div class="tab-content">
                        <form action="/admin/kelompok/add" method="POST">
                            @csrf
                        <div class="tab-pane active" id="data">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Nama Kelompok</label>
                                        <input type="text" class="form-control form-control-lg" id="nama_kelompok" name="nama_kelompok" placeholder="Enter Kelompok">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Mentor</label>
                                        <select class="form-select" id="mentor_id" name="mentor_id" data-ui="lg">
                                            @foreach ($data_mentor as $mentor)
                                            <option value="{{$mentor->id_mentor}}">{{$mentor->nama_mentor}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            {{-- <a href="#" class="btn btn-lg btn-primary">Tambah Kelompok</a> --}}
                                            <button type="submit" class="btn btn-lg btn-primary">Tambah Kelompok</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        </form>                        
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
                @stop