@extends('layouts.master')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <nav>
                                    <ul class="breadcrumb breadcrumb-arrow">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Pengumuman </li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Pengumuman Mentoring </h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total Pengumuman.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        {{-- <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Open</span></a></li>
                                                                        <li><a href="#"><span>Closed</span></a></li>
                                                                        <li><a href="#"><span>Onhold</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li> --}}
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalAddPengumuman"><em class="icon ni ni-plus"></em><span>Tambah Pengumuman</span></a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        @foreach ($data_pengumuman as $pengumuman)
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="/admin/detPengumuman/{{$pengumuman->id_pengumuman}}" class="project-title">
                                                                @if($pengumuman->tagline_pengumuman == 'Mentoring') 
                                                                <div class="user-avatar sq bg-warning"><span>MT</span></div>
                                                                @endif
                                                                @if($pengumuman->tagline_pengumuman == 'Closing Mentoring') 
                                                                <div class="user-avatar sq bg-secondary"><span>CM</span></div>
                                                                @endif
                                                                @if($pengumuman->tagline_pengumuman == 'Opening Mentoring') 
                                                                <div class="user-avatar sq bg-info"><span>OPM</span></div>
                                                                @endif
                                                                @if($pengumuman->tagline_pengumuman == 'Pengambilan Sertifikat') 
                                                                <div class="user-avatar sq bg-success"><span>PBS</span></div>
                                                                @endif
                                                                <div class="project-info">
                                                                    <h6 class="title">{{$pengumuman->judul_pengumuman}}</h6>
                                                                    <span class="sub-text">{{$pengumuman->tagline_pengumuman}}</span>
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="/admin/{{$pengumuman->id_pengumuman}}/detPengumuman/"><em class="icon ni ni-eye"></em><span>Lihat pengumuman</span></a></li>
                                                                        <li><a href="/admin/{{$pengumuman->id_pengumuman}}/detPengumuman/"><em class="icon ni ni-edit"></em><span>Edit pengumuman</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Tandai pengumuman</span></a></li>
                                                                        <li><a href="/admin/{{$pengumuman->id_pengumuman}}/delPengumuman"><em class="icon ni ni-trash-alt"></em><span>Hapus pengumuman</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <p>{!!$pengumuman->detail_pengumuman!!}</p>
                                                            {{-- <p>{{$pengumuman->link_pengumuman}}</p> --}}
                                                        </div>
                                                        <div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    <div class="user-avatar sm bg-primary"><span>A</span></div>
                                                                </li>
                                                            </ul>
                                                            @if($pengumuman->status_pengumuman == 'Selesai') 
                                                            <span class="badge badge-dim badge-success"><em class="icon ni ni-check-circle"></em><span>{{$pengumuman->status_pengumuman}}</span></span>
                                                            @endif
                                                            @if($pengumuman->status_pengumuman == 'On Going') 
                                                            <span class="badge badge-dim badge-warning"><em class="icon ni ni-check-circle"></em><span>{{$pengumuman->status_pengumuman}}</span></span>
                                                            @endif
                                                            @if($pengumuman->status_pengumuman == 'Coming Soon') 
                                                            <span class="badge badge-dim badge-secondary"><em class="icon ni ni-check-circle"></em><span>{{$pengumuman->status_pengumuman}}</span></span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>



    <!--  Tambah Pengumuman Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalAddPengumuman">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Tambah Pengumuman</h5>
                    {{-- <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Kegiatan</a>
                        </li>
                    </ul><!-- .nav-tabs --> --}}
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/admin/pengumuman/addPengumuman" class="form-validate is-alter" method="POST">
                            {{-- {{ csrf_field() }} --}}
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="pengumuman-judul">Judul pengumuman</label>
                                        <input type="text" class="form-control form-control" id="judul_pengumuman" name="judul_pengumuman" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="tagline-pengumuman">Tagline</label>
                                        <select class="form-select" id="tagline_pengumuman" name="tagline_pengumuman" required>
                                            <option>- Pilih Tagline -</option>
                                            <option value="Mentoring">Mentoring</option>
                                            {{-- @foreach ($data_kegiatan as $kegiatan) --}}
                                            <option value="Opening Mentoring">Opening Mentoring</option>
                                            <option value="Closing Mentoring">Closing Mentoring</option>
                                            <option value="Pengambilan Sertifikat">Pengambilan Sertifikat</option>
                                            {{-- @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="status-pengumuman">Status</label>
                                        <select class="form-select" id="status_pengumuman" name="status_pengumuman" required>
                                            <option>- Pilih Status -</option>
                                            <option value="Selesai">Selesai</option>
                                            {{-- @foreach ($data_kegiatan as $kegiatan) --}}
                                            <option value="On Going">On Going</option>
                                            <option value="Coming Soon">Coming Soon</option>
                                            {{-- @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="pengumuman-link" required>Detail Pengumuman</label>
                                        <textarea id="detail_pengumuman" name="detail_pengumuman"> 
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Tambah</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

@stop