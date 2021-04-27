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
                                                            <h4 class="nk-block-title">Detail Mentee</h4>
                                                        </div>
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                        <div class="nk-block-head-content">
                                                            <a href="/admin/mentee" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                                            <a href="/admin/mentee" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                                        </div>
                                                    </div>                                                    
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="nk-data data-list">
                                                        <div class="data-head">
                                                            <h6 class="overline-title">Basics</h6>
                                                        </div>
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Full Name</span>
                                                                <span class="data-value">{{$data_mentee->nama_mentee}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->                                                        
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Email</span>
                                                                <span class="data-value">{{$data_mentee->user->email}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Kelas</span>
                                                                <span class="data-value text-soft">{{$data_mentee->kelas->kelas}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->                                                        
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">Jurusan</span>
                                                                <span class="data-value">{{$data_mentee->kelas->prodi->jurusan->nama_jurusan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Prodi</span>
                                                                <span class="data-value">{{$data_mentee->kelas->prodi->nama_prodi}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Angkatan</span>
                                                                <span class="data-value">{{$data_mentee->angkatan->angkatan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Status</span>
                                                                <span class="data-value">{{$data_mentee->status_mentee}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
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

<!-- Modal Update Mentor -->
<div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="#" class="form-validate is-alter" method="POST">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input type="text" class="form-control form-control-lg" id="nama_mentor" name="nama_mentor" value="" placeholder="Enter Full name">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Email</label>
                                        <input type="text" class="form-control form-control-lg" id="email_mentor" name="email_mentor" disabled value="" >
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">No Telp</label>
                                        <input type="text" class="form-control form-control-lg" id="notelp_mentor" name="notelp_mentor" value="" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Alamat</label>
                                        <input type="text" class="form-control form-control-lg" id="alamat_mentor" name="alamat_mentor" value="" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Update Mentee</button>
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