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
                                        <li class="breadcrumb-item active">Mentor</li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Data Mentor </h3>
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
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalForm"><em class="icon ni ni-user-add"></em><span>Tambah Mentor</span></a></li>
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-success" data-toggle="modal" data-target="#importModal"><em class="icon ni ni-microsoft"></em><span>Import Excel</span></a></li>
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-warning" ><em class="icon ni ni-file-pdf"></em><span>Export PDF</span></a></li>
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
                                                    <p>Data Mentor Kegiatan Mentoring Keagamaan Politeknik Negeri Malang Tahun <?php echo date("Y");?>.</p>
                                                </div>
                                                <br>
                                                <div class="row g-gs">
                                                    <div class="col-xxl-3 col-md-6">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Mentor</div>
                                                                            <div class="count">{{$totalMentor}}</div>
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
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col"><span class="sub-text">Nama</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Alamat</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">No.telp</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Kelompok</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_mentor as $mentor)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$mentor->nama_mentor}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                        <span>{{$mentor->email_mentor}}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                                <span class="tb-amount">{{$mentor->alamat_mentor}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$mentor->notelp_mentor}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span class="tb-status text-success">{{$mentor->status_mentor}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span class="tb-status text-danger">2</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <form action="/admin/mentor/{{$mentor->id_mentor}}" method="post" style="display: inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-round btn-sm btn-danger" type="submit" class="fa fa-trash">Delete</button>
                                                                </form>
                                                                {{-- <a href="/admin/{{$mentor->id_mentor}}/delMentor" class="btn btn-round btn-sm btn-danger"><span>Delete</span></a> --}}
                                                                <a href="/admin/mentor/{{$mentor->id_mentor}}" class="btn btn-round btn-sm btn-secondary" ><span>Detail</span></a>
                                                                <a href="/admin/mentor/{{$mentor->id_mentor}}" class="btn btn-round btn-sm btn-primary" data-toggle="modal" data-target="#profile-edit"><span>Edit</span></a>
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
                
    <!-- Sweet Alert-->
    @include('sweetalert::alert')

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
                            <form action="/admin/mentor/" class="form-validate is-alter" method="POST">
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

    <!-- Mentor Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalForm">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Tambah Mentor</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/admin/mentor/addMentor" class="form-validate is-alter" method="POST">
                            {{ csrf_field() }}
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Nama</label>
                                        <input type="text" class="form-control form-control-lg" id="nama_mentor" name="nama_mentor" placeholder="Enter Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">No.Telp</label>
                                        <input type="text" class="form-control form-control-lg" id="notelp_mentor" name="notelp_mentor" placeholder="Enter No. telp" required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="email_mentor" name="email_mentor" placeholder="Enter Email" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Status</label>
                                        <select class="form-control form-control-lg" id="status_mentor" name="status_mentor" required>
                                            <option value="">-Pilih Status-</option>
                                            <option value="aktif">Aktif</option>
                                            <option value="tidak aktif">Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Alamat</label>
                                        <textarea type="text" class="form-control form-control-lg" id="alamat_mentor" name="alamat_mentor"  placeholder="Enter Alamat" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            {{-- <a href="#" class="btn btn-lg btn-primary">Update</a> --}}
                                            <button type="submit" class="btn btn-lg btn-primary">Tambah Mentor</button>
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

    <!-- Import Excel Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="importModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Import Data Mentor</h5>
                    <ul class="nk-nav nav nav-tabs">
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/admin/impMentor" class="form-validate is-alter" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row gy-4">                              
                                <div class="col-md-12">
                                    {{-- <label class="form-label" for="default-06">Default File Upload</label> --}}
                                        <div class="form-control-wrap">
                                           <div class="custom-file">
                                                <input type="file" multiple class="custom-file-input" id="data_mentor" name="data_mentor">
                                                    <label class="custom-file-label" for="data_mentor">Choose file</label>
                                            </div>
                                        </div>
                                        {{-- <div class="upload-zone small bg-lighter my-2">
                                            <div class="dz-message">
                                                 <span class="dz-message-text">Drag and drop file</span>
                                            </div>
                                        </div> --}}
                                </div>
                                {{-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">File Extensi Harus berupa excel (csx dan xs),<br> Jika Belum ada dowload <a href="#">format excel</a></label>
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary" value="Import">Upload</button>
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