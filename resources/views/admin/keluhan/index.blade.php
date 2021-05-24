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
                                        <li class="breadcrumb-item active">Keluhan</li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Data Keluhan</h3>
                                            <div class="nk-block-des text-soft">
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">                                                
                                                        {{-- <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalKegiatan"><em class="icon ni ni-user-add"></em><span>Tambah Kelompok</span></a></li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">                                            
                                        <div class="card card-preview">                                            
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        {{-- <h5 class="title">Data Keluhan</h5> --}}
                                                    </div>
                                                    {{-- <div class="card-tools mr-n1">
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
                                                    </div><!-- .card-search --> --}}
                                                </div><!-- .card-title-group -->
                                                {{-- <br> --}}
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col"><span class="sub-text">Nama Mentee</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Jurusan</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Keterangan</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Tanggal</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_keluhan as $keluhan)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$keluhan->mentee->nama_mentee}}<span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$keluhan->mentee->kelas->prodi->jurusan->nama_jurusan}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                @if ($keluhan->keterangan_keluhan == 'Mentoring')                                                        
                                                                <div class="nk-ibx-context-badges"><span class="badge badge-primary">{{$keluhan->keterangan_keluhan}}</span></div>
                                                                @endif
                                                                @if ($keluhan->keterangan_keluhan == 'Sertifikat')
                                                                <div class="nk-ibx-context-badges"><span class="badge badge-success">{{$keluhan->keterangan_keluhan}}</span></div>
                                                                @endif
                                                                @if ($keluhan->keterangan_keluhan == 'Pengganti')
                                                                <div class="nk-ibx-context-badges"><span class="badge badge-warning">{{$keluhan->keterangan_keluhan}}</span></div>
                                                                @endif
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$keluhan->created_at->format('d M Y')}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                 @if ($keluhan->status_keluhan == "Pending")
                                                                    <span class="badge badge-dim badge-danger"><em class="icon ni ni-clock"></em><span>Belum dijawab</span></span>
                                                                @else
                                                                    <span class="badge badge-dim badge-success"><em class="icon ni ni-check"></em><span>Sudah dijawab</span></span>
                                                                @endif
                                                                {{-- <span>{{$keluhan->status_keluhan}}</span> --}}
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">                                                                
                                                                    <a href="/admin/keluhan/{{$keluhan->id_keluhan}}"><button class="btn btn-sm btn-primary">Detail</button></a>
                                                                    <a href="/admin/keluhan/{{$keluhan->id_keluhan}}/hapus"><button class="btn btn-sm btn-danger">Hapus</button></a>
                                                                {{-- @endif --}}
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
@section('content1')
                <div class="nk-content p-0">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-ibx">
                                <div class="nk-ibx-aside" data-content="inbox-aside" data-toggle-overlay="true" data-toggle-screen="lg">
                                    <div class="nk-ibx-head">
                                        <h5 class="mb-0">Keluhan</h5>
                                        {{-- <a href="#" class="link link-primary" data-toggle="modal" data-target="#compose-mail"><em class="icon ni ni-plus"></em> <span>Compose</span></a> --}}
                                    </div>
                                    <div class="nk-ibx-nav" data-simplebar>
                                        <ul class="nk-ibx-menu">
                                            <li class="">
                                                <a class="nk-ibx-menu-item" href="#">
                                                    <em class="icon ni ni-inbox"></em>
                                                    <span class="nk-ibx-menu-text">Keluhan</span>
                                                    <span class="badge badge-pill badge-primary">2</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a class="nk-ibx-menu-item" href="#">
                                                    <em class="icon ni ni-edit"></em>
                                                    <span class="nk-ibx-menu-text">Laporan</span>
                                                    <span class="badge badge-pill badge-light">1</span>
                                                </a>
                                            </li>                                            
                                        </ul>
                                    </div>
                                </div><!-- .nk-ibx-aside -->
                                <div class="nk-ibx-body bg-white">
                                    <div class="nk-ibx-head">
                                        <div class="nk-ibx-head-actions">
                                            <div class="nk-ibx-head-check">
                                                <div class="custom-control custom-control-sm custom-checkbox">
                                                    {{-- <h5 class="mb-0">Keluhan</h5>                                                     --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <ul class="nk-ibx-head-tools g-1">
                                                <li><a href="#" class="btn btn-trigger btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a></li>
                                                <li class="mr-n1 d-lg-none"><a href="#" class="btn btn-trigger btn-icon toggle" data-target="inbox-aside"><em class="icon ni ni-menu-alt-r"></em></a></li>
                                            </ul>
                                        </div>
                                        <div class="search-wrap" data-search="search">
                                            <div class="search-content">
                                                <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by keluhan">
                                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                            </div>
                                        </div><!-- .search-wrap -->
                                    </div><!-- .nk-ibx-head -->
                                    <div class="nk-ibx-list">
                                        @foreach ($data_keluhan as $keluhan)
                                            <div class="nk-ibx-item">
                                            <a href="/admin/keluhan/{{$keluhan->id_keluhan}}" class="nk-ibx-link"></a>
                                            <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>NM</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <div class="lead-text">{{$keluhan->mentee->nama_mentee}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                <div class="nk-ibx-context-group">
                                                    @if ($keluhan->keterangan_keluhan == 'Mentoring')                                                        
                                                    <div class="nk-ibx-context-badges"><span class="badge badge-primary">{{$keluhan->keterangan_keluhan}}</span></div>
                                                    @endif
                                                    @if ($keluhan->keterangan_keluhan == 'Sertifikat')
                                                    <div class="nk-ibx-context-badges"><span class="badge badge-success">{{$keluhan->keterangan_keluhan}}</span></div>
                                                    @endif
                                                    @if ($keluhan->keterangan_keluhan == 'Pengganti')
                                                    @endif
                                                    @if ($keluhan->jawab_keluhan == null)
                                                        <div class="nk-ibx-context-badges"><span class="badge badge-danger">belum dijawab</span></div>
                                                    @else
                                                        <div class="nk-ibx-context-badges"><span class="badge badge-success">terjawab</span></div>
                                                    @endif
                                                    <div class="nk-ibx-context">
                                                        <span class="nk-ibx-context-text">
                                                            <span class="heading">{{$keluhan->isi_keluhan}}</span>
                                                    </div>
                                                </div>
                                            </div>                                            
                                            <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                <div class="ibx-actions">
                                                    <ul class="ibx-actions-visible gx-2">
                                                        <li>
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a class="dropdown-item" href="/admin/keluhan/{{$keluhan->id_keluhan}}"><em class="icon ni ni-eye"></em><span>Lihat Pesan</span></a></li>
                                                                        <li><a class="dropdown-item" href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-ibx-item -->
                                        @endforeach
                                    </div><!-- .nk-ibx-list -->                                    
                                </div><!-- .nk-ibx-body -->
                            </div><!-- .nk-ibx -->
                        </div>
                    </div>
                </div>
                
@stop