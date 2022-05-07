@extends('layouts.admin.v_main_admin')

@section('title', $title)

@section('styles')

@endsection

@section('contents')
  @if (\session()->has('message'))
    {!! \session()->get('message') !!}
  @endif
  <div class="page-content">
    <div class="container-fluid">
      
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-flex align-items-center justify-content-between">
          <h4 class="mb-0 font-size-18">{{ $title }}</h4>
          
          </div>
        </div>
      </div>
      <!-- end page title -->
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="card">
            
            <div class="card-body">
              <h4 class="header-title">Tambahkan Foto ke Galeri</h4>
              <p class="card-title-desc">Foto kegiatan pada {{ getenv('APP_NAME') }}, untuk dilihat oleh pengunjung website.</p>
              <form id="form-add-news" method="post" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                  <div class="col-md-4 mb-4">
                    <label><span class="text-danger">*</span> Judul</label>
                    <input type="text" name="title" placeholder="Judul foto.."
                           minlength="5" maxlength="120"
                           value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" required>
                    @error('title')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-4 mb-4">
                    <label><span class="text-danger">*</span> Kategori</label>
                    <select type="text" name="type" class="form-control @error('type') is-invalid @enderror" required>
                      @foreach($types as $type)
                        <option value="{{ $type->id }}" {{ old('type') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                      @endforeach
                    </select>
                    @error('type')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-4 mb-4">
                    <label><span class="text-danger">*</span> Foto</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required>
                    @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-12 mb-4">
                    <label> Keterangan Foto</label>
                    <textarea type="text" name="descriptions" class="form-control @error('descriptions') is-invalid @enderror"
                              placeholder="Boleh kosong.."
                              cols="5" rows="3">{{ old('descriptions') ?? null }}</textarea>
                    @error('descriptions')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <button class="btn btn-primary" id="btnSubmit" type="submit">Tambahkan Foto</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end row -->
  
  </div> <!-- container-fluid -->
  <!-- End Page-content -->
@endsection

@section('scripts')

@endsection
