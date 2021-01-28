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
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col"><span class="sub-text">Nama</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Alamat</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">No.telp</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Irfak Wahyudi <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                        <span>irfakwahyu@mentoringpolinema.my.id</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                                <span class="tb-amount">Jalan A. Satsui Tubun III No.83 M, RT 12 RW 03 <br><span class="currency">Kota Malang</span></span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>081259224380</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <a href="#" class="btn btn-sm btn-danger"><span>Delete</span> </a>
                                                                <a href="#" class="btn btn-sm btn-secondary"><span>Detail</span></a>
                                                                <a href="#" class="btn btn-sm btn-primary"><span>Edit</span> </a>
                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->                                                        
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Yahya Hudan <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                        <span>yahyahudan@mentoringpolinema.my.id</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                                <span class="tb-amount">Jalan A. Satsui Tubun III No.83 M, RT 12 RW 03 <br><span class="currency">Kota Malang</span></span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>081259224380</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <a href="#" class="btn btn-sm btn-danger"><span>Delete</span> </a>
                                                                <a href="#" class="btn btn-sm btn-secondary"><span>Detail</span></a>
                                                                <a href="#" class="btn btn-sm btn-primary"><span>Edit</span> </a>
                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- Modal Form -->
    <div class="modal fade" tabindex="-1" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Mentor</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-validate is-alter">
                        <div class="form-group">
                            <label class="form-label" for="full-name">Nama</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="full-name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email-address">Email</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="email-address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone-no">Nomer Telp</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="phone-no">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="pay-amount">Alamat</label>
                            <textarea class="form-control form-control-sm" id="cf-default-textarea" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Tambah Mentor</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Tambah Data Mentor <?php echo date("Y");?></span>
                </div>
            </div>
        </div>
    </div>
@stop