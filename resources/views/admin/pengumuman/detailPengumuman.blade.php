@extends('layouts.master')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Detail / <strong class="text-primary small">Pengumuman</strong>
                                </h3>
                                <div class="nk-block-des text-soft">
                                    <ul class="list-inline">
                                        <li>Tagline : <span class="badge badge-dim badge-warning"><em
                                                    class="icon ni ni-centos"></em><span>{{$data_pengumuman->tagline_pengumuman}}</span></span>
                                        </li>
                                        <li>Status : <span class="badge badge-dim badge-success"><em
                                                    class="icon ni ni-check-circle"></em><span>{{$data_pengumuman->status_pengumuman}}</span></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="/admin/pengumuman"
                                   class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                <a href="/admin/pengumuman"
                                   class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                        class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-aside-wrap">
                                <div class="card-content">
                                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#detail"><em
                                                    class="icon ni ni-signal"></em><span>Detail Pengumuman</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#edit"><em
                                                    class="icon ni ni-setting"></em><span>Edit Pengumuman</span></a>
                                        </li>
                                    </ul><!-- .nav-tabs -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="detail">
                                            <div class="card-inner">
                                                <div class="nk-block">
                                                    <div class="nk-block-head">
                                                        <h4 class="title">Detail Pengumuman</h4>
                                                        {{-- <p>Berikut detaiil Pengumuman .</p> --}}
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Judul </span>
                                                                <span
                                                                    class="profile-ud-value">{{$data_pengumuman->judul_pengumuman}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Tagline</span>
                                                                <span
                                                                    class="profile-ud-value">{{$data_pengumuman->tagline_pengumuman}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Status</span>
                                                                <span
                                                                    class="profile-ud-value">{{$data_pengumuman->status_pengumuman}}</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-block">
                                                    <div class="nk-block-head nk-block-head-line">
                                                        <h6 class="title overline-title text-base">Detail
                                                            Pengumuman</h6>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span
                                                                    class="profile-ud-value">{{$data_pengumuman->detail_pengumuman}}</span>
                                                                {{-- <span class="profile-ud-label">Detail</span> --}}
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-divider divider md"></div>
                                                <div class="nk-block">
                                                    <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                        <h5 class="title">Pengumuman Note</h5>
                                                        {{-- <a href="#" class="link link-sm">+ Add Note</a> --}}
                                                    </div><!-- .nk-block-head -->
                                                    <div class="bq-note">
                                                        <div class="bq-note-item">
                                                            <div class="bq-note-text">
                                                                <p>Aproin at metus et dolor tincidunt feugiat eu id
                                                                    quam. Pellentesque habitant morbi tristique senectus
                                                                    et netus et malesuada fames ac turpis egestas.
                                                                    Aenean sollicitudin non nunc vel pharetra. </p>
                                                            </div>
                                                            <div class="bq-note-meta">
                                                                <span class="bq-note-added">Added on <span
                                                                        class="date">{{$data_pengumuman->created_at->format('d M Y')}}</span> at <span
                                                                        class="time">{{$data_pengumuman->created_at->format('H:i')}}</span></span>
                                                                <span class="bq-note-sep sep">|</span>
                                                                <span class="bq-note-added">Update At <span
                                                                        class="date">{{$data_pengumuman->updated_at->format('d M Y')}}</span> at <span
                                                                        class="time">{{$data_pengumuman->updated_at->format('H:i')}}</span></span>
                                                                <span class="bq-note-sep sep">|</span>
                                                                <span
                                                                    class="bq-note-by">By <span>{{auth()->user()->name}}</span></span>
                                                            </div>
                                                        </div><!-- .bq-note-item -->
                                                    </div><!-- .bq-note -->
                                                </div><!-- .nk-block -->
                                            </div><!-- .card-inner -->
                                        </div>
                                        <div class="tab-pane" id="edit">
                                            <div class="card-inner">
                                                <div class="nk-block">
                                                    <div class="nk-block-head">
                                                        <h4 class="title">Edit Pengumuman</h4>
                                                        {{-- <p>Berikut detaiil Pengumuman .</p> --}}
                                                    </div><!-- .nk-block-head -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-block">
                                                    <form
                                                        action="/admin/{{$data_pengumuman->id_pengumuman}}/edtPengumuman"
                                                        class="form-validate is-alter" method="POST">
                                                        {{-- {{ csrf_field() }} --}}
                                                        @csrf
                                                        <div class="row gy-4">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="full-name">Judul
                                                                        Pengumuman</label>
                                                                    <input type="text" class="form-control form-control"
                                                                           id="judul_pengumuman" name="judul_pengumuman"
                                                                           placeholder="Enter Judul"
                                                                           value="{{$data_pengumuman->judul_pengumuman}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="display-name">Tagline
                                                                        Pengumuman</label>
                                                                    <select class="form-select" id="tagline_pengumuman"
                                                                            name="tagline_pengumuman" required>
                                                                        <option>- Pilih Tagline -</option>
                                                                        <option value="Mentoring"
                                                                                @if($data_pengumuman->tagline_pengumuman == 'Mentoring') selected @endif>
                                                                            Mentoring
                                                                        </option>
                                                                        <option value="Opening Mentoring"
                                                                                @if($data_pengumuman->tagline_pengumuman == 'Opening Mentoring') selected @endif>
                                                                            Opening Mentoring
                                                                        </option>
                                                                        <option value="Closing Mentoring"
                                                                                @if($data_pengumuman->tagline_pengumuman == 'Closing Mentoring') selected @endif>
                                                                            Closing Mentoring
                                                                        </option>
                                                                        <option value="Pengambilan Sertifikat"
                                                                                @if($data_pengumuman->tagline_pengumuman == 'Pengambilan Sertifikat') selected @endif>
                                                                            Pengambilan Sertifikat
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="display-name">Status
                                                                        Pengumuman</label>
                                                                    <select class="form-select" id="status_pengumuman"
                                                                            name="status_pengumuman" required>
                                                                        <option>- Pilih Status -</option>
                                                                        <option value="Selesai"
                                                                                @if($data_pengumuman->status_pengumuman == 'Selesai') selected @endif>
                                                                            Selesai
                                                                        </option>
                                                                        <option value="On Going"
                                                                                @if($data_pengumuman->status_pengumuman == 'On Going') selected @endif>
                                                                            On Going
                                                                        </option>
                                                                        <option value="Coming Soon"
                                                                                @if($data_pengumuman->status_pengumuman == 'Coming Soon') selected @endif>
                                                                            Coming Soon
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="display-name">Detail
                                                                        Pengumuman</label>
                                                                    <textarea type="text"
                                                                              class="form-control form-control"
                                                                              id="detail_pengumuman"
                                                                              name="detail_pengumuman"
                                                                              placeholder="Enter Detail"
                                                                              value="{{$data_pengumuman->detail_pengumuman}}"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                                    <li>
                                                                        <button type="submit"
                                                                                class="btn btn-lg btn-primary">Update
                                                                            Pengumuman
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div><!-- .nk-block -->
                                            </div><!-- .card-inner -->
                                        </div>
                                    </div>
                                </div><!-- .card-content -->
                            </div><!-- .card-aside-wrap -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@stop
