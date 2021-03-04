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
                                        <li class="breadcrumb-item active">Profile</li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Profile Mentee</h3>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Nama Lengkap</label>
                                                                <span class="form-note">Pastikan Nama Lengkap Sesuai dengan Kartu Tanda Mahasiswa</span>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-user"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="default-03" value="{{auth()->user()->username}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Email</label>
                                                                <span class="form-note">Email digunakan untuk reset Password, Pastikan Email masih aktif</span>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-left">
                                                                        <em class="icon ni ni-emails"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="default-03" disabled value="{{auth()->user()->email}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Jurusan</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="default-03" disabled value="Teknologi Informasi">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Prodi</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="default-03" disabled value="D3 Manajemen">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Angkatan</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="default-03" disabled value="2020">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
@stop