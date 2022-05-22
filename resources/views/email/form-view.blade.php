<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FR.APL01</title>
  
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

</head>
<body>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        /*font: 12pt "Tahoma";*/
    }

    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .col-1 {
        flex: 0 0 auto;
        width: 8.33333333%;
    }

    .col-2 {
        flex: 0 0 auto;
        width: 16.66666667%;
    }

    .col-3 {
        flex: 0 0 auto;
        width: 25%;
    }

    .col-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
    }

    .col-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
    }

    .col-6 {
        flex: 0 0 auto;
        width: 50%;
    }

    .col-7 {
        flex: 0 0 auto;
        width: 58.33333333%;
    }

    .col-8 {
        flex: 0 0 auto;
        width: 66.66666667%;
    }

    .col-9 {
        flex: 0 0 auto;
        width: 75%;
    }

    .col-10 {
        flex: 0 0 auto;
        width: 83.33333333%;
    }

    .col-11 {
        flex: 0 0 auto;
        width: 91.66666667%;
    }

    .col-12 {
        flex: 0 0 auto;
        width: 100%;
    }

    .page {
        width: 21cm;
        min-height: 29.7cm;
        padding: 2cm;
        margin: 1cm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .text-break {
        word-wrap: break-word !important;
        word-break: break-word !important;
    }

    .tab {
        margin-left: 16px;
    }

    .mt-5 {
        margin-top: 3rem !important;
    }

    .mb-0 {
        margin-bottom: 0rem !important;
    }

    .mt-0 {
        margin-top: 0 !important;
    }

    .fw-bold {
        font-weight: 700 !important;
    }

    .align-middle {
        vertical-align: middle !important;
    }

    @page {
        size: A4;
        margin: 0;
    }

    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }

    table {
        caption-side: bottom;
        border-collapse: collapse;
    }

    thead,
    tbody,
    tfoot,
    tr,
    td,
    th {
        border-color: inherit;
        border-style: solid;
        border-width: 0;
    }

    .table {
        --bs-table-bg: transparent;
        --bs-table-accent-bg: transparent;
        --bs-table-striped-color: #212529;
        --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
        --bs-table-active-color: #212529;
        --bs-table-active-bg: rgba(0, 0, 0, 0.1);
        --bs-table-hover-color: #212529;
        --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        vertical-align: top;
        border-color: #dee2e6;
    }

    .table> :not(caption)>*>* {
        padding: 0.5rem 0.5rem;
        background-color: var(--bs-table-bg);
        border-bottom-width: 1px;
        box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    }

    .table>tbody {
        vertical-align: inherit;
    }

    .table>thead {
        vertical-align: bottom;
    }

    .table> :not(:last-child)> :last-child>* {
        border-bottom-color: currentColor;
    }

    .text-center {
        text-align: center !important;
    }

    .table-bordered> :not(caption)>* {
        border-width: 1px 0;
    }

    .table-bordered> :not(caption)>*>* {
        border-width: 0 1px;
    }

    .table-borderless> :not(caption)>*>* {
        border-bottom-width: 0;
    }

    .border-dark {
        border-color: #212529 !important;
    }
