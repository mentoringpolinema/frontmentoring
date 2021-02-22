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
                                        <li class="breadcrumb-item active">Materi </li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Materi Mentoring </h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total 1 Materi.</p>
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
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalMateri"><em class="icon ni ni-plus"></em><span>Tambah Materi</span></a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        @foreach ($data_materi as $materi)
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="project">
                                                        <div class="project-head">
                                                            <a href="#" data-toggle="modal" data-target="#modalDetailMateri" class="project-title">
                                                                <div class="user-avatar sq bg-warning"><span>MM</span></div>
                                                                <div class="project-info">
                                                                    <h6 class="title">{{$materi->nama_materi}}</h6>
                                                                    <span class="sub-text">{{$materi->minggu_materi}}</span>
                                                                </div>
                                                            </a>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#" data-toggle="modal" data-target="#modalDetailMateri"><em class="icon ni ni-eye"></em><span>Lihat Materi</span></a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#modalEditMateri"><em class="icon ni ni-edit"></em><span>Edit Materi</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Tandai Materi</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-trash-alt"></em><span>Hapus Materi</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="project-details">
                                                            <p>{{$materi->detail_materi}} ...</p>
                                                            {{-- <p>{{$materi->link_materi}}</p> --}}
                                                        </div>
                                                        <div class="project-progress">
                                                            <div class="project-progress-details">
                                                                <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>1 Materi</span></div>
                                                                <div class="project-progress-percent">100%</div>
                                                            </div>
                                                            <div class="progress progress-pill progress-md bg-success">
                                                                <div class="progress-bar" data-progress="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                <li>
                                                                    <div class="user-avatar sm bg-primary"><span>A</span></div>
                                                                </li>
                                                            </ul>
                                                            {{-- <span class="badge badge-dim badge-warning"><em class="icon ni ni-clock"></em><span>4 Days Left</span></span> --}}
                                                            <span class="badge badge-dim badge-success"><em class="icon ni ni-check-circle"></em><span>Selesai</span></span>
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

    <!--  Tambah Materi Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalMateri">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Tambah Materi</h5>
                    {{-- <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Kegiatan</a>
                        </li>
                    </ul><!-- .nav-tabs --> --}}
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/admin/materi/addMateri" class="form-validate is-alter" method="POST">
                            {{ csrf_field() }}
                            <div class="row gy-4">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="form-label" for="materi-name">Nama Materi</label>
                                        <input type="text" class="form-control form-control" id="nama_materi" name="nama_materi" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="minggu-materi">Minggu Ke-</label>
                                        <select class="form-select" id="minggu_materi" name="minggu_materi" >
                                            <option>Minggu Ke-</option>
                                            @foreach ($data_kegiatan as $kegiatan)
                                            <option>{{$kegiatan->minggu_kegiatan}}</option>
                                            @endforeach
                                        </select></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="materi-link">Link Materi</label>
                                        <input type="text" class="form-control form-control" id="link_materi" name="link_materi" required>
                                    </div>
                                </div>                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Detail Materi</label>
                                        <textarea type="text" class="form-control form-control-lg" id="detail_materi" name="detail_materi" value="+880" placeholder="Materi Tentang dst..."></textarea>
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

    <!--  Edit Materi Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalEditMateri">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Materi</h5>
                    {{-- <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Kegiatan</a>
                        </li>
                    </ul><!-- .nav-tabs --> --}}
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="#" class="form-validate is-alter" method="POST">
                            {{ csrf_field() }}
                            <div class="row gy-4">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="form-label" for="materi-name">Nama Materi</label>
                                        <input type="text" class="form-control form-control" id="nama_materi" name="nama_materi" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="ed-minggu-materi">Minggu Ke-</label>
                                        <select class="form-select" id="edminggu_materi" name="edminggu_materi" >
                                            {{-- @foreach ($data_jurusan as $jurusan) --}}
                                            <option>Minggu 3</option>
                                            <option>Minggu 5</option>
                                            <option>Minggu 7</option>
                                            <option>Minggu 9</option>
                                            {{-- @endforeach --}}
                                        </select></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="materi-link">Link Materi</label>
                                        <input type="text" class="form-control form-control" id="link_materi" name="link_materi" required>
                                    </div>
                                </div>                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Detail Materi</label>
                                        <textarea type="text" class="form-control form-control-lg" id="detail_materi" name="detail_materi" value="+880" placeholder="Materi Tentang dst..."></textarea>
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

    <!--  Detail Materi Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalDetailMateri">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Detail Materi</h5>
                    {{-- <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Kegiatan</a>
                        </li>
                    </ul><!-- .nav-tabs --> --}}
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="#" class="form-validate is-alter" method="POST">
                            {{ csrf_field() }}
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="materi-name">Nama Materi</label>
                                        {{-- <input type="text" class="form-control form-control" id="nama_materi" name="nama_materi" required> --}}
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi culpa quae esse laborum ipsam repellat mollitia quam, dicta accusantium ad minima consequatur eos fugit nulla ipsum cumque debitis dignissimos repudiandae!</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Video Materi</label>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1c3nyGDzDBQ" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Detail Materi</label>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nostrum tempore, molestias at odit totam aspernatur reprehenderit adipisci eaque dolorem, nesciunt aut exercitationem provident laboriosam vitae voluptas enim quod tenetur?</p>
                                    </div>
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