@extends('layouts.admin.v_main_admin')

@section('title', $title)
<link href="<?= asset('dashboard_assets/libs/summernote/summernote-bs4.css') ?>" rel="stylesheet" type="text/css" />
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
              <h4 class="header-title">Edit Artikel ke Website</h4>
              <p class="card-title-desc">Artikel seperti berita terbaru, untuk dibaca oleh pengunjung website.</p>
              <form id="form-add-news" method="post" action="{{ route('news.update', ['news' => $article->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row justify-content-center">
                  <div class="col-md-6 mb-4">
                    <label><span class="text-danger">*</span> Judul</label>
                    <input type="text" name="title" placeholder="Judul artikel/news.."
                           minlength="5" maxlength="120"
                           value="{{ old('title', $article->title) }}" class="form-control @error('title') is-invalid @enderror" required>
                    @error('title')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-6 mb-4">
                    <label>Gambar <a href="{{ asset('storage/news_image/'.$article->image) }}" target="_blank"><span class="text-info">Lihat</span></a></label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-12 mb-4">
                    <label><span class="text-danger">*</span> Konten Thumbnail</label>
                    <textarea type="text" name="content_thumbnail" class="form-control @error('content_thumbnail') is-invalid @enderror"
                              placeholder="Potongan isi dari konten.."
                              minlength="20" maxlength="200" required cols="5" rows="3">{{ old('content_thumbnail', $article->content_thumbnail) ?? null }}</textarea>
                    @error('content_thumbnail')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-12 mb-4">
                    <label for="content_full"><span class="text-danger">*</span> Konten Full</label>
                    <textarea type="text" id="content_full" class="form-control @error('content_full') is-invalid @enderror" autofocus="autofocus"
                              name="content_full" maxlength="200000" placeholder="Konten full. Contoh : Bla bla..">{{ old('content_full', $article->content_full) ?? null }}</textarea>
                    @error('content_full')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <button class="btn btn-primary" id="btnSubmit" type="submit">Update Artikel</button>
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
  <script src="<?= asset('dashboard_assets/libs/summernote/summernote-bs4.min.js') ?>"></script>
  <script>
      $('#content_full').summernote(
          {
              height:300,
              minHeight:null,
              maxHeight:900,
              focus:!1,
              placeholder: 'Isi konten secara full...',
              toolbar: [
                  ['style', ['bold', 'italic', 'underline', 'clear']],
                  ['fontsize', ['fontsize']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['height', ['height']],
                  ['view', ['help']]
              ]
          }
      )
      $('#form-add-news').on('submit', function(e) {
          if($('#content_full').summernote('isEmpty')) {
              Swal.fire({
                  title: 'Konten Full tidak boleh kosong!'
              })
              e.preventDefault();
          } else if ($('#content_full').val().replace(/(<([^>]+)>)/ig,'').replace(/( )/, " ").length < 100) {
              Swal.fire({
                  title: 'Konten Full minimal 100 karakter!'
              })
              e.preventDefault();
          }

      })
  </script>
@endsection
