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
                                                                            <div class="title">Total Pertemuan</div>
                                                                            <div class="count">3,795</div>
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
                                                                            <div class="title">Minggu Ke-</div>
                                                                            <div class="count">20</div>
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
                                                                            <div class="title">Total Kelas</div>
                                                                            <div class="count">120</div>
                                                                        </div>
                                                                        <em class="icon bg-success-dim ni ni-link-group"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Alert -->
                                        @if ((session('sukses')))
                                        <div class="alert alert-success alert-icon alert-dismissible">
                                            <div>
                                                <em class="icon ni ni-check-circle"></em> {{session('sukses')}} <button class="close" data-dismiss="alert"></button>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="card card-preview">                                            
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">Pertemuan</h5>
                                                    </div>
                                                    <div class="card-tools mr-n1">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li>
                                                                <a href="#" class="search-toggle toggle-search btn btn-icon" data-target="search"><em class="icon ni ni-search"></em></a>
                                                            </li><!-- li -->
                                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                                        <div class="badge badge-circle badge-primary">4</div>
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
                                                                                        <label class="overline-title overline-title-alt">Prodi</label>
                                                                                        <select class="form-select form-select-sm">
                                                                                            <option value="any">D3 Manajemen Informatika</option>
                                                                                            <option value="pending">D4 Teknik Informatika</option>
                                                                                            <option value="cancel">D4 Akutansi Manajemen</option>
                                                                                            <option value="process">D3 Akutansi</option>
                                                                                            <option value="completed">D4 Keuangan</option>
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
                                                            </li><!-- li -->
                                                            <li>
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
                                                            <th class="nk-tb-col"><span class="sub-text">Pertemuan </span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Mentor</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Minggu Ke-</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Tanggal</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Detail</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Link</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {{-- @foreach ($data_mentor as $mentor) --}}
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Pertemuan 1 : Makhorijul Huruf</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">Ust. Yahya Hudan</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>2</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>21 Maret 2021</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>Pertemuan dilaksanakan secara online menggunakan platform Zoom Meeting</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span><a href="http://youtube.com/rohispolinema">link Zoom</a></span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span class="dot bg-warning d-mb-none"></span>
                                                            <span class="badge badge-sm badge-dot has-bg badge-warning d-none d-mb-inline-flex">On Going</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <a href="#" class="btn btn-round btn-sm btn-danger"><span>Delete</span></a>
                                                                <a href="#" class="btn btn-round btn-sm btn-secondary" ><span>Detail</span></a>
                                                                <a href="#" class="btn btn-round btn-sm btn-primary" data-toggle="modal" data-target="#profile-edit"><span>Edit</span> </a>
                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->                                                 
                                                        {{-- @endforeach --}}
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
                    <div class="tab-content">
                        <div class="tab-pane active" id="data">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="nama_pertemuan">Nama Pertemuan</label>
                                        <input type="text" class="form-control form-control-lg" id="nama_pertemuan" name="nama_pertemuan" placeholder="Enter Nama Pertemuan">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Mentor</label>
                                        <select class="form-select" id="mentor_pertemuan" name="mentor_pertemuan" data-ui="lg" required>
                                            <option value="#">-Pilih Mentor-</option>
                                            <option value="#">Ust Yahya</option>
                                            <option value="#">Ust Rijal</option>
                                        </select>
                                     </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Minggu Ke-</label>
                                        <select class="form-select" id="minggu_pertemuan" name="minggu_pertemuan" data-ui="lg" required>
                                            <option value="#">1</option>
                                            <option value="#">2</option>
                                            <option value="#">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Tanggal</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right">
                                                     <em class="icon ni ni-calendar-alt"></em>
                                                </div>
                                                 <input type="text" class="form-control date-picker" data-ui="lg" required>
                                            </div>
                                     </div>
                                </div>                  
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Kelompok</label>
                                        <select class="form-select" id="kelompok_pertemuan" name="kelompok_pertemuan">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Sesi</label>
                                        <select class="form-select" id="sesi_pertemuan" name="sesi_pertemuan">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="link_pertemuan">Link Pertemuan</label>
                                        <input type="text" class="form-control form-control-lg" id="link_pertemuan" name="link_pertemuan" placeholder="Enter Link">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="link_pertemuan">Detail Pertemuan</label>
                                        <div class="card-inner">
                                            <div class="summernote-basic"></div>
                                         </div>
                                </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-lg btn-primary">Tambah Pertemuan</a>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
                @stop