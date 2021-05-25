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
                                        <li class="breadcrumb-item"><a href="/mentee/pertemuan">Pertemuan</a></li>
                                        <li class="breadcrumb-item active">Detail</li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">                                            
                                            <h4 class="nk-block-title page-title">{{$data_pertemuan->nama_pertemuan}}</h4>
                                            {{-- <span>Pertemuan Rutin Mentoring antara Mente dengan Mentor, <br>yang dilaksanakan seraca Online Melaui Media Zoom Meeting</span>                                             --}}
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-between">
                                             <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt"><a href="/mentee/pertemuan" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                               <div class="nk-block nk-block-lg">                                        
                                    {{-- <div class="card card-preview">
                                            <table class="table table-orders">
                                                <thead class="tb-odr-head">
                                                    <tr class="tb-odr-item">
                                                        <th class="tb-odr-info">
                                                            <span class="tb-odr-id">Pertemuan</span>
                                                            <span class="tb-odr-date d-none d-md-inline-block">Mentor</span>
                                                        </th>
                                                        <th class="tb-odr-amount">
                                                            <span class="tb-odr-total">link_pertemuan</span>
                                                            <span class="tb-odr-status d-none d-md-inline-block">Status</span>
                                                        </th>
                                                        <th class="tb-odr-action">&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="tb-odr-body">
                                                    <tr class="tb-odr-item">
                                                        <td class="tb-odr-info">
                                                            <span class="tb-odr-id">{{$data_pertemuan->nama_pertemuan}}</span>
                                                        </td>
                                                        <td class="tb-odr-amount">
                                                            <span class="tb-odr-total">
                                                                <span class="amount"><a href="{{$data_pertemuan->link_pertemuan}}">Zoom Meeting</a></span>
                                                            </span>
                                                            @if ($data_absensi == null)
                                                            <span class="tb-odr-status">
                                                                <span class="badge badge-dot badge-danger">Tidak Absen</span>
                                                            </span>
                                                            @else
                                                            <span class="tb-odr-status">
                                                                <span class="badge badge-dot badge-success">Hadir</span>
                                                            </span>
                                                            @endif 
                                                        </td>
                                                        @if ($data_pertemuan->kegiatan->status_kegiatan == 'Open')                                                 
                                                        <td class="tb-odr-action">
                                                            <div class="tb-odr-btns d-none d-md-inline">
                                                                <form action="/mentee/pertemuan/absenPertemuan" method="POST">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-sm btn-warning"><span>Absen</span></button>
                                                                    <input type="hidden" name="kegiatan_id" id="kegiatan_id" value="{{$data_pertemuan->kegiatan_id}}">
                                                                </form>                                                        
                                                            </div>                                                            
                                                        </td>
                                                         @endif
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- .card -->                                        
                                    </div><!-- .card-preview --> --}}
                                    <div class="card card-preview">
                                            <div class="card-inner">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Link</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="{{$data_pertemuan->link_pertemuan}}">Zoom Meeting</a></td>
                                                            <td>@if ($data_absensi == null)
                                                                <span class="tb-odr-status">
                                                                    <span class="badge badge-dot badge-danger">Tidak Absen</span>
                                                                </span>
                                                                @else
                                                                <span class="tb-odr-status">
                                                                    <span class="badge badge-dot badge-success">Hadir</span>
                                                                </span>
                                                            @endif 
                                                            </td>
                                                             @if ($data_pertemuan->kegiatan->status_kegiatan == 'Open')
                                                                <form action="/mentee/pertemuan/absenPertemuan" method="POST">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-sm btn-warning"><span>Absen</span></button>
                                                                    <input type="hidden" name="kegiatan_id" id="kegiatan_id" value="{{$data_pertemuan->kegiatan_id}}">
                                                                </form>
                                                            @endif
                                                        </tr>
                                                        <tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div><!-- .card-preview -->                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     @stop