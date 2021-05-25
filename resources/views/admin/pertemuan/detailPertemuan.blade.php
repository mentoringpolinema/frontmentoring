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
                                                            <h4 class="nk-block-title">Detail pertemuan</h4>
                                                        </div>
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                        <div class="nk-block-head-content">
                                                        <a href="/admin/pertemuan" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                                        <a href="/admin/pertemuan" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    </div>
                                                    </div>                                                    
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="nk-data data-list">
                                                        <div class="data-head">
                                                            <h6 class="overline-title">Detail {{$data_pertemuan->nama_pertemuan}} </h6>
                                                        </div>
                                                        <div class="data-item" data-toggle="modal" data-target="#modalEditPertemuan" id="editPertemuan" data-id="{{$data_pertemuan->id_pertemuan}}">
                                                            <div class="data-col">
                                                                <span class="data-label">Pertemuan </span>
                                                                <span class="data-value">{{$data_pertemuan->nama_pertemuan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->                                                        
                                                        <div class="data-item" data-toggle="modal" data-target="#modalEditPertemuan" id="editPertemuan" data-id="{{$data_pertemuan->id_pertemuan}}">
                                                            <div class="data-col">
                                                                <span class="data-label">Nama Mentor</span>
                                                                <span class="data-value">{{$data_pertemuan->kelompok->mentor->nama_mentor}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more "><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#modalEditPertemuan" id="editPertemuan" data-id="{{$data_pertemuan->id_pertemuan}}">
                                                            <div class="data-col">
                                                                <span class="data-label">Minggu Ke-</span>
                                                                <span class="data-value text-soft">{{$data_pertemuan->kegiatan->minggu_kegiatan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->                                                        
                                                        <div class="data-item" data-toggle="modal" data-target="#modalEditPertemuan" id="editPertemuan" data-id="{{$data_pertemuan->id_pertemuan}}">
                                                            <div class="data-col">
                                                                <span class="data-label">Tanggal</span>
                                                                {{-- <?php 
                                                                    // $date = Date('d M Y', strtotime($data_pertemuan->kegiatan->tanggal_kegiatan));

                                                                // ?>
                                                                {{-- <span class="tb-amount">{{$date}}</span> --}}
                                                                <span class="data-value">{{$data_pertemuan->kegiatan->tanggal_kegiatan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#modalEditPertemuan" id="editPertemuan" data-id="{{$data_pertemuan->id_pertemuan}}">
                                                            <div class="data-col">
                                                                <span class="data-label">Link</span>
                                                                <span class="data-value">{{$data_pertemuan->link_pertemuan}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#modalEditPertemuan" id="editPertemuan" data-id="{{$data_pertemuan->id_pertemuan}}">
                                                            <div class="data-col">
                                                                <span class="data-label">Detail</span>
                                                                <span class="data-value">{!!$data_pertemuan->detail_pertemuan!!}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#modalEditPertemuan" id="editPertemuan" data-id="{{$data_pertemuan->id_pertemuan}}">
                                                            <div class="data-col">
                                                                <span class="data-label">Status</span>
                                                                <span class="data-value">{{$data_pertemuan->kegiatan->status_kegiatan}}</span>
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

<!-- Modal Update pertemuan -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalEditPertemuan">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Edit Pertemuan</h5>
                    <form action="/admin/editPertemuan" class="form-validate is-alter" method="POST">
                        @csrf
                        @method('PUT')
                    <div class="tab-content">
                        <div class="tab-pane active" id="data">
                            <div class="row gy-4">
                                <input type="hidden" class="form-control form-control" id="id_pertemuan" name="id_pertemuan_edit" value="" required>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="nama_pertemuan">Nama Pertemuan</label>
                                        <input type="text" class="form-control form-control-lg" id="nama_pertemuan" name="nama_pertemuan_edit" placeholder="Enter Nama Pertemuan">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Mentor</label>
                                        <select class="form-select" id="mentor_pertemuan" name="mentor_pertemuan_edit" data-ui="lg" required>
                                            <option>- Pilih Mentor -</option>
                                            @foreach ($data_kelompok as $kelompok)                                            
                                            <option value="{{$kelompok->id_kelompok}}">{{$kelompok->mentor->nama_mentor}} : Kelompok - {{$kelompok->nama_kelompok}}</option>
                                            @endforeach
                                        </select>
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Kegiatan</label>
                                        <select class="form-select" id="minggu_kegiatan" name="minggu_kegiatan_edit" data-ui="lg" required>
                                            <option>-Pilih Kegiatan-</option>
                                            @foreach ($data_kegiatan as $kegiatan)
                                            <option value="{{$kegiatan->id_kegiatan}}">{{$kegiatan->nama_kegiatan}} : Minggu Ke - {{$kegiatan->minggu_kegiatan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>                
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="form-label" for="link_pertemuan">Link Pertemuan</label>
                                        <input type="text" class="form-control form-control-lg" id="link_pertemuan" name="link_pertemuan_edit" placeholder="Enter Link" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="link_pertemuan">Detail Pertemuan</label>
                                    {{-- <textarea class="form-control form-control-lg" id="detail_pertemuan" name="detail_pertemuan_edit">
                                    </textarea> --}}
                                    <textarea type="text"
                                        class="form-control form-control"
                                        id="detail_pertemuan"
                                        name="detail_pertemuan_edit"
                                        value="{!!$data_pertemuan->id_pertemuan!!}">{!!$data_pertemuan->detail_pertemuan!!}
                                    </textarea>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button class="btn btn-lg btn-primary" type="submit">Update</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- .tab-content -->
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
</div><!-- .modal -->

@section('jsAdd')
        <script>
        $('body').on('click', '#editPertemuan', function (event) {
                event.preventDefault();
                var token = $("input[name='_token']").val();
                var id = $(this).data('id');
                // console.log(id)
                $.ajax({
                    url: "<?php echo route('getPertemuanByID') ?>",
                    method: 'POST',
                    data: {id_pertemuan:id, _token:token},
                    success: function(data) {
                        $("input[name='id_pertemuan_edit']").val(data.pertemuan.id_pertemuan);
                        $("input[name='nama_pertemuan_edit']").val(data.pertemuan.nama_pertemuan);
                        $("input[name='link_pertemuan_edit']").val(data.pertemuan.link_pertemuan);
                        $("textarea[name='detail_pertemuan_edit']").val(data.pertemuan.detail_pertemuan);
                        $("textarea[name='detail_pertemuan_edit']").ckeditor();
                        $("select[name='mentor_pertemuan_edit']").val(data.kelompok.id_kelompok).change();
                        $("select[name='minggu_kegiatan_edit']").val(data.kegiatan.id_kegiatan).change();
                    }
                });
        });
        </script>
    @endsection
@stop
