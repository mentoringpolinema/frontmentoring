@extends('layouts.masterblank')
@section('content')
<div class="nk-content ">
    <br><br>
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="/homepage" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{asset('template/dashboard/images/logoMentoring.png')}}" srcset="{{asset('template/dashboard/images/logoMentoring.png')}}" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{asset('template/dashboard/images/logoMentoring.png')}}" srcset="{{asset('template/dashboard/images/logoMentoring.png')}}" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                @forelse ($data_mentee as $mentee)
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title"><center>Silahkan : {{$mentee->nim_mentee}}</center> </h4>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <button type="button " class="btn btn-lg btn-warning btn-block" data-toggle="modal" data-target="#cekMentoringResult" required>Cek</button>
                                </div>
                                @empty
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title"><center>Mon Maap,<br> NIM nya salah bang :(</center> </h4>
                                        <div class="nk-block-des">
                                            <p><center>cek dulu laah bang :" .</center></p>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <a href="/cekMentoring"><button class="btn btn-lg btn-danger btn-block"><em class="icon ni ni-chevron-left-round-fill"></em><span>Kembali</span></button></a>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Alert 2 -->
                <div class="modal fade" tabindex="-1" id="cekMentoringResult">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body modal-body-lg text-center">
                                @forelse ($data_mentee as $mentee)
                                @if ($mentee->status_mentee == 'Tidak Lulus')
                                    <div class="nk-modal">
                                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                                    <h4 class="nk-modal-title">Mentoring anda Masih Kurang!</h4>
                                    <div class="nk-modal-text">
                                        <p class="lead">Sertifikat Mentoring Anda belum bisa diambil, Lengkapi aja dulu kekurangannya :).</p>
                                        <p class="text-soft">Maaf ya - Admin 2021.</p>
                                    </div>
                                    <div class="nk-modal-action mt-5">
                                        <a href="/cekMentoring" class="btn btn-lg btn-mw btn-light">Kembali</a>
                                    </div>
                                </div>
                                @endif
                                @if ($mentee->status_mentee == 'Lulus')
                                    <div class="nk-modal">
                                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                                    <h4 class="nk-modal-title">Yeay ! <br>Selamat Mentoring Anda Lulus</h4>
                                    <div class="nk-modal-text">
                                        <p class="lead">Sertifikat Mentoring Anda bisa diambil :).</p>
                                        <p class="text-soft">Yuk Segera Login, dan cetak bukti Lulus ya .</p>
                                        <p class="text-soft">-Admin 2021.</p>
                                    </div>
                                    <div class="nk-modal-action mt-5">
                                        <a href="/login" class="btn btn-lg btn-mw btn-light">Login</a>
                                    </div>
                                </div>
                                @endif
                                @empty
                                @endforelse
                            </div><!-- .modal-body -->
                        </div>
                    </div>
                </div>
@stop