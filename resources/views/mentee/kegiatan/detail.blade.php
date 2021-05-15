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
                                        <li class="breadcrumb-item"><a href="/mentee/kegiatan">Kegiatan</a></li>
                                        <li class="breadcrumb-item active">Detail</li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">                                            
                                            <h4 class="nk-block-title page-title">{{$data_kegiatan->nama_kegiatan}}</h4>
                                            {{-- <span>Pertemuan Rutin Mentoring antara Mente dengan Mentor, <br>yang dilaksanakan seraca Online Melaui Media Zoom Meeting</span>                                             --}}
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-between">
                                             <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt"><a href="/mentee/kegiatan" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                               <div class="nk-block nk-block-lg">                                        
                                    <div class="card card-preview">
                                            <table class="table table-orders">
                                                <thead class="tb-odr-head">
                                                    <tr class="tb-odr-item">
                                                        <th class="tb-odr-info">
                                                            <span class="tb-odr-id">Nama Kegiatan</span>
                                                            {{-- <span class="tb-odr-date d-none d-md-inline-block">Status</span> --}}
                                                        </th>
                                                        <th class="tb-odr-amount">
                                                            {{-- <span class="tb-odr-total">link_pertemuan</span> --}}
                                                            <span class="tb-odr-status d-none d-md-inline-block">Status</span>
                                                        </th>
                                                        <th class="tb-odr-action">&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="tb-odr-body">
                                                    <tr class="tb-odr-item">
                                                        <td class="tb-odr-info">
                                                            <span class="tb-odr-id">{{$data_kegiatan->nama_kegiatan}}</span>
                                                        </td>
                                                        <td class="tb-odr-amount">                                                            
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
                                                        @if ($data_absensi == null)                                                 
                                                        <td class="tb-odr-action">
                                                            <div class="tb-odr-btns d-none d-md-inline">
                                                                <form action="/mentee/kegiatan/absen" method="POST">
                                                                    @csrf
                                                                    @if ($data_kegiatan->status_kegiatan == "Close")
                                                                    <button type="submit" class="btn btn-sm btn-warning" disabled><span>Absen</span></button>
                                                                    @else
                                                                    <button type="submit" class="btn btn-sm btn-warning"><span>Absen</span></button>
                                                                    @endif
                                                                    <input type="hidden" name="kegiatan_id" id="kegiatan_id" value="{{$data_kegiatan->id_kegiatan}}">
                                                                </form>                                                        
                                                            </div>                                                            
                                                        </td>
                                                         @endif
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- .card -->                                        
                                    </div><!-- .card-preview -->                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     @stop