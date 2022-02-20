@extends('layouts.main_home')

@section('outCSS')
  <!-- DataTables -->
  <link href="{{ asset('dashboard_assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('dashboard_assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
  
  <!-- Responsive datatable examples -->
  <link href="{{ asset('dashboard_assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endSection()

@section('contents')

    <main id="main" data-aos="fade-up">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
              <h2>{{ $title }}</h2>
            </div>

        </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
        <div class="container">
          <table id="datatable-peserta" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Skema</th>
              <th>Dibuat</th>
            </tr>
            </thead>
            <tbody>
            @foreach($registrants as $registrant)
              <tr>
                <td data-order="{{ $registrant->id }}">{{ $registrant->unique_id }}</td>
                <td>{{ $registrant->nama_lengkap }}</td>
                <td>{{ getSchemaCertificate($registrant->skema_sertifikasi) }}</td>
                <td>
                  <span data-toggle="tooltip" data-placement="top" title="{{ \Carbon\Carbon::parse($registrant->created_at)->diffForHumans() }}">
                    {{ \Carbon\Carbon::parse($registrant->created_at)->format('d-m-Y H:i') }}
                  </span>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        </section>

    </main><!-- End #main -->

@endSection()

@section('outJS')
  <!-- Required datatable js -->
  <script src="{{ asset('dashboard_assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('dashboard_assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <!-- Responsive examples -->
  <script src="{{ asset('dashboard_assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('dashboard_assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
  <script>
    $(document).ready(function() {
        let table = $('#datatable-peserta')

        let t = table.DataTable({
            'order': [ 0, 'desc' ]
        })
    })
  </script>
@endSection()