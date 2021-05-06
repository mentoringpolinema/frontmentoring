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
                                                <form action="/mentee/profile/update/{{$data_mentee->id_mentee}}" method="POST">
                                                    @csrf
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
                                                                    <input type="text" class="form-control" id="nama_mentee" name="nama_mentee" value="{{$data_mentee->nama_mentee}}">
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
                                                                <label class="form-label" for="default-03">NIM</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="default-03" disabled value="{{$data_mentee->nim_mentee}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Jurusan</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="default-03" disabled value="{{$data_mentee->kelas->prodi->jurusan->nama_jurusan}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Prodi</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="default-03" disabled value="{{$data_mentee->kelas->prodi->nama_prodi}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="default-03">Angkatan</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="default-03" disabled value="{{$data_mentee->angkatan->angkatan}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <ul>
                                                                    <button type="submit" class="btn btn-warning">Update</button>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-preview -->
                                                </div>
                                                </form>
                                            </div>
                                        </div><!-- .card-preview -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
@stop