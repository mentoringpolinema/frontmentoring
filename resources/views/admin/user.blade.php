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
                                        <li class="breadcrumb-item active">Users</li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Data Users </h3>
                                            <div class="nk-block-des text-soft">
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalAddPanitia"><em class="icon ni ni-user-add"></em><span>Tambah Panitia</span></a></li>
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
                                                    <p>Data Users Kegiatan Mentoring Keagamaan Politeknik Negeri Malang Tahun <?php echo date("Y");?>.</p>
                                                </div>
                                                <br>
                                                <div class="row g-gs">
                                                    <div class="col-xxl-3 col-md-6">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics">
                                                                    <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Panitia</div>
                                                                            <div class="count"> {{$totalUserPanitia}} </div>
                                                                        </div>
                                                                        <em class="icon bg-primary-dim ni ni-users"></em>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col -->
                                                    {{-- <div class="col-xxl-3 col-md-6">
                                                        <div class="card h-100">
                                                            <div class="card-inner">
                                                                <ul class="nk-store-statistics"> --}}
                                                                    {{-- <li class="item">
                                                                        <div class="info">
                                                                            <div class="title">Total Super Admin</div>
                                                                            <div class="count">2</div>
                                                                        </div>
                                                                        <em class="icon bg-secondary-dim ni ni-link-group"></em>
                                                                    </li> --}}
                                                                {{-- </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card -->
                                                    </div><!-- .col --> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Alert -->
                                        @if ((session('sukses')))
                                        <div class="alert alert-success alert-icon alert-dismissible">
                                            <div>
                                                <em class="icon ni ni-check-circle"></em> {{session('sukses')}} <button class="close" data-dismiss="alert"></button>
                                            </div>
                                        </div>
                                        @endif
                                        <!-- Table Panitia -->
                                        <div class="card card-preview">                                            
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">Data Panitia</h5>
                                                    </div>
                                                    <div class="card-tools mr-n1">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li>
                                                                <a href="#" class="search-toggle toggle-search btn btn-icon" data-target="search"><em class="icon ni ni-search"></em></a>
                                                            </li><!-- li -->                                                            
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .card-tools -->
                                                    <div class="card-search search-wrap" data-search="search">
                                                        <div class="search-content">
                                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Cari Data Panitia">
                                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                        </div>
                                                    </div><!-- .card-search -->
                                                </div><!-- .card-title-group -->
                                                <br>
                                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col"><span class="sub-text">Nama</span></th>
                                                            {{-- <th class="nk-tb-col tb-col-mb"><span class="sub-text">Username</span></th> --}}
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_user_panitia as $panitia)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$panitia->user->name}}<span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            {{-- <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">yahyahudan19</span>
                                                            </td> --}}
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$panitia->user->email}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span class="tb-status text-success">{{$panitia->status_panitia}}</span>
                                                            </td>
                                                            {{-- <td class="nk-tb-col tb-col-md">
                                                                <span class="dot bg-success d-mb-none"></span>
                                                            <span class="badge badge-sm badge-dot has-bg badge-success d-none d-mb-inline-flex">{{$panitia->status}}</span>
                                                            </td> --}}
                                                            <td class="nk-tb-col tb-col-md">
                                                                <form action="/admin/user/{{$panitia->id_panitia}}" method="post" style="display: inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-round btn-sm btn-danger" type="submit" class="fa fa-trash">Delete</button>
                                                                </form>
                                                                {{-- <a href="/admin/delUserPanitia/{{$panitia->id_panitia}}" class="btn btn-round btn-sm btn-danger"><span>Delete</span></a> --}}
                                                                <a href="#" class="btn btn-round btn-sm btn-primary" data-toggle="modal" data-target="#profile-edit"><span>Edit</span> </a>
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
    
    <!-- Added Panitia -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalAddPanitia">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Tambah Panitia</h5>
                    <div class="tab-content">
                        <form action="/admin/user/addUserPanitia" class="form-validate is-alter" method="POST">
                        @csrf
                        <div class="tab-pane active" id="data">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Nama</label>
                                        <input type="text" class="form-control form-control" id="nama_panitia" name="nama_panitia" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Email</label>
                                        <input type="text" class="form-control form-control" id="email_panitia" name="email_panitia" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Status</label>
                                        <select class="form-control" id="status" name="status_panitia" required>
                                            {{-- @foreach ($data_prodi as $prodi) --}}
                                            <option>- Pilih Status -</option>
                                            <option value="aktif">Aktif</option>
                                            <option value="tidak aktif">Tidak Aktif</option>
                                            {{-- @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Password</label>
                                        <input type="password" class="form-control form-control" id="email_panitia" name="email_panitia" required>
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary"> Tambah Panitia  </button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                        <!-- .tab-pane -->
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

    {{-- Fitur edit panitia --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="modalEditPanitia">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Panitia</h5>
                            <form action="/admin/user" class="form-validate is-alter" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row gy-4">
                                <input type="hidden" class="form-control form-control" id="id_kegiatan" name="id_kegiatan_edit" value="" required>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="form-label" for="kegiatan-name">Nama Kegiatan</label>
                                        <input type="text" class="form-control form-control" id="nama_kegiatan" name="nama_kegiatan_edit" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label" for="jenis-name">Jenis Kegiatan</label>
                                        <select class="form-control" id="jenis_kegiatan" name="jenis_kegiatan_edit" required>
                                            {{-- @foreach ($data_prodi as $prodi) --}}
                                            <option>- Jenis Kegiatan -</option>
                                            <option value="Pertemuan">Pertemuan</option>
                                            <option value="Materi">Materi</option>
                                            <option value="Kegiatan Wajib">Kegiatan Wajib</option>
                                            {{-- @endforeach --}}
                                            {{-- @foreach ($data_kegiatan as $kegiatan)
                                                <option>{{$kegiatan->minggu_kegiatan}}</option>
                                                @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="form-label" for="kegiatan-date">Tanggal Kegiatan</label>
                                        <div class="form-control-wrap">
                                            {{-- <div class="form-icon form-icon-right">
                                                <em class="icon ni ni-calendar-alt"></em>
                                            </div> --}}
                                            <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan_edit" value="" required>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label" for="kegiatan-date">Jam Kegiatan</label>
                                        <div class="form-control-wrap">
                                            <div class="form-icon form-icon-right">
                                                <em class="icon ni ni-clock"></em>
                                            </div>
                                            <input type="text" class="form-control time-picker" id="jam_kegiatan" name="jam_kegiatan" required>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label" for="kegiatan-minggu">Minggu Ke-</label>
                                        <input type="text" class="form-control form-control" id="minggu_kegiatan" name="minggu_kegiatan_edit" value="" required>
                                        <small>Contoh : 1</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {{-- <div class="form-group">
                                        <label class="form-label" for="phone-no">Detail Kegiatan</label>
                                        <textarea type="text" class="form-control form-control-lg" id="detail_kegiatan" name="detail_kegiatan" placeholder="Pertemuan dst..." required></textarea>
                                    </div> --}}
                                    <textarea name="detail_kegiatan_edit" id="detail_kegiatan_edit" required>

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
                            </form>
                        </div>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- .modal -->

    @section('jsAdd')
        <script>
        $('body').on('click', '#editUserPanitia', function (event) {
                event.preventDefault();
                var token = $("input[name='_token']").val();
                var id = $(this).data('id');
                console.log(id)
                $.ajax({
                    url: "<?php echo route('getKegiatanByID') ?>",
                    method: 'POST',
                    data: {id_kegiatan:id, _token:token},
                    // dd($data);
                    success: function(data) {
                        var d = new Date(data.options.tanggal_kegiatan);
                        const dateDB =d.getFullYear()+"-"+ ("0" + (d.getMonth() + 1)).slice(-2) +"-"+ ("0" + d.getDate()).slice(-2);
                        $("input[name='id_kegiatan_edit']").val(data.options.id_kegiatan);
                        $("input[name='nama_kegiatan_edit']").val(data.options.nama_kegiatan);
                        $("select[name='jenis_kegiatan_edit']").val(data.options.jenis_kegiatan);
                        $("input[name='tanggal_kegiatan_edit']").val(dateDB);
                        $("input[name='minggu_kegiatan_edit']").val(data.options.minggu_kegiatan);
                        $("textarea[name='detail_kegiatan_edit']").val(data.options.detail_kegiatan);
                        // initGetDataKegiatan();
                        $("textarea[name='detail_kegiatan_edit']").ckeditor();
                    }
                });
        });
        </script>

    @endsection
@stop


    
{{-- @stop --}}