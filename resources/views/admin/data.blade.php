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
                                        <li class="breadcrumb-item active">Data </li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Data Management </h3>
                                            <div class="nk-block-des text-soft">
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#dataModal"><em class="icon ni ni-user-add"></em><span>Tambah Data</span></a></li>
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
                                                    <p>Data Kegiatan Mentoring Keagamaan Politeknik Negeri Malang Tahun <?php echo date("Y");?>.</p>
                                                </div>
                                                <br>
                                                <div class="row g-gs">
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Jurusan</div>
                                                                            <div class="count">{{$totalJurusan}}</div>
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
                                                                            <div class="title">Total Prodi</div>
                                                                            <div class="count">{{$totalProdi}}</div>
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
                                                                            <div class="count">{{$totalKelas}}</div>
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
                                        <!-- Alert -->
                                        @if ((session('sukses')))
                                        <div class="alert alert-success alert-icon alert-dismissible">
                                            <div>
                                                <em class="icon ni ni-check-circle"></em> {{session('sukses')}} <button class="close" data-dismiss="alert"></button>
                                            </div>
                                        </div>
                                        @endif
                                        <!-- Table Jurusan -->
                                        <div class="card card-preview">                                            
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">Data Jurusan</h5>
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
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Cari Data Panitia">
                                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                        </div>
                                                    </div><!-- .card-search -->
                                                </div><!-- .card-title-group -->
                                                <br>
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col"><span class="sub-text">Nama Jurusan</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Singkatan</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_jurusan as $jurusan)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$jurusan->nama_jurusan}}<span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$jurusan->singkatan_jurusan}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <a href="/admin/{{$jurusan->id_jurusan}}/delJurusan" class="btn btn-round btn-sm btn-danger"><span>Delete</span></a>
                                                                <a href="#" class="btn btn-round btn-sm btn-primary" data-toggle="modal" data-target="#modalEditJurusan" id="editJurusan" data-id="{{$jurusan->id_jurusan}}"><span>Edit</span> </a>
                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->                                                    
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Table Prodi -->
                                        <div class="card card-preview">                                            
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">Data Prodi</h5>
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
                                                            <th class="nk-tb-col"><span class="sub-text">Nama Prodi</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Singkatan</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Jurusan</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_prodi as $prodi)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$prodi->nama_prodi}}<span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$prodi->singkatan_prodi}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$prodi->jurusan->nama_jurusan}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <a href="/admin/{{$prodi->id_prodi}}/delProdi" class="btn btn-round btn-sm btn-danger"><span>Delete</span></a>
                                                                <a href="#" class="btn btn-round btn-sm btn-primary" data-toggle="modal" data-target="#modalEditProdi" id="editProdi" data-id="{{$prodi->id_prodi}}"><span>Edit</span> </a>
                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Table Kelas -->
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">Data Kelas</h5>
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
                                                            <th class="nk-tb-col"><span class="sub-text">Kelas</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Prodi</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Jurusan</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_kelas as $kelas)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{ $kelas->kelas }}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{ $kelas->prodi->nama_prodi }}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{ $kelas->prodi->jurusan->nama_jurusan }}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <a href="/admin/{{$kelas->id_kelas}}/delKelas" class="btn btn-round btn-sm btn-danger"><span>Delete</span></a>
                                                                <a href="#" class="btn btn-round btn-sm btn-primary" data-toggle="modal" data-target="#modalEditKelas" id="editKelas" data-id="{{$kelas->id_kelas}}"><span>Edit</span> </a>
                                                            </td>
                                                        </tr><!-- .nk-tb-item -->                                                    
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
    
    <!-- Added Mentor Mentee -->
    <div class="modal fade" tabindex="-1" role="dialog" id="dataModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Tambah Data</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#jurusan">Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#prodi">Prodi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kelas">Kelas</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="jurusan">
                            <form action="/admin/addJurusan" class="form-validate is-alter" method="POST">
                            {{-- {{ csrf_field() }} --}}
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Nama Jurusan</label>
                                        <input type="text" class="form-control form-control-lg" id="nama_jurusan" name="nama_jurusan" placeholder="Enter Jurusan">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Singkatan Jurusan</label>
                                        <input type="text" class="form-control form-control-lg" id="singkatan_jurusan" name="singkatan_jurusan"  placeholder="Enter Singkatan">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Tambah Jurusan</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </form>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="prodi">
                            <form action="/admin/addProdi" class="form-validate is-alter" method="POST">
                            {{-- {{ csrf_field() }} --}}
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="jurusan_id">Jurusan</label>
                                        <select class="form-select" id="jurusan_id" name="jurusan_id" data-ui="lg">
                                            <option>- Pilih Jurusan -</option>
                                            @foreach ($data_jurusan as $jurusan)
                                            <option value="{{$jurusan->id_jurusan}}">{{$jurusan->nama_jurusan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="nama_prodi">Nama Prodi</label>
                                        <input type="text" class="form-control form-control-lg" id="nama_prodi" name="nama_prodi" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="singkatan_prodi">Singkatan Prodi</label>
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
                        <div class="tab-pane" id="kelas">
                            <form action="/admin/addKelas" class="form-validate is-alter" method="POST">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="kelas">Kelas</label>
                                            <input type="text" name="kelas" class="form-control form-control-lg" id="kelas" value="">
                                        </div>
                                    </div>                             
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="prodi_id">Prodi</label>
                                            <select class="form-select" id="prodi_id" name="prodi_id" data-ui="lg">
                                                <option>- Pilih Prodi -</option>
                                                @foreach ($data_prodi as $prodi)
                                                <option value="{{ $prodi->id_prodi }}">{{$prodi->nama_prodi}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" class="btn btn-lg btn-primary">Tambah Kelas</button>
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

    <!--  Edit Jurusan Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalEditJurusan">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Jurusan</h5>
                    {{-- <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Kegiatan</a>
                        </li>
                    </ul><!-- .nav-tabs --> --}}
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/admin/data/jurusan" class="form-validate is-alter" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row gy-4">
                                <input type="hidden" class="form-control form-control" id="id_jurusan" name="id_jurusan_edit" value="" required>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="materi-name">Nama Jurusan</label>
                                        <input type="text" class="form-control form-control" id="nama_jurusan" name="nama_jurusan_edit" required>
                                    </div>
                                </div>
                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="materi-link">Singkatan Jurusan</label><br/>
                                        <input type="text" class="form-control form-control" id="singkatan_jurusan" name="singkatan_jurusan_edit" required>
                                    </div>
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
                        </div>
                    </form>
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <!--  Edit Prodi Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalEditProdi">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Prodi</h5>
                    {{-- <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Kegiatan</a>
                        </li>
                    </ul><!-- .nav-tabs --> --}}
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/admin/data/prodi" class="form-validate is-alter" method="POST">
                            {{-- {{ csrf_field() }} --}}
                            @csrf
                            @method('PUT')
                            <div class="row gy-4">
                                <input type="hidden" class="form-control form-control" id="id_prodi" name="id_prodi_edit" value="" required>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="nama-jurusan">Jurusan</label>
                                        <select class="form-select" id="nama_jurusan" name="nama_jurusan_edit" required>
                                            <option>- Pilih Jurusan -</option>
                                            @foreach ($data_jurusan as $jurusan)
                                                <option value="{{$jurusan->id_jurusan}}">{{$jurusan->nama_jurusan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="nama-prodi">Nama Prodi</label>
                                        <input type="text" class="form-control form-control" id="nama_prodi" name="nama_prodi_edit" required>
                                    </div>
                                </div>
                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="singkatan-prodi">Singkatan Prodi</label><br/>
                                        <input type="text" class="form-control form-control" id="singkatan_prodi" name="singkatan_prodi_edit" required>
                                    </div>
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
                        </div>
                    </form>
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <!--  Edit Kelas Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalEditKelas">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Kelas</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/admin/data/kelas" class="form-validate is-alter" method="POST">
                            {{-- {{ csrf_field() }} --}}
                            @csrf
                            @method('PUT')
                            <div class="row gy-4">
                                <input type="hidden" class="form-control form-control" id="id_kelas" name="id_kelas_edit" value="" required>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="materi-link">Kelas</label><br/>
                                        <input type="text" class="form-control form-control" id="kelas" name="kelas_edit" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="nama-prodi">Prodi</label>
                                        <select class="form-select" id="nama_prodi" name="nama_prodi_edit" required>
                                            <option>- Pilih Prodi -</option>
                                            @foreach ($data_prodi as $prodi)
                                                <option value="{{$prodi->id_prodi}}">{{$prodi->nama_prodi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
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
                        </div>
                    </form>
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    @section('jsAdd')
        <script>
        $('body').on('click', '#editJurusan', function (event) {
                event.preventDefault();
                var token = $("input[name='_token']").val();
                var id = $(this).data('id');
                console.log(id)
                $.ajax({
                    url: "<?php echo route('getJurusanByID') ?>",
                    method: 'POST',
                    data: {id_jurusan:id, _token:token},
                    success: function(data) {
                        $("input[name='id_jurusan_edit']").val(data.options.id_jurusan);
                        $("input[name='nama_jurusan_edit']").val(data.options.nama_jurusan);
                        $("input[name='singkatan_jurusan_edit']").val(data.options.singkatan_jurusan);
                    }
                });
        });
        $('body').on('click', '#editProdi', function (event) {
                event.preventDefault();
                var token = $("input[name='_token']").val();
                var id = $(this).data('id');
                $.ajax({
                    url: "<?php echo route('getProdiByID') ?>",
                    method: 'POST',
                    data: {id_prodi:id, _token:token},
                    success: function(data) {
                        console.log(data)
                        $("input[name='id_prodi_edit']").val(data.prodi.id_prodi);
                        $("select[name='nama_jurusan_edit']").val(data.jurusan.id_jurusan).change();
                        $("input[name='nama_prodi_edit']").val(data.prodi.nama_prodi);
                        $("input[name='singkatan_prodi_edit']").val(data.prodi.singkatan_prodi);
                    }
                });
        });
        $('body').on('click', '#editKelas', function (event) {
                event.preventDefault();
                var token = $("input[name='_token']").val();
                var id = $(this).data('id');
                // console.log(id)
                $.ajax({
                    url: "<?php echo route('getKelasByID') ?>",
                    method: 'POST',
                    data: {id_kelas:id, _token:token},
                    success: function(data) {
                        $("input[name='id_kelas_edit']").val(data.kelas.id_kelas);
                        $("input[name='kelas_edit']").val(data.kelas.kelas);
                        $("select[name='nama_prodi_edit']").val(data.prodi.id_prodi).change();
                    }
                });
        });
        </script>
    @endsection
@stop