</style>
<div class="book">
  <div class="page">
    <h3 class="fw-bold">FR.APL.01 PERMOHONAN SERTIFIKASI KOMPETENSI</h3>
    <br>
    <p class="fw-bold">Bagian 1 : Rincian Data Pemohon Sertifikasi</p>
    <p style="text-align: justify;">Pada bagian ini, cantumlan data pribadi, data pendidikan formal serta data pekerjaan anda pada saat ini.</p>
    <p class="fw-bold mt-5">a. Data Pribadi</p>
    <div class="tab">
      <table class="table table-borderless">
        <tbody>
        <tr>
          <td class="col-4">Nama Lengkap</td>
          <td class="col-1">:</td>
          <td class="col-7 text-break">{{$nama_lengkap}}</td>
        </tr>
        <tr>
          <td class="col-4">No. KTP/NIK/Paspor</td>
          <td class="col-1">:</td>
          <td class="col-7 text-break">{{$no_ktp}}</td>
        </tr>
        <tr>
          <td class="col-4">Tempat/tgl. Lahir</td>
          <td class="col-1">:</td>
          <td class="col-7 text-break">{{ $tempat_lahir }}, {{ \Carbon\Carbon::parse($tanggal_lahir)->format('d-m-Y') }}</td>
        </tr>
        <tr>
          <td class="col-4">Jenis kelamin</td>
          <td class="col-1">:</td>
          <td class="col-7 text-break">{{ $jenis_kelamin }}</td>
        </tr>
        <tr>
          <td class="col-4">Kebangsaan</td>
          <td class="col-1">:</td>
          <td class="col-7 text-break">Indonesia</td>
        </tr>
        <tr>
          <td class="col-4">Alamat Rumah</td>
          <td class="col-1">:</td>
          <td class="col-7 text-break">
            <div>
              <p class="mt-0">{{ $alamat_sesuai_ktp }}, {{ $kelurahan }}, {{ $kecamatan }}, {{ $kabupaten }}, {{ $provinsi }}</p>
              <p class="mb-0">Kode Pos : {{ $kode_pos }}</p>
            </div>
          </td>
        </tr>
        <tr>
          <td class="col-4">No. Telepon</td>
          <td class="col-1">:</td>
          <td class="col-7 text-break">{{ $no_hp }}</td>
        </tr>
        <tr>
          <td class="col-4">E-mail</td>
          <td class="col-1">:</td>
          <td class="col-7 text-break">{{ $email }}</td>
        </tr>
        <tr>
          <td class="col-4">Kualifikasi Pendidikan</td>
          <td class="col-1">:</td>
          <td class="col-7 text-break">{{ $pendidikan_terakhir }}</td>
        </tr>
        </tbody>
      </table>
    </div>
    
    <p class="fw-bold mt-5">b. Data Pekerjaan Sekarang</p>
    <div class="tab">
      <table class="table table-borderless">
        <tbody>
        <tr>
          <td class="col-4">Nama Institusi / Perusahaan
          </td>
          <td class="col-1">:</td>
          <td class="col-7 text-break">{{ $kantor_sekarang }}</td>
        </tr>
        <tr>
          <td class="col-4">Jabatan</td>
          <td class="col-1">:</td>
          <td class="col-7 text-break">{{ $jabatan }}</td>
        </tr>
        <tr>
          <td class="col-4">Alamat Kantor</td>
          <td class="col-1">:</td>
          <td class="col-7 text-break">{{ $alamat_kantor }}</td>
        </tr>
        <tr>
          <td class="col-4">No. Telp/Fax/E-mail</td>
          <td class="col-1">:</td>
          <td class="col-7 text-break">{{ $phone_fax_email_kantor }}</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <p style="page-break-before: always">
  <div class="page">
    <p class="fw-bold">Bagian 2 : Data Sertifikasi</p>
    <p style="text-align: justify;">Tuliskan Judul dan Nomor Skema Sertifikasi yang anda ajukan berikut Daftar Unit Kompetensi sesuai kemasan pada skema sertifikasi untuk mendapatkan pengakuan sesuai dengan latar belakang pendidikan, pelatihan serta pengalaman kerja yang anda
      miliki.
    </p>
    <table class="table table-bordered border-dark">
      <tbody>
      <tr>
        <td rowspan="2" class="col-3 text-center">Skema Sertifikasi (KKNI/Okupasi/Klaster)</td>
        <td class="col-2">Judul</td>
        <td class="col-1 text-center">:</td>
        <td class="col-6 text-break">{{ getSchemaCertificate($skema_sertifikasi) }}</td>
      </tr>
      <tr>
        <td rowspan="2" class="col-2">Nomor</td>
        <td class="col-1 text-center">:</td>
        <td class="col text-break">{{ $id }}</td>
      </tr>
      </tbody>
      <tbody>
      <tr>
        <td rowspan="5" colspan="2" class="col-3">Tujuan Asesmen
        </td>
        <td class="col-1 text-center">:</td>
        <td class="col-6 text-break">
          <input class="form-check-input" {{ $jenis_uji == 'sertifikasi' ? 'checked':'' }} type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Sertifikasi
          </label>
        </td>
      </tr>
      <tr>
        <td class="col-1 text-center"></td>
        <td class="col text-break">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Sertifikasi Ulang
          </label>
        </td>
      </tr>
      <tr>
        <td class="col-1 text-center"></td>
        <td class="col text-break">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Pengakuan Kompetensi Terkini (PKT)
          </label>
        </td>
      </tr>
      <tr>
        <td class="col-1 text-center"></td>
        <td class="col text-break">
          <input class="form-check-input" {{ $jenis_uji == 'rcc' ? 'checked':'' }} type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Rekognisi Pembelajaran Lampau
          </label>
        </td>
      </tr>
      <tr>
        <td class="col-1 text-center"></td>
        <td class="col text-break">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Lainnya
          </label>
        </td>
      </tr>
      </tbody>
    </table>
    
    <p class="fw-bold mt-5">Daftar Unit Kompetensi sesuai kemasan:</p>
    <table class="table table-bordered border-dark">
      <thead>
      <tr>
        <th scope="col" class="text-center col-1
                                align-middle">No.</th>
        <th scope="col" class="text-center col-3
                                align-middle">Kode Unit</th>
        <th scope="col" class="text-center col-5
                                align-middle">Judul Unit</th>
        <th scope="colclass=" class="text-center col-2
                                align-middle">Jenis Standar (Standar Khusus/Standar Internasional/SKKNI)</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <th scope="row" class="text-center">1</th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row" class="text-center">2</th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row" class="text-center">3</th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row" class="text-center">4</th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row" class="text-center">5</th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      </tbody>
    </table>
  </div>
  <p style="page-break-before: always">
  <div class="page">
    <p class="fw-bold">Bagian 3 : Bukti Kelengkapan Pemohon</p>
    <p class="fw-bold">Bukti Persyaratan Dasar Pemohon</p>
    <table class="table table-bordered border-dark">
      <thead>
      <tr>
        <th rowspan="2" scope="col" class="text-center col-1
                                align-middle">No.</th>
        <th rowspan="2" scope="col" class="text-center col-7
                                align-middle">Bukti Persyaratan Dasar</th>
        <th rowspan="2" scope="col" class="text-center col-2
                                align-middle">Memenuhi Syarat</th>
        <th rowspan="2" scope="col" class="text-center col-2
                                align-middle">Tidak Memenuhi Syarat</th>
        <th rowspan="2" scope="col" class="text-center col-2
                                align-middle">Tidak Ada</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <th scope="row" class="text-center">1</th>
        <td>Upload Foto KTP</td>
        <td class="text-center">
          <input class="form-check-input" checked type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault"></label>
        </td>
        <td class="text-center">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault"></label>
        </td>
        <td class="text-center">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault"></label>
        </td>
      </tr>
      <tr>
        <th scope="row" class="text-center">2</th>
        <td>Upload Foto Ijazah</td>
        <td class="text-center">
          <input class="form-check-input" checked type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault"></label>
        </td>
        <td class="text-center">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault"></label>
        </td>
        <td class="text-center">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault"></label>
        </td>
      </tr>
      <tr>
        <th scope="row" class="text-center">3</th>
        <td>Upload Sertifikat Pelatihan (Opsional)</td>
        <td class="text-center">
          <input class="form-check-input" {{ !empty($sertifikat_pelatihan) ? 'checked' : '' }} type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault"></label>
        </td>
        <td class="text-center">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault"></label>
        </td>
        <td class="text-center">
          <input class="form-check-input" {{ empty($sertifikat_pelatihan) ? 'checked' : '' }} type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault"></label>
        </td>
      </tr>
      </tbody>
    </table>
    
    <table class="table table-bordered border-dark mt-5">
      <tbody>
      <tr>
        <td rowspan="3" class="col-6">
          <p class="mb-0 mt-0"><b>Rekomendasi (diisi oleh LSP):</b></p>
          <p class="mb-0 mt-0">Berdasarkan ketentuan persyaratan dasar, maka pemohon:</p>
          <p class="mb-0 mt-0"><b>Diterima/ Tidak diterima *)</b> sebagai peserta sertifikasi</p>
          <p class="mb-0 mt-0">*coret yang tidak sesuai</p>
        </td>
        <td colspan="3" class="col-6"><b>Pemohon/Kandidat :</b></td>
      </tr>
      <tr>
        <td colspan="2">Nama</td>
        <td class="col-4">{{ $nama_lengkap }}</td>
      </tr>
      <tr>
        <td colspan="2">Tanda tangan/Tanggal</td>
        <td class="col-4"></td>
      </tr>
      </tbody>
      <tbody>
      <tr>
        <td rowspan="4" class="col-6">
          <p class="mb-0 mt-0"><b>Catatan :</b></p>
        </td>
        <td colspan="3" class="col-6"><b>Admin LSP :</b></td>
      </tr>
      <tr>
        <td colspan="2">Nama</td>
        <td class="col-4"></td>
      </tr>
      <tr>
        <td colspan="2">No. Reg</td>
        <td class="col-4"></td>
      </tr>
      <tr>
        <td colspan="2">Tanda tangan/Tanggal</td>
        <td class="col-4"></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script> -->
</body>

</html>