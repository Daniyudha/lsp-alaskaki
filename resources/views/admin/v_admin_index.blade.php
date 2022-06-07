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
  
          <div class="row">
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                      <h5 class="font-size-14">Skema Sertifikasi</h5>
                    </div>
                    <div class="avatar-xs">
                      <span class="avatar-title rounded-circle bg-primary">
                          <i class="dripicons-bookmarks"></i>
                      </span>
                    </div>
                  </div>
                  <h4 class="m-0 align-self-center">11</h4>
                </div>
              </div>
            </div>
    
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                      <h5 class="font-size-14">Asesor Kompetensi</h5>
                    </div>
                    <div class="avatar-xs">
                      <span class="avatar-title rounded-circle bg-primary">
                          <i class="dripicons-briefcase"></i>
                      </span>
                    </div>
                  </div>
                  <h4 class="m-0 align-self-center">12</h4>
                </div>
              </div>
            </div>
    
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                      <h5 class="font-size-14">Pemegang Sertifikat</h5>
                    </div>
                    <div class="avatar-xs">
                      <span class="avatar-title rounded-circle bg-primary">
                          <i class="dripicons-trophy"></i>
                      </span>
                    </div>
                  </div>
                  <h4 class="m-0 align-self-center">{{ \App\Models\Registrant::query()->where('status', 'success')->count() }}</h4>
                </div>
              </div>
            </div>
    
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                      <h5 class="font-size-14">Tempat Uji Kompetensi</h5>
                    </div>
                    <div class="avatar-xs">
                      <span class="avatar-title rounded-circle bg-primary">
                          <i class="dripicons-map"></i>
                      </span>
                    </div>
                  </div>
                  <h4 class="m-0 align-self-center">10</h4>
                </div>
              </div>
            </div>
  
          </div>
          <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

@section('scripts')

@endsection
