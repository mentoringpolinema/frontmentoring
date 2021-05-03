@extends('layouts.master')
@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>back</span></a></div>
                                            <h2 class="nk-block-title fw-normal">Draft Cetak Bukti Mentee</h2>
                                            <div class="nk-block-des">
                                                <p>Daftar Mentee yang telah mencetak bukti lulus Mentoring</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        {{-- <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Data Table</h4>
                                                <div class="nk-block-des">
                                                    <p>Using the most basic table markup, here’s how <code class="code-class">.table</code> based tables look by default.</p>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col"><span class="sub-text">Nama</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">NIM</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Kode Cetak</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Jurusan</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Tanggal</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_cetak as $cetak)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$cetak->mentee->nama_mentee}}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$cetak->mentee->nim_mentee}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$cetak->kode_cetak}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg">
                                                                <span>{{$cetak->mentee->kelas->prodi->jurusan->nama_jurusan}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg">
                                                                <span>{{$cetak->created_at->format('d M Y')}}</span>
                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->
                                                        @endforeach
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