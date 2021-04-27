@extends('layouts.master')
@section('content')
                <div class="nk-content p-0">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-ibx">
                                <div class="nk-ibx-aside" data-content="inbox-aside" data-toggle-overlay="true" data-toggle-screen="lg">
                                    <div class="nk-ibx-head">
                                        <h5 class="mb-0">Keluhan</h5>
                                        {{-- <a href="#" class="link link-primary" data-toggle="modal" data-target="#compose-mail"><em class="icon ni ni-plus"></em> <span>Compose</span></a> --}}
                                    </div>
                                    <div class="nk-ibx-nav" data-simplebar>
                                        <ul class="nk-ibx-menu">
                                            <li class="active">
                                                <a class="nk-ibx-menu-item" href="#">
                                                    <em class="icon ni ni-inbox"></em>
                                                    <span class="nk-ibx-menu-text">Keluhan</span>
                                                    <span class="badge badge-pill badge-primary">2</span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a class="nk-ibx-menu-item" href="#">
                                                    <em class="icon ni ni-edit"></em>
                                                    <span class="nk-ibx-menu-text">Laporan</span>
                                                    <span class="badge badge-pill badge-light">1</span>
                                                </a>
                                            </li>                                            
                                        </ul>
                                    </div>
                                </div><!-- .nk-ibx-aside -->
                                <div class="nk-ibx-body bg-white">
                                    <div class="nk-ibx-head">
                                        <div class="nk-ibx-head-actions">
                                            <div class="nk-ibx-head-check">
                                                <div class="custom-control custom-control-sm custom-checkbox">
                                                    {{-- <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionAll">
                                                    <label class="custom-control-label" for="conversionAll"></label> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <ul class="nk-ibx-head-tools g-1">
                                                <li><a href="#" class="btn btn-trigger btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a></li>
                                                <li class="mr-n1 d-lg-none"><a href="#" class="btn btn-trigger btn-icon toggle" data-target="inbox-aside"><em class="icon ni ni-menu-alt-r"></em></a></li>
                                            </ul>
                                        </div>
                                        <div class="search-wrap" data-search="search">
                                            <div class="search-content">
                                                <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by keluhan">
                                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                            </div>
                                        </div><!-- .search-wrap -->
                                    </div><!-- .nk-ibx-head -->
                                    <div class="nk-ibx-list" data-simplebar>
                                        <div class="nk-ibx-item">
                                            <a href="#" class="nk-ibx-link"></a>
                                            <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>NM</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <div class="lead-text">Yahya Hudan</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                <div class="nk-ibx-context-group">
                                                    <div class="nk-ibx-context-badges"><span class="badge badge-primary">Keluhan</span></div>
                                                    <div class="nk-ibx-context">
                                                        <span class="nk-ibx-context-text">
                                                            <span class="heading">Ini Mas , link tugasnya kok error ya ? Terimakasih</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                <div class="sub-text">10:00 AM</div>
                                            </div>
                                            <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                <div class="ibx-actions">
                                                    <ul class="ibx-actions-visible gx-2">
                                                        <li>
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a class="dropdown-item" href="#"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                        <li><a class="dropdown-item" href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-ibx-item -->
                                        <div class="nk-ibx-item is-unread">
                                            <a href="#" class="nk-ibx-link"></a>
                                            <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>IW</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <div class="lead-text">Irfak Wahyudi</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                <div class="nk-ibx-context-group">
                                                    <div class="nk-ibx-context-badges"><span class="badge badge-primary">Keluhan</span></div>
                                                    <div class="nk-ibx-context">
                                                        <span class="nk-ibx-context-text">
                                                            <span class="heading">Ini Mas , link tugasnya kok error ya ? Terimakasih</span>
                                                    </div>
                                                </div>
                                            </div>                                            
                                            <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                <div class="sub-text">10:00 AM</div>
                                            </div>
                                            <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                <div class="ibx-actions">
                                                    <ul class="ibx-actions-visible gx-2">
                                                        <li>
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a class="dropdown-item" href="#"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                        <li><a class="dropdown-item" href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-ibx-item -->
                                    </div><!-- .nk-ibx-list -->
                                    <div class="nk-ibx-view">
                                        <div class="nk-ibx-head">
                                            <div class="nk-ibx-head-actions">
                                                <ul class="nk-ibx-head-tools g-1">
                                                    <li class="ml-n2"><a href="#" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>                                                   
                                                </ul>
                                            </div>
                                            <div class="nk-ibx-head-actions">
                                                <ul class="nk-ibx-head-tools g-1">
                                                    <li class="d-none d-sm-block"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="Prev"><em class="icon ni ni-chevron-left"></em></a></li>
                                                    <li class="d-none d-sm-block"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="Next"><em class="icon ni ni-chevron-right"></em></a></li>
                                                    <li class="mr-n1 mr-lg-0"><a href="#" class="btn btn-icon btn-trigger search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a></li>
                                                </ul>
                                            </div>
                                            <div class="search-wrap" data-search="search">
                                                <div class="search-content">
                                                    <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                    <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message">
                                                    <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                </div>
                                            </div><!-- .search-wrap -->
                                        </div><!-- .nk-ibx-head -->
                                        <div class="nk-ibx-reply nk-reply" data-simplebar>
                                            <div class="nk-ibx-reply-head">
                                                <div>
                                                    <h4 class="title">Link Tugas Error</h4>
                                                </div>                                                
                                            </div>
                                            <div class="nk-ibx-reply-group">
                                                <div class="nk-ibx-reply-item nk-reply-item">
                                                    <div class="nk-reply-header nk-ibx-reply-header">
                                                        <div class="nk-reply-desc">
                                                            <div class="nk-reply-avatar user-avatar bg-blue">
                                                                <span>YH</span>
                                                            </div>
                                                            <div class="nk-reply-info">
                                                                <div class="nk-reply-author lead-text">Yahya Hudan <span class="date d-sm-none">14 Jan, 2020</span></div>
                                                                <p>Ini Mas , link tugasnya kok error ya ? Terimakasih</p>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <ul class="nk-reply-tools g-1">
                                                            <li class="date-msg"><span class="date">14 Jan, 2020</span></li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                                <!-- .nk-reply-item -->
                                            </div>
                                            <div class="nk-ibx-reply-form nk-reply-form">                                                
                                                <div class="nk-reply-form-editor">
                                                    <div class="nk-reply-form-field">
                                                        <textarea class="form-control form-control-simple no-resize" placeholder="Hello"></textarea>
                                                    </div>
                                                </div><!-- .nk-reply-form-editor -->
                                                <div class="nk-reply-form-tools">
                                                    <ul class="nk-reply-form-actions g-1">
                                                        <li class="mr-2"><button class="btn btn-primary" type="submit">Send</button></li>                                                        
                                                    </ul>
                                                    <ul class="nk-reply-form-actions g-1">                                                        
                                                        <li>
                                                            <a href="#" class="btn-trigger btn btn-icon mr-n2"><em class="icon ni ni-trash"></em></a>
                                                        </li>
                                                    </ul>
                                                </div><!-- .nk-reply-form-tools -->
                                            </div><!-- .nk-reply-form -->
                                        </div><!-- .nk-reply -->
                                    </div>
                                </div><!-- .nk-ibx-body -->
                            </div><!-- .nk-ibx -->
                        </div>
                    </div>
                </div>
<!-- @@ Compose Mail Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="compose-mail">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Compose Message</h6>
                    <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                </div>
                <div class="modal-body p-0">
                    <div class="nk-reply-form-header">
                        <div class="nk-reply-form-group">
                            <div class="nk-reply-form-input-group">
                                <div class="nk-reply-form-input nk-reply-form-input-to">
                                    <label class="label">To</label>
                                    <input type="text" class="input-mail tagify" placeholder="Recipient" data-whitelist="team@softnio.com, help@softnio.com, contact@softnio.com">
                                </div>
                                <div class="nk-reply-form-input nk-reply-form-input-cc" data-content="mail-cc">
                                    <label class="label">Cc</label>
                                    <input type="text" class="input-mail tagify">
                                    <a href="#" class="toggle-opt" data-target="mail-cc"><em class="icon ni ni-cross"></em></a>
                                </div>
                                <div class="nk-reply-form-input nk-reply-form-input-bcc" data-content="mail-bcc">
                                    <label class="label">Bcc</label>
                                    <input type="text" class="input-mail tagify">
                                    <a href="#" class="toggle-opt" data-target="mail-bcc"><em class="icon ni ni-cross"></em></a>
                                </div>
                            </div>
                            <ul class="nk-reply-form-nav">
                                <li><a tabindex="-1" class="toggle-opt" data-target="mail-cc" href="#">CC</a></li>
                                <li><a tabindex="-1" class="toggle-opt" data-target="mail-bcc" href="#">BCC</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="nk-reply-form-editor">
                        <div class="nk-reply-form-field">
                            <input type="text" class="form-control form-control-simple" placeholder="Subject">
                        </div>
                        <div class="nk-reply-form-field">
                            <textarea class="form-control form-control-simple no-resize ex-large" placeholder="Hello"></textarea>
                        </div>
                    </div><!-- .nk-reply-form-editor -->
                    <div class="nk-reply-form-tools">
                        <ul class="nk-reply-form-actions g-1">
                            <li class="mr-2"><button class="btn btn-primary" type="submit">Send</button></li>
                            <li>
                                <div class="dropdown">
                                    <a class="btn btn-icon btn-sm btn-tooltip" data-toggle="dropdown" title="Templates" href="#"><em class="icon ni ni-hash"></em></a>
                                    <div class="dropdown-menu">
                                        <ul class="link-list-opt no-bdr link-list-template">
                                            <li class="opt-head"><span>Quick Insert</span></li>
                                            <li><a href="#"><span>Thank you message</span></a></li>
                                            <li><a href="#"><span>Your issues solved</span></a></li>
                                            <li><a href="#"><span>Thank you message</span></a></li>
                                            <li class="divider">
                                            <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Save as Template</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-notes-alt"></em><span>Manage Template</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#"><em class="icon ni ni-clip-v"></em></a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Insert Emoji" href="#"><em class="icon ni ni-happy"></em></a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Images" href="#"><em class="icon ni ni-img"></em></a>
                            </li>
                        </ul>
                        <ul class="nk-reply-form-actions g-1">
                            <li>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle btn-trigger btn btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><span>Another Option</span></a></li>
                                            <li><a href="#"><span>More Option</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="btn-trigger btn btn-icon mr-n2"><em class="icon ni ni-trash"></em></a>
                            </li>
                        </ul>
                    </div><!-- .nk-reply-form-tools -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
@stop