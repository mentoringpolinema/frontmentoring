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
                                <li class="breadcrumb-item active">Tugas</li>
                            </ul>
                        </nav>
                        <br>
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Tugas Mentoring </h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total {{$total_tugas}} Tugas.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                       data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
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
                                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"
                                                                              data-toggle="modal"
                                                                              data-target="#modalTugas"><em
                                                        class="icon ni ni-plus"></em><span>Tambah Tugas</span></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            @foreach ($data_tugas as $tugas)
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <div class="card h-100">
                                        <div class="card-inner">
                                            <div class="project">
                                                <div class="project-head">
                                                    <a href="#" data-toggle="modal" data-target="#modalDetailTugas"
                                                       id="detailTugas" data-id="{{ $tugas->id_tugas }}"
                                                       class="project-title">
                                                        <div class="user-avatar sq bg-warning"><span>MM</span></div>
                                                        <div class="project-info">
                                                            <h6 class="title">{{$tugas->nama_tugas}}</h6>
                                                            <span class="sub-text">{{$tugas->materi->nama_materi}}</span>
                                                        </div>
                                                    </a>
                                                    <div class="drodown">
                                                        <a href="#"
                                                           class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1"
                                                           data-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#" data-toggle="modal"
                                                                       data-target="#modalDetailTugas"
                                                                       id="detailTugas"
                                                                       data-id="{{ $tugas->id_tugas }}"><em
                                                                            class="icon ni ni-eye"></em><span>Lihat Tugas</span></a>
                                                                </li>
                                                                <li><a href="#" data-toggle="modal"
                                                                       data-target="#modalEditTugas" id="editTugas"
                                                                       data-id="{{ $tugas->id_tugas }}"><em
                                                                            class="icon ni ni-edit"></em><span>Edit Tugas</span></a>
                                                                </li>                                                               
                                                                
                                                                <li><a href="/admin/tugas/{{$tugas->id_tugas}}"><em
                                                                            class="icon ni ni-trash-alt"></em><span>Hapus Tugas</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="project-details">
                                                    <p>{!!$tugas->detail_tugas!!}</p>
                                                </div>
                                                {{-- <div class="project-progress">
                                                    <div class="project-progress-details">
                                                        <div class="project-progress-task"><em
                                                                class="icon ni ni-check-round-cut"></em><span>1 Tugas</span>
                                                        </div>
                                                        <div class="project-progress-percent">100%</div>
                                                    </div>
                                                    <div class="progress progress-pill progress-md bg-success">
                                                        <div class="progress-bar" data-progress="100"></div>
                                                    </div>
                                                </div> --}}
                                                <div class="project-meta">
                                                    {{-- <ul class="project-users g-1">
                                                        <li>
                                                            <div class="user-avatar sm bg-primary"><span>A</span></div>
                                                        </li>
                                                    </ul> --}}
                                                    {{-- <span class="badge badge-dim badge-warning"><em class="icon ni ni-clock"></em><span>4 Days Left</span></span> --}}
                                                    @if ($tugas->materi->kegiatan->status_kegiatan == 'Close')
                                                    <span class="badge badge-dim badge-danger"><em class="icon ni ni-cross-circle"></em><span>Status : {!!$tugas->materi->kegiatan->status_kegiatan!!}</span></span>
                                                    @else
                                                    <span class="badge badge-dim badge-success"><em class="icon ni ni-check-circle"></em><span>Status : {!!$tugas->materi->kegiatan->status_kegiatan!!}</span></span>
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

    <!--  Tambah Tugas Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalTugas">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Tambah Tugas</h5>
                    {{-- <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Kegiatan</a>
                        </li>
                    </ul><!-- .nav-tabs --> --}}
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/admin/tugas/addTugas" class="form-validate is-alter" method="POST">
                                {{-- {{ csrf_field() }} --}}
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="nama_tugas">Nama Tugas</label>
                                            <input type="text" class="form-control form-control" id="nama_tugas"
                                                   name="nama_tugas" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="materi_id">Materi</label>
                                            <select class="form-control" id="materi_id" name="materi_id" required>
                                                <option>-Pilih Materi-</option>
                                                @foreach ($data_materi as $Materi)
                                                    <option value="{{$Materi->id_materi}}">{{$Materi->nama_materi}}</option>
                                                @endforeach
                                            </select></div>
                                    </div>                                    
                                    <div class="col-md-12">
                                        <label class="form-label" for="detail_tugas">Detail Tugas</label>
                                        <textarea id="detail_materi" name="detail_tugas">

                                    </textarea>
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

    <!--  Edit Tugas Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalEditTugas">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Tugas</h5>
                    {{-- <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Kegiatan</a>
                        </li>
                    </ul><!-- .nav-tabs --> --}}
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="#" class="form-validate is-alter" method="POST">
                                {{-- {{ csrf_field() }} --}}
                                @csrf
                                @method('PUT')
                                <div class="row gy-4">
                                    <input type="hidden" class="form-control form-control" id="id_tugas"
                                           name="id_tugas_edit" value="" required>
                                    <div class="row gy-4">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label class="form-label" for="nama_tugas">Nama Tugas</label>
                                                <input type="text" class="form-control form-control" id="nama_tugas"
                                                       name="nama_tugas_edit" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="form-label" for="materi_id">Materi</label>
                                                <select class="form-control" id="nama_materi" name="nama_materi_edit"
                                                        required>
                                                    <option>-Pilih Materi-</option>
                                                    @foreach ($data_materi as $materi)
                                                        <option
                                                            value="{{$materi->id_materi}}">{{$materi->nama_materi}}</option>
                                                    @endforeach
                                                </select></div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="detail_tugas">Detail Tugas</label>
                                            <textarea id="detail_tugas_edit" name="detail_tugas_edit">

                                            </textarea>
                                        </div>
                                        <div class="col-12">
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                                </li>
                                                <li>
                                                    <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                                </li>
                                            </ul>
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

    <!--  Detail Tugas Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalDetailTugas">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Detail Tugas</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="" class="form-validate is-alter" method="POST">
                            @csrf
                            <div class="row gy-4">
                                <input type="hidden" class="form-control form-control" id="id_tugas" name="id_tugas_detail" value="" readonly>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="form-label" for="kegiatan-name">Nama Kegiatan</label>
                                        <input type="text" class="form-control form-control" id="nama_tugas" name="nama_tugas_detail" value="" readonly>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label" for="materi_id">Materi</label>
                                        <input type="text" class="form-control form-control" id="nama_materi" name="nama_materi_detail" value="{{$materi->nama_materi}}" readonly>
                                            {{-- <select class="form-control" id="nama_materi" name="nama_materi_detail" readonly>
                                                <option>-Pilih Materi-</option>
                                                @foreach ($data_materi as $materi)
                                                    <option value="{{$materi->id_materi}}">
                                                        {{$materi->nama_materi}}
                                                    </option>
                                                @endforeach
                                            </select> --}}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {{-- <div class="form-group">
                                        <label class="form-label" for="phone-no">Detail Kegiatan</label>
                                        <textarea type="text" class="form-control form-control-lg" id="detail_kegiatan" name="detail_kegiatan" placeholder="Pertemuan dst..." required></textarea>
                                    </div> --}}
                                    <label class="form-label" for="detail_kegiatan">Detail Kegiatan</label>
                                    <textarea name="detail_tugas_detail" id="detail_tugas_detail" readonly>
                                    </textarea>
                                </div>
                            </div>
                            </form>
                        </div>
                    </form>
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- .modal -->


    
        @section('jsAdd')
            <script>

                $('body').on('click', '#editTugas', function (event) {
                    event.preventDefault();
                    var token = $("input[name='_token']").val();
                    var id = $(this).data('id');
                    console.log(id)
                    $.ajax({
                        url: "<?php echo route('getTugasByID') ?>",
                        method: 'POST',
                        data: {id_tugas: id, _token: token},
                        success: function (data) {
                            $("input[name='id_tugas_edit']").val(data.tugas.id_tugas);
                            $("input[name='nama_tugas_edit']").val(data.tugas.nama_tugas);
                            $("select[name='nama_materi_edit']").val(data.materi.id_materi).change();
                            $("textarea[name='detail_tugas_edit']").val(data.tugas.detail_tugas);
                            $("textarea[name='detail_tugas_edit']").ckeditor();
                        }
                    });
                });


                $('body').on('click', '#detailTugas', function (event) {
                    event.preventDefault();

                    var token = $("input[name='_token']").val();
                    var id = $(this).data('id');
                    console.log(id)
                    $.ajax({
                        url: "<?php echo route('getTugasByID') ?>",
                        method: 'POST',
                        data: {id_tugas: id, _token: token},
                        success: function (data) {
                            $("input[name='id_tugas_detail']").val(data.tugas.id_tugas);
                            $("input[name='nama_tugas_detail']").val(data.tugas.nama_tugas);
                            $("textarea[name='detail_tugas_detail']").val(data.tugas.detail_tugas);
                            $("textarea[name='detail_tugas_detail']").ckeditor();
                            $("select[name='nama_materi_detail']").val(data.materi.id_materi).change();
                            // initGetDataMateri();
                            
                        }
                    });
                });

            </script>
        @endsection

@stop
