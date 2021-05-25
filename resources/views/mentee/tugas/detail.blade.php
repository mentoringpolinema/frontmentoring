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
                                        <li class="breadcrumb-item"><a href="#"></a>Tugas </li>
                                        <li class="breadcrumb-item active"> Detail </li>
                                    </ul>
                                    </nav>
                                    <br>
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Detail Tugas</h3>
                                            {{-- <div class="nk-block-des text-soft">
                                                <p>Tugas Minggu 1</p>
                                            </div> --}}
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        {{-- <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Download Materi</span></a></li> --}}
                                                        <li><a href="/mentee/materi" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></li>
                                                        <li><a href="/mentee/materi" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a></li>                                                        
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="row g-gs">
                                         <div class="col-xxl-3 col-md-12">
                                            <div class="card card-preview">
                                                <div class="card-inner">
                                                    <div class="preview-block">
                                                        <div class="row gy-4">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <h4>{{$data_tugas->nama_tugas}} </h4>
                                                                    {!!$data_tugas->detail_tugas!!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                             
                                        <div class="col-lg-12 col-xxl-4">
                                            <div class="card h-100">
                                                <div class="card-inner border-bottom">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Tugas-mu</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-support">
                                                    @foreach ($data_tugasku as $tugasku)
                                                        <li class="nk-support-item">
                                                            <div class="user-avatar bg-purple-dim">
                                                                <span>TG1</span>
                                                            </div>
                                                            <div class="nk-support-content">
                                                                <div class="title">
                                                                    <span>{{$tugasku->file_tugas}}</span>
                                                                        @if ($data_tugas->materi->kegiatan->status_kegiatan == 'Open')
                                                                            <a href="/mentee/tugas/delete/{{$tugasku->id_pengumpulan_tugas}}">
                                                                                <button class="btn btn-sm btn-danger">
                                                                                    <em class="icon ni ni-trash"></em>
                                                                                        <span>Hapus
                                                                                        </span>
                                                                                </button>
                                                                            </a>
                                                                        @endif 
                                                                </div>
                                                                <span class="time">{{$tugasku->created_at->format('d M Y')}}</span>
                                                            </div>
                                                            {{-- <div class="nk-su">
                                                                <button class="btn btn-sm btn-danger">Hapus</button>
                                                            </div> --}}
                                                        </li>                                                   
                                                        @if($tugasku->status_tugas == 'Ditolak')
                                                                <li class="nk-support-item">                                                      
                                                                    <div class="col-lg-12 col-xxl-4">
                                                                        <div class="example-alert">
                                                                            <div class="alert alert-danger alert-icon">
                                                                                <em class="icon ni ni-cross-circle"></em> <strong>Mohon Maaf ! </strong> Tugas anda ditolak <span>-Panitia Mentoring 2021.</span> 
                                                                            </div>                                                       
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                        @endif
                                                        @if($tugasku->status_tugas == 'Diterima')
                                                                <li class="nk-support-item">                                                      
                                                                    <div class="col-lg-12 col-xxl-4">
                                                                        <div class="example-alert">
                                                                            <div class="alert alert-success alert-icon">
                                                                                <em class="icon ni ni-check"></em> <strong>Selamat ! </strong> Tugas anda diterima <span>-Panitia Mentoring 2021.</span> 
                                                                            </div>                                                       
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                        @endif
                                                   @endforeach
                                                </ul>
                                            </div><!-- .card -->
                                        </div>
                                         @error('file_tugas')
                                        <div class="col-lg-12 col-xxl-4">
                                            <div class="example-alert">
                                                <div class="alert alert-danger alert-icon">
                                                    <em class="icon ni ni-cross-circle"></em> <strong>Upload File Gagal ! </strong>Silahkan Coba lagi !. 
                                                </div>                                                       
                                            </div>
                                        </div>
                                         @enderror
                                         @if ($data_tugas->materi->kegiatan->status_kegiatan == 'Open')
                                         <div class="col-xxl-3 col-md-12">
                                            <div class="card card-preview">
                                                <div class="card-inner">
                                                    <div class="preview-block">
                                                        <div class="row gy-4">                                                            
                                                            <div class="col-sm-12">
                                                                <form action="/mentee/tugas/upload/{{$data_tugas->id_tugas}}" enctype="multipart/form-data" method="POST">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="id_tugas" name="id_tugas" value="{{$data_tugas->id_tugas}}" hidden>
                                                                    </div>  
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="customFileLabel">Upload File Tugas</label>
                                                                        <div class="form-control-wrap">
                                                                            <div class="custom-file">
                                                                                <input type="file" class="custom-file-input" id="file_tugas" name="file_tugas" required>
                                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>                                                                                                                       
                                                                    <div class="form-group">
                                                                        <button type="submit" class="btn btn-warning">Upload</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif                                         
                                    </div><!-- .card-preview -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
{{-- @section('script-filepond')
<script>
    const inputElement = document.querySelector('input[id="file_tugas"]');
    const pond = FilePond.create( inputElement );

    FilePond.setOptions({
        server: {
            process : '/mentee/tugas/upload/{{$data_tugas->id_tugas}}',
            revert : '/mentee/tugas/delete/{{$data_tugas->id_tugas}}',
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            }
        }
    });
</script>
@endsection --}}

@stop