@extends('layouts.masterblank')
@section('content')
<div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="/homepage" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{asset('template/dashboard/images/logoMentoring.png')}}" srcset="{{asset('template/dashboard/images/logoMentoring.png')}}" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{asset('template/dashboard/images/logoMentoring.png')}}" srcset="{{asset('template/dashboard/images/logoMentoring.png')}}" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title"><center>Cek Mentoring <?php echo date("Y");?></center> </h4>
                                        <div class="nk-block-des">
                                            <p><center>Masukkan NIM untuk mengecek Status Mentoring Anda .</center></p>
                                        </div>
                                    </div>
                                </div>
                                <form class="form-validate">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" id="default-01" placeholder="contoh : 1831710190">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#modalAlert2" reqired>Cek</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Alert 2 -->
                <div class="modal fade" tabindex="-1" id="modalAlert2">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body modal-body-lg text-center">
                                <div class="nk-modal">
                                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                                    <h4 class="nk-modal-title">Mentoring anda Masih Kurang!</h4>
                                    <div class="nk-modal-text">
                                        <p class="lead">Sertifikat Mentoring Anda belum bisa diambil, Lengkapi aja dulu kekurangannya :).</p>
                                        <p class="text-soft">Yo ganti en lah, ga tau mentoring ae ngaku" udah penuh sat!.</p>
                                        <p class="text-soft">-Rijal 2021.</p>
                                    </div>
                                    <div class="nk-modal-action mt-5">
                                        <a href="#" class="btn btn-lg btn-mw btn-light" data-dismiss="modal">Kembali</a>
                                    </div>
                                </div>
                            </div><!-- .modal-body -->
                        </div>
                    </div>
                </div>
@stop