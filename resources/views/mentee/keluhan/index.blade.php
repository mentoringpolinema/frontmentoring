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
                                        <div class="nk-msg-head py-4 d-lg-none">
                                            <h4 class="title">Unable to select currency when order</h4>
                                            <ul class="nk-msg-tags">
                                                <li><span class="label-tag"><em class="icon ni ni-flag-fill"></em> <span>Technical Problem</span></span></li>
                                            </ul>
                                        </div>
                                        <div class="nk-reply-item">
                                            <div class="nk-reply-header">
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-blue">
                                                        <span>YH</span>
                                                    </div>
                                                    <div class="user-name">Yahya Hudan</div>
                                                </div>
                                                <div class="date-time"><?php echo date("d M Y");?></div>
                                            </div>
                                            <div class="nk-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    <p>Assalamualaikum</p>
                                                    <p>Ini Kok Error ya ?</p>
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-item -->
                                        <div class="nk-reply-meta">
                                            <div class="nk-reply-meta-info"><strong><?php echo date("d M Y");?></strong></div>
                                        </div>
                                        <div class="nk-reply-item">
                                            <div class="nk-reply-header">
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-red">
                                                        <span>PN</span>
                                                    </div>
                                                    <div class="user-name">Panitia</div>
                                                </div>
                                                <div class="date-time"><?php echo date("d M Y");?></div>
                                            </div>
                                            <div class="nk-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    <p>Waalaikumsalam</p>
                                                    <p>Masih dalam perbaikan kak :)</p>
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-item -->
                                        <div class="nk-reply-form">
                                            <div class="nk-reply-form-header">
                                                <ul class="nav nav-tabs-s2 nav-tabs nav-tabs-sm">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#reply-form">Reply</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#note-form">Private Note</a>
                                                    </li>
                                                </ul>                                                
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="reply-form">
                                                    <div class="nk-reply-form-editor">
                                                        <div class="nk-reply-form-field">
                                                            <textarea class="form-control form-control-simple no-resize" placeholder="Hello"></textarea>
                                                        </div>
                                                        <div class="nk-reply-form-tools">
                                                            <ul class="nk-reply-form-actions g-1">
                                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Reply</button></li>                                                                
                                                            </ul>                                                            
                                                        </div><!-- .nk-reply-form-tools -->
                                                    </div><!-- .nk-reply-form-editor -->
                                                </div>
                                                <div class="tab-pane" id="note-form">
                                                    <div class="nk-reply-form-editor">
                                                        <div class="nk-reply-form-field">
                                                            <textarea class="form-control form-control-simple no-resize" placeholder="Type your private note, that only visible to internal team."></textarea>
                                                        </div>
                                                        <div class="nk-reply-form-tools">
                                                            <ul class="nk-reply-form-actions g-1">
                                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Add Note</button></li>
                                                                <li>
                                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#"><em class="icon ni ni-clip-v"></em></a>
                                                                </li>
                                                            </ul>
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle btn-trigger btn btn-icon mr-n2" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Another Option</span></a></li>
                                                                        <li><a href="#"><span>More Option</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-reply-form-tools -->
                                                    </div><!-- .nk-reply-form-editor -->
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-form -->
                                    </div><!-- .nk-reply -->
                                </div><!-- .nk-msg-body -->
                            </div><!-- .nk-msg -->
                        </div>
                    </div>
                </div>
@stop