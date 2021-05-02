@extends('layouts.master')
@section('content')
<div class="nk-content p-0">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-chat">
                                <div class="nk-chat-body profile-shown">
                                    <div class="nk-chat-head">
                                        <ul class="nk-chat-head-info">
                                            <li class="nk-chat-body-close">
                                                <a href="#" class="btn btn-icon btn-trigger nk-chat-hide ml-n1"><em class="icon ni ni-arrow-left"></em></a>
                                            </li>
                                            <li class="nk-chat-head-user">
                                                <div class="user-card">
                                                    <div class="user-avatar bg-purple">
                                                        <span>IH</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <div class="lead-text">{{$data_keluhan->mentee->nama_mentee}}</div>
                                                        <div class="sub-text"><span class="d-none d-sm-inline mr-1">{{$data_keluhan->created_at->format('d M Y')}}</span></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="nk-chat-head-tools">
                                            <li><a href="/admin/keluhan" class="btn btn-icon"><em class="icon ni ni-back-alt-fill"></em><span>Back</span></a></li>
                                        </ul>
                                        <div class="nk-chat-head-search">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-left">
                                                        <em class="icon ni ni-search"></em>
                                                    </div>
                                                    <input type="text" class="form-control form-round" id="chat-search" placeholder="Search in Conversation">
                                                </div>
                                            </div>
                                        </div><!-- .nk-chat-head-search -->
                                    </div><!-- .nk-chat-head -->
                                    <div class="nk-chat-panel" data-simplebar>
                                        <div class="chat is-you">
                                            <div class="chat-avatar">
                                                <div class="user-avatar bg-purple">
                                                    <span>IH</span>
                                                </div>
                                            </div>
                                            <div class="chat-content">
                                                <div class="chat-bubbles">
                                                    <div class="chat-bubble">
                                                        <div class="chat-msg">{{$data_keluhan->isi_keluhan}}</div>
                                                    </div>
                                                </div>
                                                <ul class="chat-meta">
                                                    <li>{{$data_keluhan->mentee->nama_mentee}}</li>
                                                </ul>
                                            </div>
                                        </div><!-- .chat -->
                                        @if ($data_keluhan->jawab_keluhan == NULL)
                                        <div class="chat is-me">
                                            <div class="chat-content">                                                
                                                <ul class="chat-meta">
                                                    <li>Segera Dijawab kak :)</li>
                                                </ul>
                                            </div>
                                        </div><!-- .chat -->
                                        @else
                                        <div class="chat is-me">
                                            <div class="chat-content">
                                                <div class="chat-bubbles">
                                                    <div class="chat-bubble">
                                                        <div class="chat-msg"> {{$data_keluhan->jawab_keluhan}} </div>
                                                    </div>
                                                </div>
                                                <ul class="chat-meta">
                                                    {{-- <li>{{$data_keluhan->panitia->nama_panitia}}</li> --}}
                                                </ul>
                                            </div>
                                        </div><!-- .chat -->
                                        @endif
                                        
                                    </div><!-- .nk-chat-panel -->
                                    <form action="/admin/keluhan/{{$data_keluhan->id_keluhan}}/update">
                                    <div class="nk-chat-editor">
                                            <div class="nk-chat-editor-form">
                                                <div class="form-control-wrap">
                                                    {{-- <textarea class="form-control form-control-simple no-resize" rows="1" id="default-textarea" placeholder="Type your message..."></textarea> --}}
                                                    <input type="textarea" id="jawab_keluhan" name="jawab_keluhan" class="form-control form-control-simple no-resize" rows="1"  placeholder="Type your message...">
                                                </div>
                                            </div>
                                            <ul class="nk-chat-editor-tools g-2">
                                                <li>
                                                    <button type="submit" class="btn btn-round btn-primary btn-icon"><em class="icon ni ni-send-alt"></em></button>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-chat-editor -->
                                    </form>
                                </div><!-- .nk-chat-body -->
                            </div><!-- .nk-chat -->
                        </div>
                    </div>
                </div>
@stop