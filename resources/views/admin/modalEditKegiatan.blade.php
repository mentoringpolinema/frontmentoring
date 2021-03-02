
{{-- Fitur edit kegiatan --}}
<div class="modal fade" tabindex="-1" role="dialog" id="{{ $modalKegiatan }}">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Edit Kegiatan</h5>
                <div class="tab-content">
                    <div class="tab-pane active" id="personal">
                        <form action="/admin/kegiatan/editKegiatan" class="form-validate is-alter" method="POST">
                        {{ csrf_field() }}
                        <div class="row gy-4">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label class="form-label" for="kegiatan-name">Nama Kegiatan</label>
                                    <input type="text" class="form-control form-control" id="nama_kegiatan" name="nama_kegiatan" value="{{ $namaKegiatan }}" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="form-label" for="jenis-name">Jenis Kegiatan</label>
                                     <select class="form-control" id="jenis_kegiatan" name="jenis_kegiatan" required>
                                        {{-- @foreach ($data_prodi as $prodi) --}}
                                        <option>- Jenis Kegiatan -</option>
                                        <option value="Pertemuan" <?php if($jenisKegiatan == "Pertemuan"){ ?> selected <?php } ?>>Pertemuan</option>
                                        <option value="Materi" <?php if($jenisKegiatan == "Materi"){ ?> selected <?php } ?>>Materi</option>
                                        <option value="Opening Mentoring" <?php if($jenisKegiatan == "Opening Mentoring"){ ?> selected <?php } ?>>Opening Mentoring</option>
                                        <option value="Closing Mentoring" <?php if($jenisKegiatan == "Closing Mentoring"){ ?> selected <?php } ?>>Closing Mentoring</option>
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
                                        <input type="date" class="form-control" id="tanggal_kegiatan" name="tanggal_kegiatan" value="{{$tglKegiatan}}" required>
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
                                    <input type="text" class="form-control form-control" id="minggu_kegiatan" name="minggu_kegiatan" value="{{ $mingguKegiatan }}" required>
                                    <small>Contoh : 1</small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                {{-- <div class="form-group">
                                    <label class="form-label" for="phone-no">Detail Kegiatan</label>
                                    <textarea type="text" class="form-control form-control-lg" id="detail_kegiatan" name="detail_kegiatan" placeholder="Pertemuan dst..." required></textarea>
                                </div> --}}
                                <textarea id="detail_kegiatan_edit" name="detail_kegiatan">
                                    {{ $detailKegiatan }}
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
                    <div class="tab-pane" id="materi">
                        <form action="/admin/addProdi" class="form-validate is-alter" method="POST">
                        {{ csrf_field() }}
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Nama Prodi</label>
                                    <input type="text" class="form-control form-control-lg" id="nama_prodi" name="nama_prodi" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l2">Singkatan Prodi</label>
                                    <input type="text" class="form-control form-control-lg" id="singkatan_prodi" name="singkatan_prodi" value="">
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" class="btn btn-lg btn-primary">Tambah Prodi</button>
                                    </li>
                                    <li>
                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </form>
                    </div><!-- .tab-pane -->
                </div><!-- .tab-content -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div>
<!-- .modal -->