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
                                            <h4 class="nk-block-title page-title">Pertemuan</h4>
                                            <span>Pertemuan Rutin Mentoring antara Mente dengan Mentor, <br>yang dilaksanakan seraca Online Melaui Media Zoom Meeting</span>                                            
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-between">
                                             <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-info btn-round eg-swal-infoMateriMentee"><em class="icon ni ni-video-fill"></em><span>Status Pertemuan : Minggu Ke-2</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                               <div class="nk-block">
                                    <div class="row g-gs">
                                        @foreach ($data_pertemuan as $pertemuan)
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="#" class="project-title" data-toggle="modal" data-target="#pertemuanModal">
                                                                <div class="user-avatar sq bg-warning"><span>PM</span></div>
                                                                <div class="project-info">
                                                                    <h6 class="title">{{$pertemuan->nama_pertemuan}}</h6>
                                                                    <span class="sub-text">Minggu Ke : {{$pertemuan->minggu_pertemuan}}</span>
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#" ><em class="icon ni ni-eye"></em><span>Lihat Pertemuan</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <p>{{$pertemuan->detail_pertemuan}}</p>
                                                        </div>
                                                        <div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    <div class="user-avatar sm bg-primary"><span>A</span></div>
                                                                </li>
                                                            </ul>
                                                            {{-- <span class="badge badge-dim badge-warning"><em class="icon ni ni-clock"></em><span>4 Days Left</span></span> --}}
                                                            <span class="badge badge-dim badge-success"><em class="icon ni ni-check-circle" data-toggle="modal" data-target="#pertemuanModal"></em><span>Selesai</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
<!-- Detail Pertemuan  -->
    <div class="modal fade" tabindex="-1" role="dialog" id="pertemuanModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Detail Pertemuan</h5>
                    <form action="#" class="form-validate is-alter" method="POST">
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
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Mentor</label>
                                        <select class="form-select" id="mentor_pertemuan" name="mentor_pertemuan" data-ui="lg" required>                               
                                            <option value="Ust Yahya">Ust Yahya</option>
                                        </select>
                                     </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Minggu Ke-</label>
                                        <select class="form-select" id="minggu_pertemuan" name="minggu_pertemuan" data-ui="lg" required>
                                            <option value="1">1</option>
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
                                                 <input type="text" class="form-control date-picker" id="tanggal_pertemuan" name="tanggal_pertemuan" data-ui="lg" required>
                                            </div>
                                     </div>
                                </div>                  
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Kelompok</label>
                                        <select class="form-select" id="kelompok_pertemuan" name="kelompok_pertemuan" required>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Sesi</label>
                                        <select class="form-select" id="sesi_pertemuan" name="sesi_pertemuan" required>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="form-label" for="link_pertemuan">Link Pertemuan</label>
                                        <input type="text" class="form-control form-control-lg" id="link_pertemuan" name="link_pertemuan" placeholder="Enter Link" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Status</label>
                                        <select class="form-select" id="status_pertemuan" name="status_pertemuan" data-ui="lg" required>
                                            <option value="Aktif">Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="link_pertemuan">Detail Pertemuan</label>
                                        <textarea type="textarea" class="form-control form-control-lg" id="detail_pertemuan" name="detail_pertemuan" required></textarea>      
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
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