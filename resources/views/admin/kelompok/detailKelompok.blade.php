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
                                        <li class="breadcrumb-item"><a href="/admin/kelompok">Kelompok</a></li>
                                        <li class="breadcrumb-item">Detail</li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Detail Kelompok {{$data_kelompok->nama_kelompok}} : </h3>                                            
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">                                                       
                                                        <li class="nk-block-tools-opt"><a href="/admin/kelompok/tambah/{{$data_kelompok->id_kelompok}}" class="btn btn-primary"><em class="icon ni ni-user-add"></em><span>Tambah Mentee</span></a></li>
                                                        <li class="nk-block-tools-opt"><a href="/admin/kelompok" class="btn btn-outline-secondary" ><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a></li>
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
                                                            <h6 class="title"><span class="name">Mentor : {{$data_kelompok->mentor->nama_mentor}}</span> <span class="badge badge-dim badge-success badge-pill">Mentor</span></h6>
                                                            <div class="meta">
                                                                <span class="version">
                                                                    <span class="text-soft">Email: </span> <span>{{$data_kelompok->mentor->email_mentor}}</span>
                                                                </span>
                                                                <span class="release">
                                                                    <span class="text-soft">No.Telp: </span> <span>{{$data_kelompok->mentor->notelp_mentor}}</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <a href="/admin/detailMentor/{{$data_kelompok->mentor->slug}}" class="btn btn-info">Detail</a>
                                                    </div>
                                                </div><!-- .sp-pdl-item -->
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                </div><br>               
                                        <div class="card card-preview">                                            
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">Detail Kelompok {{$data_kelompok->nama_kelompok}}</h5>
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
                                                            <th class="nk-tb-col"><span class="sub-text">NIM</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Nama</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Kelas</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Jurusan</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Prodi</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Angkatan</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_mentee as $mentee)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$mentee->nim_mentee}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$mentee->nama_mentee}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$mentee->kelas->kelas}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$mentee->kelas->prodi->jurusan->nama_jurusan}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$mentee->kelas->prodi->nama_prodi}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$mentee->angkatan->angkatan}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <a href="/admin/kelompok/delM/{{$mentee->id_mentee}}" class="btn btn-round btn-sm btn-danger"><span>Delete</span></a>
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
    
    <!-- Added  Mentee -->
 
    
    <!-- Import Excel Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="importModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Import Data Mentee</h5>
                    <ul class="nk-nav nav nav-tabs">
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/admin/eddImpMentee" class="form-validate is-alter" method="POST">
                            {{ csrf_field() }}
                            <div class="row gy-4">                              
                                <div class="col-md-12">
                                    <div class="upload-zone small bg-lighter my-2">
                                        <div class="dz-message">
                                            <span class="dz-message-text">Drag and drop file</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">File Extensi Harus berupa excel (csx dan xs),<br> Jika Belum ada dowload <a href="#">format excel</a></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Upload</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    
@stop