@extends('layouts.master')
@section('content')               
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="content-page wide-md m-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        {{-- <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Download Materi</span></a></li> --}}
                                                        <li><a href="/mentee/keluhan" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></li>
                                                        <li><a href="/mentee/keluhan" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a></li>                                                        
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                            <div class="nk-block-des">
                                                {{-- <p class="lead">In DashLite, We included 10 clean and minimalist notification email templates that ready to use for your application to send emails. <strong class="text-primary">Stand-Alone html files found in packages</strong>.</p> --}}
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="card">
                                            <div class="card-inner">
                                                {{-- <h4 class="title text-soft mb-4 overline-title">Basis Style - Simple Email Template</h4> --}}
                                                <table class="email-wraper">
                                                    <tr>
                                                        <td class="py-5">
                                                            <table class="email-header">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="invoice-brand text-center">
                                                                             <img src="{{asset('template/dashboard/images/logoMentoring.png')}}" srcset="{{asset('template/dashboard/images/logoMentoring.png 2x')}}" alt="">
                                                                            {{-- <p class="email-title">Keluhan : Mentoring</p> --}}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <table class="email-body">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="p-3 p-sm-5">
                                                                            <p><strong>Assalamualaikum Kak :) {{$data_keluhan->mentee->nama_mentee}}</strong>,</p>
                                                                            <p>{{$data_keluhan->jawab_keluhan}}</p>                                                                            
                                                                            <p class="mt-4">---- <br> Regards<br>Panitia Mentoring </p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <table class="email-footer">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center pt-4">
                                                                            <p class="email-copyright-text">Panitia Mentoring <?php echo date("Y");?></p>
                                                                            <ul class="email-social">
                                                                                <li><a href="#"><img src="./images/socials/facebook.png" alt=""></a></li>
                                                                                <li><a href="#"><img src="./images/socials/twitter.png" alt=""></a></li>
                                                                                <li><a href="#"><img src="./images/socials/youtube.png" alt=""></a></li>
                                                                                <li><a href="#"><img src="./images/socials/medium.png" alt=""></a></li>
                                                                            </ul>
                                                                            {{-- <p class="fs-12px pt-4">This email was sent to you as a registered member of <a href="https://softnio.com">softnio.com</a>. To update your emails preferences <a href="#">click here</a>.</p> --}}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                </div><!-- .content-page -->
                            </div>
                        </div>
                    </div>
                </div>
@stop