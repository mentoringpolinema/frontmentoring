@extends('layouts.master')
@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            {{-- <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>back</span></a></div> --}}
                                            <h2 class="nk-block-title fw-normal">Pengganti Mentoring</h2>
                                            <div class="nk-block-des">
                                                <p>Silahkan mengganti Kegiatan yang tidak anda ikuti !</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Pertemuan Mentor</h4>
                                                <div class="nk-block-des">
                                                    {{-- <p>Using the most basic table markup, here’s how <code class="code-class">.table</code> based tables look by default.</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col"><span class="sub-text">Name Pertemuan</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Minggu</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Action</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {{-- @foreach ($data_cetak as $cetak) --}}
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Pertemuan 1</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">Minggu 2</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span class="badge badge-sm badge-dot has-bg badge-danger d-none d-mb-inline-flex">Belum Diganti</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg">
                                                                <a href="/mentee/pengganti/detailPengganti" class="btn btn-round btn-sm btn-warning">Ganti</a>
                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->
                                                        {{-- @endforeach --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Materi dan Tugas</h4>
                                                <div class="nk-block-des">
                                                    {{-- <p>Using the most basic table markup, here’s how <code class="code-class">.table</code> based tables look by default.</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col"><span class="sub-text">Name Materi/Tugas</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Minggu</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Action</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {{-- @foreach ($data_cetak as $cetak) --}}
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Pertemuan 1</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">Minggu 2</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span class="badge badge-sm badge-dot has-bg badge-success d-none d-mb-inline-flex">Sudah Diganti</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg">
                                                                <a href="/mentee/pengganti/detailPengganti" class="btn btn-round btn-sm btn-warning">Ganti</a>
                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->
                                                        {{-- @endforeach --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
@stop