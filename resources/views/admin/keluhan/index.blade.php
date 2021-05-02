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
                                    <div class="nk-ibx-list">
                                        @foreach ($data_keluhan as $keluhan)
                                            <div class="nk-ibx-item">
                                            <a href="/admin/keluhan/{{$keluhan->id_keluhan}}" class="nk-ibx-link"></a>
                                            <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>NM</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <div class="lead-text">{{$keluhan->mentee->nama_mentee}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                <div class="nk-ibx-context-group">
                                                    <div class="nk-ibx-context-badges"><span class="badge badge-primary">Keluhan</span></div>
                                                    <div class="nk-ibx-context">
                                                        <span class="nk-ibx-context-text">
                                                            <span class="heading">{{$keluhan->isi_keluhan}}</span>
                                                    </div>
                                                </div>
                                            </div>                                            
                                            <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                <div class="ibx-actions">
                                                    <ul class="ibx-actions-visible gx-2">
                                                        <li>
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a class="dropdown-item" href="/admin/keluhan/{{$keluhan->id_keluhan}}"><em class="icon ni ni-eye"></em><span>Lihat Pesan</span></a></li>
                                                                        <li><a class="dropdown-item" href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-ibx-item -->
                                        @endforeach
                                    </div><!-- .nk-ibx-list -->                                    
                                </div><!-- .nk-ibx-body -->
                            </div><!-- .nk-ibx -->
                        </div>
                    </div>
                </div>
@stop