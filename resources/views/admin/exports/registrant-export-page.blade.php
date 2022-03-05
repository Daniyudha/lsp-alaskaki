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
              <form method="post" action="{{ route('export.registrants-all-post') }}">
                @csrf
                <button class="btn btn-info float-right" type="submit">Export Semua Data</button>
              </form>
              <h4 class="header-title">Export Data Pendaftaran</h4>
              <p class="card-title-desc">Data pendaftaran berasal dari pendaftar.</p>
              <form id="formStatus" method="post" action="{{ route('export.registrants-post') }}">
                @csrf
                <div class="row justify-content-center">
                  <div class="col-md-4 mb-4">
                    <label>Tanggal Mulai</label>
                    <input type="date" name="start" value="{{ old('end', date('Y-m-d')) }}" class="form-control @error('start') is-invalid @enderror" required>
                    @error('start')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-4 mb-4">
                    <label>Tanggal Selesai</label>
                    <input type="date" name="end" value="{{ old('end', date('Y-m-d')) }}" class="form-control @error('end') is-invalid @enderror" required>
                    @error('end')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-4 mb-4">
                    <label>Status</label>
                    <select class="custom-select @error('status') is-invalid @enderror" name="status" required>
                      <option value="semua" {{ old('status') == 'semua' ? 'selected' : '' }}> Semua</option>
                      <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}> Pending</option>
                      <option value="success" {{ old('status') == 'success' ? 'selected' : '' }}> Success</option>
                      <option value="cancel" {{ old('status') == 'cancel' ? 'selected' : '' }}> Cancel</option>
                    </select>
                    @error('status')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col text-center">
                      <button class="btn btn-primary" id="btnSubmit" type="submit">Export</button>
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
