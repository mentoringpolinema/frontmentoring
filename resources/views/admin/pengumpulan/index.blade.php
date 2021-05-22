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
                                        <li class="breadcrumb-item active">Pengumpulan Tugas</li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Draft Pengumpulan Tugas </h3>
                                            <div class="nk-block-des text-soft">
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        {{-- <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-user-add"></em><span>Tambah Mentor</span></a></li>
                                                        {{-- <li class="nk-block-tools-opt"><a href="#" class="btn btn-success" data-toggle="modal" data-target="#importModal"><em class="icon ni ni-microsoft"></em><span>Import Excel</span></a></li> --}}
                                                        {{-- <li class="nk-block-tools-opt"><a href="/admin/expMentor/" class="btn btn-info" ><em class="icon ni ni-file-pdf"></em><span>Export Excel</span></a></li> 
                                                        <li class="preview-btn-item col-sm-6 col-lg-3">
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-warning" data-toggle="dropdown"><em class="icon ni ni-download-cloud"></em><span>Export</span><em class="icon ni ni-chevron-down"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-auto mt-1">
                                                                    <ul class="link-list-plain">
                                                                        <li><a href="/admin/expMentorP/">Export PDF</a></li>
                                                                        <li><a href="/admin/expMentor/">Export Excel</a></li>
                                                                    </ul>
                                                                <div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content --> --}}
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <div class="nk-block-des">
                                                    <p>Draft Pengumpulan Tugas Kegiatan Mentoring Keagamaan Politeknik Negeri Malang Tahun <?php echo date("Y");?>.</p>
                                                </div>
                                                <br>
                                                <div class="row g-gs">
                                                    <div class="col-xxl-3 col-md-6">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Tugas</div>
                                                                            <div class="count">{{$total_tugas}}</div>
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
                                                                            <div class="title">Total Pengumpulan</div>
                                                                            <div class="count">{{$total_pengumpulan}}</div>
                                                                        </div>
                                                                        <em class="icon bg-secondary-dim ni ni-link-group"></em>
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
                                                        <h5 class="title">Cari Draft Pengumpulan Tugas</h5>
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
                                                                        {{-- <div class="badge badge-circle badge-primary">4</div> --}}
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
                                                                                {{-- <div class="col-12">
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
                                                                                </div> --}}
                                                                                {{-- <div class="col-12">
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
                                                                                </div> --}}
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <label class="overline-title overline-title-alt">Minggu Tugas</label>
                                                                                        <select class="form-select form-select-sm">
                                                                                            @foreach ($data_materi as $materi)
                                                                                                <option value="{{$materi->kegiatan->minggu_kegiatan}}">{{$materi->kegiatan->minggu_kegiatan}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                {{-- <div class="col-6">
                                                                                    <div class="form-group">
                                                                                        <label class="overline-title overline-title-alt">Kelompok</label>
                                                                                        <select class="form-select form-select-sm">
                                                                                            <option value="any">1</option>
                                                                                            <option value="paypal">2</option>
                                                                                            <option value="bank">3</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div> --}}
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
                                                            <th class="nk-tb-col"><span class="sub-text">Nama</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Kelas</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Prodi</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Jurusan</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Tugas</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Waktu</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pengumpulan_tugas as $tugas)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$tugas->mentee->nama_mentee}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$tugas->mentee->kelas->kelas}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$tugas->mentee->kelas->prodi->nama_prodi}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$tugas->mentee->kelas->prodi->jurusan->nama_jurusan}}</span>
                                                            </td>                                                
                                                            <td class="nk-tb-col tb-col-md">
                                                            <span>{{$tugas->tugas->nama_tugas}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$tugas->created_at->format('d M Y')}}</span>
                                                            </td>      
                                                            <td class="nk-tb-col tb-col-md">
                                                                 @if ($tugas->status_tugas == 'Diterima')
                                                                <span class="badge badge-dim badge-success"><em class="icon ni ni-check-circle"></em><span>Diterima</span></span>
                                                                @endif
                                                                @if($tugas->status_tugas == 'Ditolak')
                                                                    <span class="badge badge-dim badge-danger"><em class="icon ni ni-cross-circle"></em><span>Ditolak</span></span>
                                                                @endif
                                                                @if($tugas->status_tugas == 'Pending')
                                                                    <span class="badge badge-dim badge-warning"><em class="icon ni ni-clock-fill"></em><span>Pending</span></span>
                                                                @endif
                                                            </td>
                                                            <td class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">                                                                    
                                                                    <li>
                                                                        <div class="drodown">
                                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a href="/admin/pengumpulan/acc/{{$tugas->id_pengumpulan_tugas}}"><em class="icon ni ni-check"></em><span>Diterima</span></a></li>
                                                                                    <li><a href="/admin/pengumpulan/dec/{{$tugas->id_pengumpulan_tugas}}"><em class="icon ni ni-na"></em><span>Ditolak</span></a></li>
                                                                                    {{-- <li><a href="#" data-toggle="modal" data-target="#tolakTugas"><em class="icon ni ni-na"></em><span>Ditolak</span></a></li> --}}
                                                                                    <li class="divider"></li>
                                                                                    <li><a href="/admin/download/{{$tugas->file_tugas}}"><em class="icon ni ni-download-cloud"></em><span>Download</span></a></li>
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
                <!-- Modal Penolakan Tugas  -->
                <div class="modal fade" tabindex="-1" id="tolakTugas">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body modal-body-lg text-center">
                                <div class="nk-modal">
                                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                                    <h4 class="nk-modal-title">Yakin Ditolak ?</h4>
                                    <div class="nk-modal-text">
                                        <p class="lead">Tinggalkan Pesan alasan kenapa Tugas yang ditolak. Terimakasih :)</p>
                                    </div>
                                    <form action="#" class="form-validate is-alter">
                                        <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm" id="cf-default-textarea" placeholder="Write your message"></textarea>
                                                </div>
                                        </div>                                                
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-warning">Kirim</button>
                                        </div>
                                    </form>
                                    {{-- <div class="nk-modal-action mt-5">
                                        <a href="#" class="btn btn-lg btn-mw btn-light" data-dismiss="modal">Return</a>
                                    </div> --}}
                                </div>
                            </div><!-- .modal-body -->
                        </div>
                    </div>
                </div>
@stop