@extends('layouts.master')
@section('content')
    <div class="nk-content p-0">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-msg">
                                <div class="nk-msg-body bg-white profile-shown">
                                    <div class="nk-msg-head">
                                        <h4 class="title d-none d-lg-block">Keluhan-mu</h4>
                                        <div class="nk-msg-head-meta">
                                            <div class="d-none d-lg-block">
                                                <ul class="nk-msg-tags">
                                                    <li><span class="label-tag"><em class="icon ni ni-flag-fill"></em> <span>Technical Problem</span></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .nk-msg-head -->
                                    <div class="nk-msg-reply nk-reply" data-simplebar>
                                        <div class="nk-reply-item">
                                            <div class="nk-reply-header">
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-red">
                                                        <span>PN</span>
                                                    </div>
                                                    <div class="user-name">Panitia</div>
                                                </div>
                                                {{-- <div class="date-time"><?php echo date("d M Y");?></div> --}}
                                            </div>
                                            <div class="nk-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    <p>{{$keluhan->jawab_keluhan}}</p>                                                    
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-item -->
                                        <div class="nk-reply-item">
                                            <div class="nk-reply-header">
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-blue">
                                                        <span>YH</span>
                                                    </div>
                                                    <div class="user-name">{{auth()->user()->mentee->nama_mentee}}</div>
                                                </div>
                                                {{-- <div class="date-time"><?php echo date("d M Y");?></div> --}}
                                            </div>
                                            @if ($keluhan->isi_keluhan == 'NULL')
                                                 <div class="nk-reply-body">
                                                    <div class="nk-reply-entry entry">
                                                        <p>belum ada keluhan</p>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="nk-reply-body">
                                                    <div class="nk-reply-entry entry">
                                                        <p>{{$keluhan->isi_keluhan}}</p>
                                                    </div>
                                                </div>
                                            @endif
                                            
                                        </div><!-- .nk-reply-item -->                                        
                                        
                                        <div class="nk-reply-form">                                            
                                            <form action="/mentee/keluhan/{{$keluhan->id_keluhan}}/update">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="reply-form">
                                                    <div class="nk-reply-form-editor">
                                                        <div class="nk-reply-form-field">
                                                            <input type="textarea" class="form-control form-control-simple no-resize" id="isi_keluhan" name="isi_keluhan" placeholder="Isi Keluhan" required>
                                                        </div>
                                                        <div class="nk-reply-form-tools">
                                                            <ul class="nk-reply-form-actions g-1">
                                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Kirim</button></li>                                                                
                                                            </ul>                                                            
                                                        </div><!-- .nk-reply-form-tools -->
                                                    </div><!-- .nk-reply-form-editor -->
                                                </div>
                                            </div>
                                            </form>
                                        </div><!-- .nk-reply-form -->
                                    </div><!-- .nk-reply -->
                                </div><!-- .nk-msg-body -->
                            </div><!-- .nk-msg -->
                        </div>
                    </div>
                </div>
@stop