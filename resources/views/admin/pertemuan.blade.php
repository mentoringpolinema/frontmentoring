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
                                            <h3 class="nk-block-title page-title">Pertemuan Mentoring </h3>
                                            <div class="nk-block-des text-soft">
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-search"></em><span><span class="d-none d-md-inline">Cari</span></span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Jurusan</span></a></li>
                                                                        <li><a href="#"><span>Prodi</span></a></li>
                                                                        <li><a href="#"><span>Kelas</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#pertemuanModal"><em class="icon ni ni-video"></em><span>Tambah Pertemuan</span></a></li>
                                                        {{-- <li class="nk-block-tools-opt"><a href="#" class="btn btn-success" data-toggle="modal" data-target="#importModal"><em class="icon ni ni-microsoft"></em><span>Import Excel</span></a></li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <div class="nk-block-des">
                                                    <p>Data Pertemuan Kegiatan Mentoring Keagamaan Politeknik Negeri Malang Tahun <?php echo date("Y");?>.</p>
                                                </div>
                                                <br>
                                                <div class="row g-gs">
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Mentee</div>
                                                                            <div class="count">{{$totalMentee}}</div>
                                                                        </div>
                                                                        <em class="icon bg-primary-dim ni ni-users"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Kelompok</div>
                                                                            <div class="count">{{$totalKelompok}}</div>
                                                                        </div>
                                                                        <em class="icon bg-secondary-dim ni ni-link-group"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Pertemuan</div>
                                                                            <div class="count">{{$totalMentee}}</div>
                                                                        </div>
                                                                        <em class="icon bg-success-dim ni ni-video-fill"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">                                            
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">Pertemuan</h5>
                                                    </div>
                                                    <div class="card-tools mr-n1">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li>
                                                                <a href="" class="search-toggle toggle-search btn btn-icon" data-target="search"><em class="icon ni ni-search"></em></a>
                                                            </li><!-- li -->
                                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                                        {{-- <div class="badge badge-circle badge-primary">{{$total}}</div> --}}
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
                                                                            <form action="/admin/cariPertemuan">
                                                                                <div class="row gx-6 gy-4">
                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <label class="overline-title overline-title-alt">Minggu Pertemuan</label>
                                                                                            <select class="form-select form-select-sm" name="minggu_kegiatan">
                                                                                                <option>-Pilih Minggu Pertemuan-</option>
                                                                                                @foreach ($data_kegiatan as $pertemuan)
                                                                                                    <option value="{{$pertemuan->id_kegiatan}}">{{$pertemuan->minggu_kegiatan}}</option>
                                                                                                @endforeach
                                                                                            </select>`
                                                                                        </div>
                                                                                    </div>                                                                                
                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <button type="submit" class="btn btn-secondary">Filter</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div><!-- .filter-wg -->
                                                                </div><!-- .dropdown -->
                                                            </li><!-- li -->
                                                            
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .card-tools -->
                                                    <div class="card-search search-wrap" data-search="search">
                                                        <div class="search-content">
                                                            <form action="/admin/pertemuan" method="GET">
                                                                <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                                <input name="cari" type="text" class="form-control border-transparent form-focus-none" placeholder="Cari Data Pertemuan">
                                                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                            </form>
                                                        </div>
                                                    </div><!-- .card-search -->
                                                </div><!-- .card-title-group -->
                                                <br>
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col"><span class="sub-text">Pertemuan </span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Kelompok</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Mentor</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Minggu Ke-</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Tanggal</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Link</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_pertemuan as $pertemuan)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$pertemuan->nama_pertemuan}}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$pertemuan->mentor->id_mentor}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$pertemuan->mentor->nama_mentor}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$pertemuan->kegiatan->minggu_kegiatan}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$pertemuan->kegiatan->tanggal_kegiatan->format('d M Y')}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span><a href="{{$pertemuan->link_pertemuan}}"><em class="icon ni ni-link"></em> Link</a></span>
                                                            </td>                                                                                                               
                                                            <td class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">                                                                    
                                                                    <li>
                                                                        <div class="drodown">
                                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    {{-- <li><a href="/admin/pertemuan/acc/{{$pertemuan->id_pertemuan}}"><em class="icon ni ni-check"></em><span>Open</span></a></li> --}}
                                                                                    {{-- <li><a href="/admin/pertemuan/dec/{{$pertemuan->id_pertemuan}}"><em class="icon ni ni-na"></em><span>Close</span></a></li> --}}
                                                                                    {{-- <li><a href="#" data-toggle="modal" data-target="#tolakTugas"><em class="icon ni ni-na"></em><span>Ditolak</span></a></li> --}}
                                                                                    <li class="divider"></li>
                                                                                    <li><a href="/admin/detPertemuan/{{$pertemuan->id_pertemuan}}"><em class="icon ni ni-eye"></em><span>Detail</span></a></li>
                                                                                    <li><a href="/admin/delPertemuan/{{$pertemuan->id_pertemuan}}"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
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
<!-- Added Pertemuan Mentee -->
    <div class="modal fade" tabindex="-1" role="dialog" id="pertemuanModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Tambah Pertemuan</h5>
                    <form action="/admin/addPertemuan" class="form-validate is-alter" method="POST">
                    @csrf
                    <div class="tab-content">
                        <div class="tab-pane active" id="data">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="nama_pertemuan">Nama Pertemuan</label>
                                        <input type="text" class="form-control form-control-lg" id="nama_pertemuan" name="nama_pertemuan" placeholder="Enter Nama Pertemuan">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Mentor</label>
                                        <select class="form-select" id="mentor_id" name="mentor_id" data-ui="lg" required>
                                            <option value="#">-Pilih Mentor-</option>
                                            @foreach ($data_mentor as $mentor)                                            
                                            <option value="{{$mentor->id_mentor}}">{{$mentor->nama_mentor}}</option>
                                            @endforeach
                                        </select>
                                     </div>
                                </div> 
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="link_pertemuan">Link Pertemuan</label>
                                        <input type="text" class="form-control form-control-lg" id="link_pertemuan" name="link_pertemuan" placeholder="Enter Link" required>
                                    </div>
                                </div>                                --}}
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tanggal</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right">
                                                     <em class="icon ni ni-calendar-alt"></em>
                                                </div>
                                                 <input type="text" class="form-control date-picker" id="tanggal_pertemuan" name="tanggal_pertemuan" data-date-format="yyyy-mm-dd" required>
                                            </div>
                                     </div>
                                </div>  --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Kegiatan</label>
                                        <select class="form-select" id="kegiatan_id" name="kegiatan_id" required>
                                            <option value="#">-Pilih Kegiatan-</option>
                                            @foreach ($data_kegiatan as $kegiatan)
                                            <option value="{{$kegiatan->id_kegiatan}}">{{$kegiatan->nama_kegiatan}} : Minggu Ke - {{$kegiatan->minggu_kegiatan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="link_pertemuan">Link Pertemuan</label>
                                        <input type="text" class="form-control form-control-lg" id="link_pertemuan" name="link_pertemuan" placeholder="Enter Link" required>
                                    </div>
                                </div>                               
                                <div class="col-md-12">
                                    <label class="form-label" for="link_pertemuan">Detail Pertemuan</label>
                                        <textarea type="textarea" class="form-control form-control-lg" id="detail_pertemuan" name="detail_pertemuan" required></textarea>      
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button class="btn btn-lg btn-primary" type="submit">Tambah Pertemuan</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- .tab-content -->
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
                @stop