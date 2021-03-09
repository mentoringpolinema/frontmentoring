@extends('layouts.master')
@section('content')
 <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block">
                                    <div class="card">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h4 class="nk-block-title">Detail pertemuan</h4>
                                                        </div>
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                        <div class="nk-block-head-content">
                                                        <a href="/admin/pertemuan" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                                        <a href="/admin/pertemuan" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    </div>
                                                    </div>                                                    
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="nk-data data-list">
                                                        <div class="data-head">
                                                            <h6 class="overline-title">Detail {{$data_pertemuan->nama_pertemuan}} </h6>
                                                        </div>
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Pertemuan </span>
                                                                <span class="data-value">{{$data_pertemuan->nama_pertemuan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->                                                        
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Nama Mentor</span>
                                                                <span class="data-value">{{$data_pertemuan->mentor_pertemuan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more "><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Minggu Ke-</span>
                                                                <span class="data-value text-soft">{{$data_pertemuan->minggu_pertemuan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->                                                        
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Tanggal</span>
                                                                <span class="data-value">{{$data_pertemuan->tanggal_pertemuan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Link</span>
                                                                <span class="data-value">{{$data_pertemuan->link_pertemuan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Detail</span>
                                                                <span class="data-value">{{$data_pertemuan->detail_pertemuan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Status</span>
                                                                <span class="data-value">{{$data_pertemuan->status_pertemuan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                    </div><!-- data-list -->
                                                </div><!-- .nk-block -->
                                            </div>
                                        </div><!-- .card-aside-wrap -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>

<!-- Modal Update pertemuan -->
<div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
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
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Mentor</label>
                                        <select class="form-select" id="mentor_pertemuan" name="mentor_pertemuan" data-ui="lg" required>
                                            <option value="#">-Pilih Mentor-</option>
                                            <option value="Ust Yahya">Ust Yahya</option>
                                            <option value="Ust Rijal">Ust Rijal</option>
                                        </select>
                                     </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Minggu Ke-</label>
                                        <select class="form-select" id="minggu_pertemuan" name="minggu_pertemuan" data-ui="lg" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="4">4</option>
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
                                        <select class="form-select" id="sesi_pertemuan" name="sesi_pertemuan" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
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
                                            <option value="Selesai">Selesai</option>
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
