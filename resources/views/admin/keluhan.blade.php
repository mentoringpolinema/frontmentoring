@extends('layouts.master')
@section('content')
                <div class="nk-content p-0">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-msg nk-msg-boxed">
                                <div class="nk-msg-aside">
                                    <div class="nk-msg-nav">
                                        <ul class="nk-msg-menu">
                                            <li class="nk-msg-menu-item active"><a href="">Active</a></li>
                                            <li class="nk-msg-menu-item"><a href="">Closed</a></li>
                                            <li class="nk-msg-menu-item"><a href="">Stared</a></li>
                                            <li class="nk-msg-menu-item"><a href="">All</a></li>
                                            <li class="nk-msg-menu-item ml-auto"><a href="" class="search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a></li>
                                        </ul><!-- .nk-msg-menu -->
                                        <div class="search-wrap" data-search="search">
                                            <div class="search-content">
                                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message">
                                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                            </div>
                                        </div><!-- .search-wrap -->
                                    </div><!-- .nk-msg-nav -->
                                    <div class="nk-msg-list" data-simplebar>
                                        <div class="nk-msg-item current" data-msg-id="1">
                                            <div class="nk-msg-media user-avatar">
                                                <span>AB</span>
                                            </div>
                                            <div class="nk-msg-info">
                                                <div class="nk-msg-from">
                                                    <div class="nk-msg-sender">
                                                        <div class="name">Abu Bin Ishtiyak</div>
                                                        <div class="lable-tag dot bg-pink"></div>
                                                    </div>
                                                    <div class="nk-msg-meta">
                                                        <div class="attchment"><em class="icon ni ni-clip-h"></em></div>
                                                        <div class="date">12 Jan</div>
                                                    </div>
                                                </div>
                                                <div class="nk-msg-context">
                                                    <div class="nk-msg-text">
                                                        <h6 class="title">Unable to select currency when order.</h6>
                                                        <p>Hello team, I am facing problem as i can not select currency on buy order page.</p>
                                                    </div>
                                                    <div class="nk-msg-lables">
                                                        <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .nk-msg-item -->
                                        <div class="nk-msg-item" data-msg-id="2">
                                            <div class="nk-msg-media user-avatar">
                                                <img src="./images/avatar/b-sm.jpg" alt="">
                                            </div>
                                            <div class="nk-msg-info">
                                                <div class="nk-msg-from">
                                                    <div class="nk-msg-sender">
                                                        <div class="name">Jackelyn Dugas</div>
                                                    </div>
                                                    <div class="nk-msg-meta">
                                                        <div class="date">15 Jan</div>
                                                    </div>
                                                </div>
                                                <div class="nk-msg-context">
                                                    <div class="nk-msg-text">
                                                        <h6 class="title">Have not received bitcoin yet.</h6>
                                                        <p>Hey! I recently bitcoin from you. But still have not received yet.</p>
                                                    </div>
                                                    <div class="nk-msg-lables">
                                                        <div class="asterisk"><a class="active" href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .nk-msg-item -->
                                    </div><!-- .nk-msg-list -->
                                </div><!-- .nk-msg-aside -->
                                <div class="nk-msg-body bg-white profile-shown">
                                    <div class="nk-msg-head">
                                        <h4 class="title d-none d-lg-block">Unable to select currency when order</h4>
                                        <div class="nk-msg-head-meta">
                                            <div class="d-none d-lg-block">
                                                <ul class="nk-msg-tags">
                                                    <li><span class="label-tag"><em class="icon ni ni-flag-fill"></em> <span>Technical Problem</span></span></li>
                                                </ul>
                                            </div>
                                            <ul class="nk-msg-actions">
                                                <li><a href="#" class="btn btn-dim btn-sm btn-outline-light"><em class="icon ni ni-check"></em><span>Mark as Closed</span></a></li>
                                                <!-- <li><span class="badge badge-dim badge-success badge-sm"><em class="icon ni ni-check"></em><span>Closed</span></span></li> -->
                                                <li class="d-lg-none"><a href="#" class="btn btn-icon btn-sm btn-white btn-light profile-toggle"><em class="icon ni ni-info-i"></em></a></li>
                                                <li class="dropdown">
                                                    <a href="#" class="btn btn-icon btn-sm btn-white btn-light dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-user-add"></em><span>Assign To Member</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-archive"></em><span>Move to Archive</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-done"></em><span>Mark as Close</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
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
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-name">Abu Bin Ishtiyak</div>
                                                </div>
                                                <div class="date-time">14 Jan, 2020</div>
                                            </div>
                                            <div class="nk-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    <p>Hello team,</p>
                                                    <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                                                    <p>Thank you <br> Ishityak</p>
                                                </div>
                                                <div class="attach-files">
                                                    <ul class="attach-list">
                                                        <li class="attach-item">
                                                            <a class="download" href="#"><em class="icon ni ni-img"></em><span>error-show-On-order.jpg</span></a>
                                                        </li>
                                                        <li class="attach-item">
                                                            <a class="download" href="#"><em class="icon ni ni-img"></em><span>full-page-error.jpg</span></a>
                                                        </li>
                                                    </ul>
                                                    <div class="attach-foot">
                                                        <span class="attach-info">2 files attached</span>
                                                        <a class="attach-download link" href="#"><em class="icon ni ni-download"></em><span>Download All</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-item -->
                                        <div class="nk-reply-item">
                                            <div class="nk-reply-header">
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-pink">
                                                        <span>ST</span>
                                                    </div>
                                                    <div class="user-name">Support Team <span>(You)</span></div>
                                                </div>
                                                <div class="date-time">14 Jan, 2020</div>
                                            </div>
                                            <div class="nk-reply-body">
                                                <div class="nk-reply-entry entry">
                                                    <p>Hello Ishtiyak,</p>
                                                    <p>We are really sorry to hear that, you have face an unexpected experience. Our team urgently look this matter and get back to you asap. </p>
                                                    <p>Thank you very much. </p>
                                                </div>
                                                <div class="nk-reply-from"> Replied by <span>Iliash Hossain</span> at 11:32 AM </div>
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
                                                <div class="nk-reply-form-title">
                                                    <div class="title">Reply as:</div>
                                                    <div class="user-avatar xs bg-purple">
                                                        <span>IH</span>
                                                    </div>
                                                </div>
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
                                                                <li>
                                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Insert Emoji" href="#"><em class="icon ni ni-happy"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Images" href="#"><em class="icon ni ni-img"></em></a>
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