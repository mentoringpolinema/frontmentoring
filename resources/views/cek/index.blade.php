@extends('layouts.masterblank')
@section('content')
<div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="/homepage" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{asset('template/dashboard/images/LogoMentoring.png')}}" srcset="{{asset('template/dashboard/images/LogoMentoring.png')}}" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{asset('template/dashboard/images/LogoMentoring.png')}}" srcset="{{asset('template/dashboard/images/LogoMentoring.png')}}" alt="logo-dark">
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
                                @if (session('error'))
                                <div class="example-alert">
                                   <div class="alert alert-danger alert-icon alert-dismissible">
                                         <em class="icon ni ni-cross-circle"></em> <strong>NIM Salah </strong>! silahkan cek kembali. <button class="close" data-dismiss="alert"></button>
                                     </div>
                                </div>
                                @endif
                                
                                <form action="/cekMentoring" class="form-validate" method="GET" >
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" id="cari" name="cari" placeholder="contoh : 1831710190" required>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block loading-data" type="submit">Cek</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@stop
