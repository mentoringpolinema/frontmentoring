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
                                            <h3 class="nk-block-title page-title">Keluhan mu</h3>
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
                                            <div class="nk-block-head">
                                                <div class="nk-block-head-content">
                                                <div class="toggle-wrap nk-block-tools-toggle">
                                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                    <div class="toggle-expand-content" data-content="pageMenu">
                                                        <ul class="nk-block-tools g-3">
                                                            <li><a href="/mentee/keluhan/form" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-plus-round-fill"></em><span>Tambah Keluhan</span></a></li>
                                                            <li><a href="/mentee/keluhan/form" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-plus-round-fill"></em></a></li>                                                        
                                                        </ul>
                                                    </div>
                                                </div><!-- .toggle-wrap -->
                                            </div>
                                        </div>
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
                                                <br>
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col"><span class="sub-text">Keluhan</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Keterangan</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Tanggal</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($keluhan as $keluhan)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$keluhan->isi_keluhan}}<span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$keluhan->keterangan_keluhan}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$keluhan->created_at->format('d M Y')}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                 @if ($keluhan->status_keluhan == "Pending")
                                                                    <span class="badge badge-dim badge-warning"><em class="icon ni ni-clock"></em><span>Pending</span></span>
                                                                @else
                                                                    <span class="badge badge-dim badge-success"><em class="icon ni ni-check"></em><span>Sudah dijawab</span></span>
                                                                @endif
                                                                {{-- <span>{{$keluhan->status_keluhan}}</span> --}}
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                @if ($keluhan->status_keluhan == "Pending")
                                                                    <span>Maaf :(</span>
                                                                @else
                                                                    <a href="/mentee/keluhan/detail/{{$keluhan->id_keluhan}}"><button class="btn btn-sm btn-primary">Detail</button></a>
                                                                    <a href="/mentee/keluhan/hapus/{{$keluhan->id_keluhan}}"><button class="btn btn-sm btn-danger">Hapus</button></a>
                                                                @endif
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