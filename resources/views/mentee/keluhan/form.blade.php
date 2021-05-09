@extends('layouts.master')
@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to" href="/mentee/keluhan"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                                            <h2 class="nk-block-title fw-normal">Form Keluhan</h2>
                                            <div class="nk-block-des">
                                                <p class="lead">Isilah Form dibawah ini untuk keluhan-mu !.</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        {{-- <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Form controls</h4>
                                                <div class="nk-block-des">
                                                    <p>Textual form controls—like <code class="code-tag">&lt;input&gt;</code>s, <code class="code-tag">&lt;select&gt;</code>s, and <code class="code-tag">&lt;textarea&gt;</code>s—are styled with the <code>.form-control</code> class. Included are styles for general appearance, focus state, sizing, and more. Additional classes can be used to vary this layout on a per-form basis.</p>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    {{-- <span class="preview-title-lg overline-title">Default Preview</span> --}}
                                                    <form action="/mentee/keluhan/kirim" >
                                                        @csrf
                                                        <div class="row gy-4">                                                        
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-03">Nama Lengkap</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-left">
                                                                            <em class="icon ni ni-user"></em>
                                                                        </div>
                                                                        <input type="text" class="form-control" value="{{$data_mentee->nama_mentee}}" id="default-03" placeholder="namamu" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-03">NIM</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-left">
                                                                            <em class="icon ni ni-user"></em>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="default-03" value="{{$data_mentee->nim_mentee}}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-03">Kelas</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-left">
                                                                            <em class="icon ni ni-user"></em>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="default-03" value="{{$data_mentee->kelas->kelas}}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-06">Keterangan</label>
                                                                    <div class="form-control-wrap ">
                                                                        <div class="form-control-select">
                                                                            <select class="form-control" id="keterangan_keluhan" name="keterangan_keluhan">
                                                                                <option value="Mentoring">Mentoring</option>
                                                                                <option value="Sertifikat">Sertifikat</option>
                                                                                <option value="Pengganti">Pengganti</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="default-03">Detail Keluhan</label>
                                                                    <div class="form-control-wrap">
                                                                        <textarea type="text" class="form-control" id="isi_keluhan" name="isi_keluhan" placeholder="Isikan keluhan mu"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-sm btn-primary"><em class="icon ni ni-send"></em>Kirim</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>                                                    
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->                                        
                                    </div><!-- .nk-block -->                                    
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
@stop