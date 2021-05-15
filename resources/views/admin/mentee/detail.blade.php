@extends('layouts.master')
@section('content')
 <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block">
                                    <div class="card">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h4 class="nk-block-title">Detail Mentee</h4>
                                                        </div>
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                        <div class="nk-block-head-content">
                                                            <a href="/admin/mentee" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                                            <a href="/admin/mentee" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="nk-data data-list">
                                                        <div class="data-head">
                                                            <h6 class="overline-title">Basics</h6>
                                                        </div>
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Full Name</span>
                                                                <span class="data-value">{{$data_mentee->nama_mentee}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Email</span>
                                                                <span class="data-value">{{$data_mentee->user->email}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Kelas</span>
                                                                <span class="data-value text-soft">{{$data_mentee->kelas->kelas}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">Jurusan</span>
                                                                <span class="data-value">{{$data_mentee->kelas->prodi->jurusan->nama_jurusan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Prodi</span>
                                                                <span class="data-value">{{$data_mentee->kelas->prodi->nama_prodi}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Angkatan</span>
                                                                <span class="data-value">{{$data_mentee->angkatan->angkatan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                                            <div class="data-col">
                                                                <span class="data-label">Status</span>
                                                                <span class="data-value">{{$data_mentee->status_mentee}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                    </div><!-- data-list -->
                                                </div><!-- .nk-block -->
                                            </div>
                                            
                                        </div><!-- .card-aside-wrap -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>

    <!-- Modal Update Mentor -->
    <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Detail Mentee</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#data">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#mentoring">Mentoring</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="data">
                            <form action="/admin/{{$data_mentee->id_mentee}}/updMentee" class="form-validate is-alter" method="POST">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="nama_mentee">Nama</label>
                                            <input type="text" class="form-control form-control-lg" id="nama_mentee" name="nama_mentee" value="{{$data_mentee->nama_mentee}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="nim_mentee">NIM</label>
                                            <input type="text" class="form-control form-control-lg" id="nim_mentee" name="nim_mentee" value="{{$data_mentee->nim_mentee}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Jurusan</label>
                                            <select class="form-select" id="jurusan_mentee" id="jurusan_mentee" name="jurusan_mentee" data-ui="lg" required>
                                                <option>-Pilih Jurusan-</option>
                                                @foreach ($data_jurusan as $jurusan)
                                                    <option value="{{$jurusan->id_jurusan}}" >{{$jurusan->nama_jurusan}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Program Studi</label>
                                            <select class="form-select" id="prodi_mentee" id="prodi_mentee"  name="prodi_mentee" data-ui="lg" required>
                                                <option>-Pilih Program Studi-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="kelas_id">Kelas</label>
                                            <select class="form-select" id="kelas_id" name="kelas_id" data-ui="lg" required>
                                                <option>-Pilih Kelas-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="kelompok_id">Kelompok</label>
                                            <select class="form-select" id="kelompok_id" name="kelompok_id" data-ui="lg">
                                                <option>-Pilih Kelompok-</option>
                                                @foreach ($data_kelompok as $kelompok)
                                                    <option value="{{$kelompok->id_kelompok}}" @if($data_mentee->kelompok_id == $kelompok->id_kelompok) selected @endIf>{{$kelompok->nama_kelompok}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="angkatan_id">Angkatan</label>
                                            <select class="form-select" id="angkatan_id" name="angkatan_id" data-ui="lg">
                                                <option>-Pilih Angkatan-</option>
                                                @foreach ($data_angkatan as $angkatan)
                                                    <option value="{{$angkatan->id_angkatan}}" @if($data_mentee->angkatan_id == $angkatan->id_angkatan) selected @endIf>{{$angkatan->angkatan}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                {{--                                                <a href="#" class="btn btn-lg btn-primary">Tambah Mentee</a>--}}
                                                <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                            </li>
                                            <li>
                                                <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div><!-- .tab-pane -->
                         <div class="tab-pane" id="mentoring">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Total Pertemuan</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l1" value="{{$pertemuan}}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">Total Tugas</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l2" value="{{$tugas}}" disabled>
                                    </div>
                                </div>
                               
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address-st">Status Mentoring</label>
                                        <input type="text" class="form-control form-control-lg" id="status_mentee" value="{{$data_mentee->status_mentee}}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
@section('jsAdd')
    <script>
        $("select#jurusan_mentee").change(function(event){
            event.preventDefault();
            var id = $(this).children("option:selected").val();
            $.ajax({
                url: "/admin/getProdiByIdJurusan/"+id,
                method: 'GET',
                success: function(data) {
                    // console.log(data)
                    var select = document.getElementById("prodi_mentee");
                    var length = select.options.length;
                    for (i = length-1; i >= 0; i--) {
                        select.options[i] = null;
                    }
                    var select = document.getElementById("kelas_id");
                    var length = select.options.length;
                    for (i = length-1; i >= 0; i--) {
                        select.options[i] = null;
                    }
                    $('select[name="kelas_id"]')
                        .append($('<option />')  // Create new <option> element
                            .text("-Pilih Kelas-")           // Set textContent as "Hello"
                            .prop('selected', false)  // Mark it selected
                        );
                    $('select[name="prodi_mentee"]')
                        .append($('<option />')  // Create new <option> element
                            .text("-Pilih Program Studi-")           // Set textContent as "Hello"
                            .prop('selected', false)  // Mark it selected
                        );
                    for (a = 0; a < data.length; a++){
                        // console.log(data[a].id_prodi);
                        $('select[name="prodi_mentee"]')
                            .append($('<option />')  // Create new <option> element
                                .val(data[a].id_prodi)            // Set value as "Hello"
                                .text(data[a].nama_prodi)           // Set textContent as "Hello"
                                .prop('selected', false)  // Mark it selected
                            );
                    }
                }
            });
        });

        $("select#prodi_mentee").change(function(event){
            event.preventDefault();
            var id = $(this).children("option:selected").val();
            $.ajax({
                url: "/admin/getKelasByIdProdi/"+id,
                method: 'GET',
                success: function(data) {
                    // console.log(data)
                    var select = document.getElementById("kelas_id");
                    var length = select.options.length;
                    for (i = length-1; i >= 0; i--) {
                        select.options[i] = null;
                    }
                    $('select[name="kelas_id"]')
                        .append($('<option />')  // Create new <option> element
                            .text("-Pilih Kelas-")           // Set textContent as "Hello"
                            .prop('selected', false)  // Mark it selected
                        );
                    for (a = 0; a < data.length; a++){
                        // console.log(data[a].id_prodi);
                        $('select[name="kelas_id"]')
                            .append($('<option />')  // Create new <option> element
                                .val(data[a].id_kelas)            // Set value as "Hello"
                                .text(data[a].kelas)           // Set textContent as "Hello"
                                .prop('selected', false)  // Mark it selected
                            );
                    }
                }
            });
        });
    </script>

@endsection
@stop
