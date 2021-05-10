@extends('layouts.master')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <nav>
                        <ul class="breadcrumb breadcrumb-arrow">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item"><a href="/admin/absensi">Absensi</a></li>
                            <li class="breadcrumb-item">Detail</li>
                        </ul>
                    </nav>
                    <br>
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Detail {{$data_pertemuan->nama_pertemuan}} : </h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li class="nk-block-tools-opt"><a href="/admin/absensi" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></li>
                                        {{-- <li class="nk-block-tools-opt"><a href="#" class="btn btn-success" data-toggle="modal" data-target="#importModal"><em class="icon ni ni-microsoft"></em><span>Import Excel</span></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block nk-block-lg">
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xxl-6">
                                <div class="nk-download">
                                    <div class="data">
                                        <div class="thumb"><img src="{{asset('template/dashboard/images/icons/profile.svg')}}" alt=""></div>
                                        <div class="info">
                                            <h6 class="title"><span class="name">Mentor : {{$data_pertemuan->mentor->nama_mentor}}</span> <span class="badge badge-dim badge-success badge-pill">Mentor</span></h6>
                                            <div class="meta">
                                                <span class="version">
                                                    <span class="text-soft">Email: {{$data_pertemuan->mentor->email_mentor}}</span> <span></span>
                                                </span>
                                                <span class="release">
                                                    <span class="text-soft">No.Telp: {{$data_pertemuan->mentor->notelp_mentor}}</span> <span></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        {{-- <a href="/admin/detailMentor/{{$data_kelompok->mentor->slug}}" class="btn btn-info">Detail</a> --}}
                                    </div>
                                </div><!-- .sp-pdl-item -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><br>
                    <div class="card card-preview">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h5 class="title">Data Absensi </h5>
                                </div>
                                <div class="card-tools mr-n1">
                                    <ul class="btn-toolbar gx-1">
                                        <li>
                                            <a href="#" class="search-toggle toggle-search btn btn-icon" data-target="search"><em class="icon ni ni-search"></em></a>
                                        </li><!-- li -->
                                    </ul><!-- .btn-toolbar -->
                                </div><!-- .card-tools -->
                                <div class="card-search search-wrap" data-search="search">
                                    <div class="search-content">
                                        <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                        <input type="text" class="form-control border-transparent form-focus-none" placeholder="Cari Data Mentee">
                                        <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                    </div>
                                </div><!-- .card-search -->
                            </div><!-- .card-title-group -->
                            <br>
                            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                <thead>
                                    <tr class="nk-tb-item nk-tb-head">
                                        <th class="nk-tb-col"><span class="sub-text">Nama</span></th>
                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">NIM</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Kelompok</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Tanggal</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($absen as $absen)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-info">
                                                    <span class="tb-lead">{{$absen->mentee->nama_mentee}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="nk-tb-col tb-col-mb">
                                            <span class="tb-amount">{{$absen->mentee->nama_mentee}}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            <span>{{$absen->mentee->kelompok->nama_kelompok}}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            <span>{{$absen->created_at->format('d M Y')}}</span>
                                        </td>
                                    </tr><!-- .nk-tb-item  -->
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div><!-- .card-preview -->
                </div>
            </div>
        </div>
    </div>
</div>
@stop