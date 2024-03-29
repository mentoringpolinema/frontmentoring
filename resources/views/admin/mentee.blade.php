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
                                        <li class="breadcrumb-item active">Mentee</li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Data Mentee </h3>
                                            <div class="nk-block-des text-soft">
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        {{-- <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-search"></em><span><span class="d-none d-md-inline">Cari</span></span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Jurusan</span></a></li>
                                                                        <li><a href="#"><span>Prodi</span></a></li>
                                                                        <li><a href="#"><span>Kelas</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li> --}}
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#menteeModal"><em class="icon ni ni-user-add"></em><span>Tambah Mentee</span></a></li>
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-success" data-toggle="modal" data-target="#importModal"><em class="icon ni ni-microsoft"></em><span>Import Excel</span></a></li>
                                                        <li class="preview-btn-item col-sm-6 col-lg-3">
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-warning" data-toggle="dropdown"><em class="icon ni ni-download-cloud"></em><span>Export</span><em class="icon ni ni-chevron-down"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-auto mt-1">
                                                                    <ul class="link-list-plain">
                                                                        <li><a href="/admin/expMenteeP/">Export PDF</a></li>
                                                                        <li><a href="/admin/expMentee/">Export Excel</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <div class="nk-block-des">
                                                    <p>Data Mentee Kegiatan Mentoring Keagamaan Politeknik Negeri Malang Tahun <?php echo date("Y");?>.</p>
                                                </div>
                                                <br>
                                                <div class="row g-gs">
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Mentee</div>
                                                                            <div class="count">{{$totalMentee}}</div>
                                                                        </div>
                                                                        <em class="icon bg-primary-dim ni ni-users"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Kelompok</div>
                                                                            <div class="count">{{$total_kelompok}}</div>
                                                                        </div>
                                                                        <em class="icon bg-secondary-dim ni ni-link-group"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    <div class="col-xxl-3 col-md-4">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Kelas</div>
                                                                            <div class="count">{{$total_kelas}}</div>
                                                                        </div>
                                                                        <em class="icon bg-success-dim ni ni-link-group"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">Data Mentee</h5>
                                                    </div>
                                                    <div class="card-tools mr-n1">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li>
                                                                <a href="#" class="search-toggle toggle-search btn btn-icon" data-target="search"><em class="icon ni ni-search"></em></a>
                                                            </li><!-- li -->
                                                            <li class="btn-toolbar-sep"></li><!-- li -->                                                            
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .card-tools -->
                                                    <div class="card-search search-wrap" data-search="search">
                                                        <div class="search-content">
                                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Cari Data Mentee">
                                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                        </div>
                                                    </div><!-- .card-search -->
                                                </div><!-- .card-title-group -->
                                                <br>
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col"><span class="sub-text">NIM</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Nama</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Kelas</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Jurusan</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Prodi</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Kelompok</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Angkatan</span></th>
                                                            {{-- <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th> --}}
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_mentee as $mentee)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$mentee->nim_mentee}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$mentee->nama_mentee}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$mentee->kelas->kelas}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$mentee->kelas->prodi->jurusan->nama_jurusan}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$mentee->kelas->prodi->singkatan_prodi}}</span>
                                                            </td>
                                                            @if ($mentee->kelompok == NULL)
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>Belum ada Kelompok</span>
                                                                </td>
                                                            @else
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>{{$mentee->kelompok->nama_kelompok}}</span>
                                                                </td>
                                                            @endif

                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$mentee->angkatan->angkatan}}</span>
                                                                {{-- <span>{{$mentee->angkatan_id}}</span> --}}
                                                            </td>
                                                            {{-- <td class="nk-tb-col tb-col-md">
                                                                @if($mentee->status_mentee == 'lulus')
                                                                <span class="dot bg-success d-mb-none"></span>
                                                                <span class="badge badge-sm badge-dot has-bg badge-success d-none d-mb-inline-flex">{{$mentee->status_mentee}}</span>
                                                                @endif
                                                                @if($mentee->status_mentee == 'tidak lulus')
                                                                <span class="dot bg-success d-mb-none"></span>
                                                                <span class="badge badge-sm badge-dot has-bg badge-danger d-none d-mb-inline-flex">{{$mentee->status_mentee}}</span>
                                                                @endif
                                                            </td> --}}
                                                            <td class="nk-tb-col tb-col-md">
                                                                <form action="/admin/mentee/{{$mentee->slug}}" method="post" style="display: inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-round btn-sm btn-danger" type="submit" class="fa fa-trash">Delete</button>
                                                                </form>
                                                                <a href="/admin/detailMentee/{{$mentee->slug}}" class="btn btn-round btn-sm btn-secondary" ><span>Detail</span></a>
                                                                {{-- <a href="#" class="btn btn-round btn-sm btn-primary" data-toggle="modal" data-target="#profile-edit"><span>Edit</span> </a> --}}
                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sweet Alert-->
                @include('sweetalert::alert')
    <!-- Add Mentee -->
    <div class="modal fade" tabindex="-1" role="dialog" id="menteeModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Tambah Mentee</h5>
                    <div class="tab-content">
                        <div class="tab-pane active" id="data">
                            <form action="/admin/mentee/addMentee" class="form-validate is-alter" method="POST">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="nama_mentee">Nama</label>
                                            <input type="text" class="form-control form-control-lg" id="nama_mentee" name="nama_mentee" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="nim_mentee">NIM</label>
                                            <input type="text" class="form-control form-control-lg" id="nim_mentee" name="nim_mentee" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Jurusan</label>
                                            <select class="form-select" id="jurusan_mentee" name="jurusan_mentee" data-ui="lg" required>
                                                <option>-Pilih Jurusan-</option>
                                                @foreach ($data_jurusan as $jurusan)
                                                    <option value="{{$jurusan->id_jurusan}}">{{$jurusan->nama_jurusan}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Program Studi</label>
                                            <select class="form-select" id="prodi_mentee" name="prodi_mentee" data-ui="lg" required>
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
                                                <option value="">-Pilih Kelompok-</option>
                                                @foreach ($data_kelompok as $kelompok)
                                                    <option value="{{$kelompok->id_kelompok}}">{{$kelompok->nama_kelompok}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="angkatan_id">Angkatan</label>
                                            <select class="form-select" id="angkatan_id" name="angkatan_id" data-ui="lg" required>
                                                <option>-Pilih Angkatan-</option>
                                                @foreach ($data_angkatan as $angkatan)
                                                    <option value="{{$angkatan->id_angkatan}}">{{$angkatan->angkatan}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
{{--                                                <a href="#" class="btn btn-lg btn-primary">Tambah Mentee</a>--}}
                                                <button type="submit" class="btn btn-lg btn-primary">Tambah Mentee</button>
                                            </li>
                                            <li>
                                                <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div><!-- .tab-pane -->
                        {{-- <div class="tab-pane" id="kelompok">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Kelompok</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l1" value="2337 Kildeer Drive">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-county">Country</label>
                                        <select class="form-select" id="address-county" data-ui="lg">
                                            <option>Canada</option>
                                            <option>United State</option>
                                            <option>United Kindom</option>
                                            <option>Australia</option>
                                            <option>India</option>
                                            <option>Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-lg btn-primary">Update Address</a>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane --> --}}
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <!-- Profile Edit Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Data Mentor</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/admin/edtMentor" class="form-validate is-alter" method="POST">
                            {{-- {{ csrf_field() }} --}}
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Nama</label>
                                        <input type="text" class="form-control form-control-lg" id="nama_mentor" name="nama_mentor" value="Abu Bin Ishtiyak" placeholder="Enter Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">No Telp</label>
                                        <input type="text" class="form-control form-control-lg" id="email_mentor" name="email_mentor" value="Ishtiyak" placeholder="Enter Email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Alamat</label>
                                        <textarea type="text" class="form-control form-control-lg" id="notelp_mentor" name="notelp_mentor" value="+880" placeholder="Alamat"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            {{-- <a href="#" class="btn btn-lg btn-primary">Update</a> --}}
                                            <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <!-- Import Excel Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="importModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Import Data Mentee</h5>
                    <ul class="nk-nav nav nav-tabs">
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="/admin/impMentee" class="form-validate is-alter" method="POST" enctype="multipart/form-data">
                                {{-- {{ csrf_field() }} --}}
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        {{-- <div class="upload-zone small bg-lighter my-2">
                                            <div class="dz-message">
                                                <span class="dz-message-text">Drag and drop file</span>
                                            </div>
                                        </div> --}}
                                        <div class="form-control-wrap">
                                            <div class="custom-file">
                                                <input type="file" multiple class="custom-file-input" id="data_mentee" name="data_mentee">
                                                    <label class="custom-file-label" for="data_mentee">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">File Extensi Harus berupa excel (csx dan xs), Jika Belum ada dowload <a href="#">format excel</a></label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" class="btn btn-lg btn-primary">Upload</button>
                                            </li>
                                            <li>
                                                <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    {{-- JS Tambah Mentee --}}
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
            
        //--------------------------------------

        $("select#jurusanMentee").change(function(event){
            event.preventDefault();
            var id = $(this).children("option:selected").val();
            $.ajax({
                url: "/admin/getProdiByIdJurusan/"+id,
                method: 'GET',
                success: function(data) {
                    // console.log(data)
                    var select = document.getElementById("prodiMentee");
                    var length = select.options.length;
                    for (i = length-1; i >= 0; i--) {
                        select.options[i] = null;
                    }
                    var select = document.getElementById("kelasId");
                    var length = select.options.length;
                    for (i = length-1; i >= 0; i--) {
                        select.options[i] = null;
                    }
                    $('select[name="kelasId"]')
                        .append($('<option />')  // Create new <option> element
                            .text("-Pilih Kelas-")           // Set textContent as "Hello"
                            .prop('selected', false)  // Mark it selected
                        );
                    $('select[name="prodiMentee"]')
                        .append($('<option />')  // Create new <option> element
                            .text("-Pilih Program Studi-")           // Set textContent as "Hello"
                            .prop('selected', false)  // Mark it selected
                        );
                    for (a = 0; a < data.length; a++){
                        // console.log(data[a].id_prodi);
                        $('select[name="prodiMentee"]')
                            .append($('<option />')  // Create new <option> element
                                .val(data[a].id_prodi)            // Set value as "Hello"
                                .text(data[a].nama_prodi)           // Set textContent as "Hello"
                                .prop('selected', false)  // Mark it selected
                            );
                    }
                }
            });
        });

        $("select#prodiMentee").change(function(event){
            event.preventDefault();
            var id = $(this).children("option:selected").val();
            $.ajax({
                url: "/admin/getKelasByIdProdi/"+id,
                method: 'GET',
                success: function(data) {
                    // console.log(data)
                    var select = document.getElementById("kelasId");
                    var length = select.options.length;
                    for (i = length-1; i >= 0; i--) {
                        select.options[i] = null;
                    }
                    $('select[name="kelasId"]')
                        .append($('<option />')  // Create new <option> element
                            .text("-Pilih Kelas-")           // Set textContent as "Hello"
                            .prop('selected', false)  // Mark it selected
                        );
                    for (a = 0; a < data.length; a++){
                        // console.log(data[a].id_prodi);
                        $('select[name="kelasId"]')
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
