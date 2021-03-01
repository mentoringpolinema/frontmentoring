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
                                        <li class="breadcrumb-item active">kegiatan</li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Data kegiatan </h3>
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
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                        <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                        <li><a href="#"><span>Last 1 Years</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalKegiatan"><em class="icon ni ni-user-add"></em><span>Tambah kegiatan</span></a></li>
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
                                                    <p>Data Serangkaian Kegiatan Mentoring Keagamaan Politeknik Negeri Malang Tahun <?php echo date("Y");?>.</p>
                                                </div>
                                                <br>
                                                <div class="row g-gs">
                                                    <div class="col-xxl-3 col-md-6">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Kegiatan</div>
                                                                            <div class="count">{{$totalKegiatan}}</div>
                                                                        </div>
                                                                        <em class="icon bg-primary-dim ni ni-users"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-md-6">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Kelompok</div>
                                                                            <div class="count">20</div>
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
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col"><span class="sub-text">Kegiatan</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Jenis Kegiatan</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Tanggal Kegiatan</span></th>
                                                            {{-- <th class="nk-tb-col tb-col-mb"><span class="sub-text">Jam</span></th> --}}
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Minggu Ke-</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Detail</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_kegiatan as $kegiatan)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$kegiatan->nama_kegiatan}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$kegiatan->jenis_kegiatan}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$kegiatan->tanggal_kegiatan}}</span>
                                                            </td>
                                                            {{-- <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$kegiatan->jam_kegiatan}}</span>
                                                            </td> --}}
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$kegiatan->minggu_kegiatan}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$kegiatan->detail_kegiatan}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                {{-- <a href="/admin/{{$kegiatan->id_kegiatan}}/delKegiatan"><em class="icon ni ni-trash-alt lg"></em></a> --}}
                                                                <a href="/admin/{{$kegiatan->id_kegiatan}}/delKegiatan" class="btn btn-round btn-icon btn-sm btn-daaanger" data-toggle="tooltip" data-placement="right" title="Hapus Kegiatan"><em class="icon ni ni-trash-alt"></em></a>
                                                                <a href="#" class="btn btn-round btn-icon btn-sm btn-saecondary" data-toggle="tooltip" data-placement="right" title="Detail Kegiatan"><em class="icon ni ni-eye-fill"></em></a>
                                                                <a href="#" class="btn btn-round btn-icon btn-sm btn-waraning" data-toggle="modal" data-target="#profile-edit"><em class="icon ni ni-edit"></em></a>
                                                                {{-- <a href="#" class="btn btn-round btn-sm btn-secondary" ><span>Detail</span></a> --}}
                                                                {{-- <a href="/admin/{{$kegiatan->id_kegiatan}}/kegiatan" class="btn btn-round btn-sm btn-primary" data-toggle="modal" data-target="#profile-edit"><span>Edit</span> </a> --}}
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

 <!--  Tambah Kegiatan Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalKegiatan">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Tambah Kegiatan</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#pertemuan">Pertemuan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#materi">Materi</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="pertemuan">
                            <form action="/admin/kegiatan/addKegiatan" class="form-validate is-alter" method="POST">
                            {{ csrf_field() }}
                            <div class="row gy-4">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="form-label" for="kegiatan-name">Nama Kegiatan</label>
                                        <input type="text" class="form-control form-control" id="nama_kegiatan" name="nama_kegiatan" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label" for="jenis-name">Jenis Kegiatan</label>
                                         <select class="form-select" id="jenis_kegiatan" name="jenis_kegiatan" required>
                                            {{-- @foreach ($data_prodi as $prodi) --}}
                                            <option>- Jenis Kegiatan -</option>
                                            <option value="Pertemuan">Pertemuan</option>
                                            <option value="Materi">Materi</option>
                                            <option value="Opening Mentoring">Opening Mentoring</option>
                                            <option value="Closing Mentoring">Closing Mentoring</option>
                                            {{-- @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="form-label" for="kegiatan-date">Tanggal Kegiatan</label>
                                        <div class="form-control-wrap">
                                            {{-- <div class="form-icon form-icon-right">
                                                <em class="icon ni ni-calendar-alt"></em>
                                            </div> --}}
                                            <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" required>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label" for="kegiatan-date">Jam Kegiatan</label>
                                        <div class="form-control-wrap">
                                            <div class="form-icon form-icon-right">
                                                <em class="icon ni ni-clock"></em>
                                            </div>
                                            <input type="text" class="form-control time-picker" id="jam_kegiatan" name="jam_kegiatan" required>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label" for="kegiatan-minggu">Minggu Ke-</label>
                                        <input type="text" class="form-control form-control" id="minggu_kegiatan" name="minggu_kegiatan" required>
                                        <small>Contoh : 1</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {{-- <div class="form-group">
                                        <label class="form-label" for="phone-no">Detail Kegiatan</label>
                                        <textarea type="text" class="form-control form-control-lg" id="detail_kegiatan" name="detail_kegiatan" placeholder="Pertemuan dst..." required></textarea>
                                    </div> --}}
                                    <textarea id="detail_kegiatan" name="detail_kegiatan">
                                        
                                    </textarea>
                                </div>                                
                                
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Tambah</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="materi">
                            <form action="/admin/addProdi" class="form-validate is-alter" method="POST">
                            {{ csrf_field() }}
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Nama Prodi</label>
                                        <input type="text" class="form-control form-control-lg" id="nama_prodi" name="nama_prodi" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">Singkatan Prodi</label>
                                        <input type="text" class="form-control form-control-lg" id="singkatan_prodi" name="singkatan_prodi" value="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Tambah Prodi</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </form>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
        
@stop