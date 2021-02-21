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
                                        <li class="breadcrumb-item active">Users</li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Data Users </h3>
                                            <div class="nk-block-des text-soft">
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#userModal"><em class="icon ni ni-user-add"></em><span>Tambah Panitia</span></a></li>
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
                                                    <p>Data Users Kegiatan Mentoring Keagamaan Politeknik Negeri Malang Tahun <?php echo date("Y");?>.</p>
                                                </div>
                                                <br>
                                                <div class="row g-gs">
                                                    <div class="col-xxl-3 col-md-6">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Panitia</div>
                                                                            <div class="count">40</div>
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
                                                                            <div class="title">Total Super Admin</div>
                                                                            <div class="count">2</div>
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
                                        <!-- Table Panitia -->
                                        <div class="card card-preview">                                            
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">Data Panitia</h5>
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
                                                            <th class="nk-tb-col"><span class="sub-text">Nama</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Username</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></th>
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
                                                                        <span class="tb-lead">A. Yahya Hudan Permana <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">yahyahudan19</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>yahyahudan19@gmail.com</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span class="dot bg-success d-mb-none"></span>
                                                            <span class="badge badge-sm badge-dot has-bg badge-success d-none d-mb-inline-flex">Active</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <a href="#" class="btn btn-round btn-sm btn-danger"><span>Delete</span></a>
                                                                <a href="#" class="btn btn-round btn-sm btn-primary" data-toggle="modal" data-target="#profile-edit"><span>Edit</span> </a>
                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->                                                       
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Rijalus Sholihin <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">Rijalbangsat</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>rijalbangsat@gmail.com</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span class="dot bg-danger d-mb-none"></span>
                                                            <span class="badge badge-sm badge-dot has-bg badge-danger d-none d-mb-inline-flex">Pending</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <a href="#" class="btn btn-round btn-sm btn-danger"><span>Delete</span></a>
                                                                <a href="#" class="btn btn-round btn-sm btn-primary" data-toggle="modal" data-target="#profile-edit"><span>Edit</span> </a>
                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->                                                    
                                                        {{-- @endforeach --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->

                                        <!-- Table Super Admin -->
                                        <div class="card card-preview">                                            
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">Data Super Admin</h5>
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
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Username</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></th>
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
                                                                        <span class="tb-lead">A. Yahya Hudan Permana <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">yahyahudan19</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>yahyahudan19@gmail.com</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span class="dot bg-success d-mb-none"></span>
                                                            <span class="badge badge-sm badge-dot has-bg badge-success d-none d-mb-inline-flex">Active</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <a href="#" class="btn btn-round btn-sm btn-danger"><span>Delete</span></a>
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
    
    <!-- Added Mentor Mentee -->
    <div class="modal fade" tabindex="-1" role="dialog" id="userModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Tambah Users</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="data">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Nama</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" value="A. Yahya Hudan Permana" placeholder="Enter Full name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">NIM</label>
                                        <input type="text" class="form-control form-control-lg" id="display-name" value="1831710190" placeholder="Enter display name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Jurusan</label>
                                        <select class="form-select" id="Jurusan" data-ui="lg">
                                            <option>Teknologi Informasi</option>
                                            <option>Teknik Elektro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Prodi</label>
                                        <select class="form-select" id="Prodi" data-ui="lg">
                                            <option>D3 Manajemen Informatika</option>
                                            <option>D4 Teknik Informatika</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Kelas</label>
                                        <select class="form-select" id="kelas" data-ui="lg">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                            <option>E</option>
                                            <option>F</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Kelompok</label>
                                        <select class="form-select" id="kelompok" data-ui="lg">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-lg btn-primary">Tambah Mentee</a>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        {{-- <div class="tab-pane" id="kelompok">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Kelompok</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l1" value="2337 Kildeer Drive">
                                    </div>
                                </div>                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-county">Country</label>
                                        <select class="form-select" id="address-county" data-ui="lg">
                                            <option>Canada</option>
                                            <option>United State</option>
                                            <option>United Kindom</option>
                                            <option>Australia</option>
                                            <option>India</option>
                                            <option>Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-lg btn-primary">Update Address</a>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane --> --}}
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <!-- Profile Edit Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Data Mentor</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/admin/edtMentor" class="form-validate is-alter" method="POST">
                            {{ csrf_field() }}
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Nama</label>
                                        <input type="text" class="form-control form-control-lg" id="nama_mentor" name="nama_mentor" value="Abu Bin Ishtiyak" placeholder="Enter Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">No Telp</label>
                                        <input type="text" class="form-control form-control-lg" id="email_mentor" name="email_mentor" value="Ishtiyak" placeholder="Enter Email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Alamat</label>
                                        <textarea type="text" class="form-control form-control-lg" id="notelp_mentor" name="notelp_mentor" value="+880" placeholder="Alamat"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            {{-- <a href="#" class="btn btn-lg btn-primary">Update</a> --}}
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

    
@stop