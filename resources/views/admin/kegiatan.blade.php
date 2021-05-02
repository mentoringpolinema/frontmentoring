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
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalAddKegiatan"><em class="icon ni ni-user-add"></em><span>Tambah kegiatan</span></a></li>
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
                                                                <?php
                                                                    $date = Date('d/M/Y', strtotime($kegiatan->tanggal_kegiatan));   
                                                                    
                                                                ?>
                                                                <span class="tb-amount">{{$date}}</span>
                                                            </td>
                                                            {{-- <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$kegiatan->jam_kegiatan}}</span>
                                                            </td> --}}
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$kegiatan->minggu_kegiatan}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{!!$kegiatan->detail_kegiatan!!}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                {{-- <a href="/admin/{{$kegiatan->id_kegiatan}}/delKegiatan"><em class="icon ni ni-trash-alt lg"></em></a> --}}
                                                                <a href="/admin/{{$kegiatan->id_kegiatan}}/delKegiatan" class="btn btn-round btn-icon btn-sm btn-daaanger" data-toggle="tooltip" data-placement="right" title="Hapus Kegiatan"><em class="icon ni ni-trash-alt"></em></a>
                                                                <a href="#" class="btn btn-round btn-icon btn-sm btn-saecondary" data-toggle="modal" data-target="#modalDetailKegiatan" id="detailKegiatan" data-id="{{ $kegiatan->id_kegiatan }}"><em class="icon ni ni-eye-fill"></em></a>
                                                                <a href="/admin/{{$kegiatan->id_kegiatan}}/editKegiatan" class="btn btn-round btn-icon btn-sm btn-waraning" data-toggle="modal" data-target="#modalEditKegiatan" id="editKegiatan" data-id="{{ $kegiatan->id_kegiatan }}"><em class="icon ni ni-edit"></em></a>
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
    <div class="modal fade" tabindex="-1" role="dialog" id="modalAddKegiatan">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Tambah Kegiatan</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="pertemuan">
                            <form action="/admin/kegiatan/addKegiatan" class="form-validate is-alter" method="POST">
                            {{ csrf_field() }}
                            @csrf
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
                                         <select class="form-control" id="jenis_kegiatan" name="jenis_kegiatan" required>
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
                            {{-- {{ csrf_field() }} --}}
                            @csrf
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
    </div>
    <!-- .modal -->

    {{-- Fitur edit kegiatan --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="modalEditKegiatan">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Kegiatan</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/admin/kegiatan" class="form-validate is-alter" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row gy-4">
                                <input type="hidden" class="form-control form-control" id="id_kegiatan" name="id_kegiatan_edit" value="" required>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="form-label" for="kegiatan-name">Nama Kegiatan</label>
                                        <input type="text" class="form-control form-control" id="nama_kegiatan" name="nama_kegiatan_edit" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label" for="jenis-name">Jenis Kegiatan</label>
                                        <select class="form-control" id="jenis_kegiatan" name="jenis_kegiatan_edit" required>
                                            {{-- @foreach ($data_prodi as $prodi) --}}
                                            <option>- Jenis Kegiatan -</option>
                                            <option value="Pertemuan">Pertemuan</option>
                                            <option value="Materi">Materi</option>
                                            <option value="Opening Mentoring">Opening Mentoring</option>
                                            <option value="Closing Mentoring">Closing Mentoring</option>
                                            {{-- @endforeach --}}
                                            {{-- @foreach ($data_kegiatan as $kegiatan)
                                                <option>{{$kegiatan->minggu_kegiatan}}</option>
                                                @endforeach --}}
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
                                            <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan_edit" value="" required>
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
                                        <input type="text" class="form-control form-control" id="minggu_kegiatan" name="minggu_kegiatan_edit" value="" required>
                                        <small>Contoh : 1</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {{-- <div class="form-group">
                                        <label class="form-label" for="phone-no">Detail Kegiatan</label>
                                        <textarea type="text" class="form-control form-control-lg" id="detail_kegiatan" name="detail_kegiatan" placeholder="Pertemuan dst..." required></textarea>
                                    </div> --}}
                                    <textarea name="detail_kegiatan_edit" id="detail_kegiatan_edit" required>
                                        
                                    </textarea>
                                </div>                                
                                
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Update</button>
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
                            {{-- {{ csrf_field() }} --}}
                            @csrf
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
    </div>
    <!-- .modal -->

    {{-- Fitur detail kegiatan --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="modalDetailKegiatan">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Detail Kegiatan</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="" class="form-validate is-alter" method="">
                            @csrf
                            <div class="row gy-4">
                                <input type="hidden" class="form-control form-control" id="id_kegiatan" name="id_kegiatan_detail" value="" readonly>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="form-label" for="kegiatan-name">Nama Kegiatan</label>
                                        <input type="text" class="form-control form-control" id="nama_kegiatan" name="nama_kegiatan_detail" value="" readonly>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label" for="jenis-name">Jenis Kegiatan</label>
                                        <input type="text" class="form-control" id="jenis_kegiatan" name="jenis_kegiatan_detail" value="" readonly>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="form-label" for="kegiatan-date">Tanggal Kegiatan</label>
                                        <div class="form-control-wrap">
                                            {{-- <div class="form-icon form-icon-right">
                                                <em class="icon ni ni-calendar-alt"></em>
                                            </div> --}}
                                            <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan_detail" readonly>
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
                                        <input type="text" class="form-control form-control" id="minggu_kegiatan" name="minggu_kegiatan_detail" value="" readonly>
                                        <small>Contoh : 1</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {{-- <div class="form-group">
                                        <label class="form-label" for="phone-no">Detail Kegiatan</label>
                                        <textarea type="text" class="form-control form-control-lg" id="detail_kegiatan" name="detail_kegiatan" placeholder="Pertemuan dst..." required></textarea>
                                    </div> --}}
                                    <label class="form-label" for="detail_kegiatan">Detail Kegiatan</label>
                                    <textarea name="detail_kegiatan_detail" id="detail_kegiatan_detail" readonly>
                                        
                                    </textarea>
                                </div>                                
                                
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        {{-- <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                        </li> --}}
                                        <li>
                                            <a href="#" data-dismiss="modal" class="btn btn-lg btn-primary">Kembali</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="materi">
                            <form action="/admin/addProdi" class="form-validate is-alter" method="POST">
                            {{-- {{ csrf_field() }} --}}
                            @csrf
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
    </div>
    <!-- .modal -->

    {{-- <!--  Edit Kegiatan Modal @e -->
    @foreach ($data_kegiatan as $kegiatan)
        @include('admin/modalEditKegiatan', ['modalKegiatan' => 'editKegiatan' . $kegiatan->id_kegiatan, 'namaKegiatan' => $kegiatan->nama_kegiatan,'jenisKegiatan' => $kegiatan->jenis_kegiatan, 
                    'tglKegiatan' => $kegiatan->tanggal_kegiatan , 'mingguKegiatan' => $kegiatan->minggu_kegiatan
                    , 'detailKegiatan' => $kegiatan->detail_kegiatan])
    @endforeach --}}
    @section('jsAdd')
        <script>
        $('body').on('click', '#editKegiatan', function (event) {
                event.preventDefault();
                var token = $("input[name='_token']").val();
                var id = $(this).data('id');
                console.log(id)
                $.ajax({
                    url: "<?php echo route('getKegiatanByID') ?>",
                    method: 'POST',
                    data: {id_kegiatan:id, _token:token},
                    success: function(data) {
                        var d = new Date(data.options.tanggal_kegiatan);
                        const dateDB =d.getFullYear()+"-"+ ("0" + (d.getMonth() + 1)).slice(-2) +"-"+ ("0" + d.getDate()).slice(-2);
                        $("input[name='id_kegiatan_edit']").val(data.options.id_kegiatan);
                        $("input[name='nama_kegiatan_edit']").val(data.options.nama_kegiatan);
                        $("select[name='jenis_kegiatan_edit']").val(data.options.jenis_kegiatan);
                        $("input[name='tanggal_kegiatan_edit']").val(dateDB);
                        $("input[name='minggu_kegiatan_edit']").val(data.options.minggu_kegiatan);
                        $("textarea[name='detail_kegiatan_edit']").val(data.options.detail_kegiatan);
                        // initGetDataKegiatan();
                        $("textarea[name='detail_kegiatan_edit']").ckeditor();
                    }
                });
        });
        
        
        $('body').on('click', '#detailKegiatan', function (event) {
                event.preventDefault();
                var token = $("input[name='_token']").val();
                var id = $(this).data('id');
                console.log("Testt");
                // console.log(data)
                $.ajax({
                    url: "<?php echo route('getKegiatanByID') ?>",
                    method: 'POST',
                    data: {id_kegiatan:id, _token:token},
                    success: function(data) {
                        var d = new Date(data.options.tanggal_kegiatan);
                        const dateDB =d.getFullYear()+"-"+ ("0" + (d.getMonth() + 1)).slice(-2) +"-"+ ("0" + d.getDate()).slice(-2);
                        $("input[name='id_kegiatan_detail']").val(data.options.id_kegiatan);
                        $("input[name='nama_kegiatan_detail']").val(data.options.nama_kegiatan);
                        $("input[name='jenis_kegiatan_detail']").val(data.options.jenis_kegiatan);
                        $("input[name='minggu_kegiatan_detail']").val(data.options.minggu_kegiatan);
                        $("input[name='tanggal_kegiatan_detail']").val(dateDB);
                        $("textarea[name='detail_kegiatan_detail']").val(data.options.detail_kegiatan);
                        // initGetDataKegiatan();
                        $("textarea[name='detail_kegiatan_detail']").ckeditor();
                        // $("input[name='tanggal_kegiatan_detail']").datepicker({ dateFormat: 'dd-mm-yy' }).val(data.options.tanggal_kegiatan);
                        console.log(data);
                        // console.log(new Date(data.options.tanggal_kegiatan))

                        // let dateString = data.options.tanggal_kegiatan
                        // let dateParts = dateString.split("/")

                        // let dateObjects = new Date(+dateParts[2], dateParts[1] - 1, +dateParts[0])
                        // console.log(dateObjects.toString())
                        // $("input[name='tanggal_kegiatan_detail']").val(dateObjects.toString());
                        // dd($data);
                        // var_dump(data);
                        
                    }
                });
        });
       
        </script>

    @endsection
@stop