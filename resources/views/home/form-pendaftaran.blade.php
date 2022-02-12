@extends('layouts.main_home')

@section('outCSS')

@endSection()

@section('contents')
  <!-- ======= Header ======= -->
  <div class="bg-header-form p-1">
    <h5 class="text-center text-white mb-0">FORM BIODATA CALON PESERTA UJI KOMPETENSI</h5>
  </div>
  <!-- End Header -->
  
  <!-- main -->
  <main id="main">
    <div class="container mt-5 section-bg p-3 rounded-3">
      <h5><span class="text-danger">*</span> Pilih Skema Sertifikasi</h5>
      <select class="form-select" aria-label="Default select example">
        <option selected>-- Pilih Skema --</option>
        <option value="1">1. MENJAHIT ALAS KAKI</option>
        <option value="2">2. PEMBUATAN POLA SECARA MANUAL</option>
        <option value="3">3. PEMOTONGAN (CUTTING) BAHAN ALAS KAKI MENGGUNAKAN MESIN</option>
        <option value="4">4. PEMOTONGAN (CUTTING) BAHAN ALAS KAKI SECARA MANUAL</option>
        <option value="5">5. PENGEMALAN ALAS KAKI</option>
        <option value="6">6. PENGKASARAN SEPATU/ ALAS KAKI (ROUGHING)</option>
        <option value="7">7. PENGOPENAN ALAS KAKI DENGAN MESIN</option>
        <option value="8">8. PENGOPENAN ALAS KAKI SECARA MANUAL</option>
        <option value="9">9. PENGOPERASIAN MESIN INJEKSI OUTSOLE</option>
        <option value="10">10. PENYELESAIAN PRODUK ALAS KAKI (FINISHER)</option>
        <option value="11">11. PERAKITAN ALAS KAKI</option>
      </select>
      <div class="mb-3 mt-3">
        <p class="form-label fw-bold"><span class="text-danger">*</span> Jenis Uji</p>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
          <label class="form-check-label" for="inlineRadio1">SERTIFIKASI</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
          <label class="form-check-label" for="inlineRadio2">RCC</label>
        </div>
      </div>
    </div>
    
    <div class="container mt-5 mb-3 section-bg p-3 rounded">
      <div class="bg-sub p-2 rounded">
        <p class="fw-bold text-white mb-0">Data Diri</p>
      </div>
      <div class="mb-3 mt-3">
        <label for="exampleFormControlInput1" class="form-label fw-bold"><span class="text-danger">*</span> No. KTP :</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="No. KTP" required>
      </div>
      <div class="mb-3 mt-3">
        <label for="exampleFormControlInput1" class="form-label fw-bold"><span class="text-danger">*</span> Nama Lengkap :</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap" required>
      </div>
      <div class="mb-3 mt-3">
        <p class="form-label fw-bold"><span class="text-danger">*</span> Jenis Kelamin :</p>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
          <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
          <label class="form-check-label" for="inlineRadio2">Perempuan</label>
        </div>
      </div>
      <div class="mb-3 mt-3">
        <label for="exampleFormControlInput1" class="form-label fw-bold"><span class="text-danger">*</span> No. Telepon :</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="No. Telepon yang aktif" required>
      </div>
      <div class="mb-3 mt-3">
        <label for="exampleFormControlInput1" class="form-label fw-bold"><span class="text-danger">*</span> Email Pribadi :</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
      </div>
      <div class="mb-3 mt-3">
        <label for="exampleFormControlInput1" class="form-label fw-bold"><span class="text-danger">*</span> Tempat Lahir :</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="No. KTP" required>
      </div>
      <form>
        <div class="form-group">
          <label for="date" class="form-label fw-bold"><span class="text-danger">*</span> Tanggal Lahir :</label>
          <div class="input-group date" id="datepicker">
            <input type="text" class="form-control" required>
            <span class="input-group-append">
              <span class="input-group-text bg-white d-block">
                <i class="fa fa-calendar"></i>
              </span>
            </span>
          </div>
        </div>
      </form>
      <form class="form-horizontal" method="post">
        <div class="form-group mb-3 mt-3">
          <label class="form-label fw-bold"><span class="text-danger">*</span> Provinsi:</label>
          <div>
            <select class="form-control" name="provinsi" id="provinsi">
              <option></option>
            </select>
            <img src="assets/img/loading.gif" width="35" id="load1" style="display:none;" />
          </div>
        </div>
        <div class="form-group mb-3 mt-3">
          <label class="form-label fw-bold" > <span class="text-danger">*</span> Kota/Kabupaten:</label>
          <div>
            <select class="form-control" name="kota" id="kota">
              <option></option>
            </select>
            <img src="asset/img/loading.gif" width="35" id="load2" style="display:none;" />
          </div>
        </div>
        <div class="form-group mb-3 mt-3">
          <label class="form-label fw-bold" ><span class="text-danger">*</span> Kecamatan:</label>
          <div>
            <select class="form-control" name="kecamatan" id="kecamatan">
              <option></option>
            </select>
            <img src="asset/img/loading.gif" width="35" id="load3" style="display:none;" />
          </div>
        </div>
        <div class="form-group mb-3 mt-3">
          <label class="form-label fw-bold" ><span class="text-danger">*</span> Kelurahan:</label>
          <div>
            <select class="form-control" name="kelurahan" id="kelurahan">
              <option></option>
            </select>
          </div>
        </div>
      </form>
      <div class="mb-3 mt-3">
        <label for="exampleFormControlInput1" class="form-label fw-bold"><span class="text-danger">*</span> Kode Pos :</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="xxxxx" required>
      </div>
      <div class="mb-3 mt-3">
        <label for="exampleFormControlTextarea1" class="form-label fw-bold"><span class="text-danger">*</span> Alamat Sesuai KTP :</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      
      <div class="bg-sub p-2 mt-4 rounded">
        <p class="fw-bold text-white mb-0">Data Pendidikan</p>
      </div>
      <div class="form-group mb-3 mt-3">
        <label class="form-label fw-bold" ><span class="text-danger">*</span> Pendidikan Terakhir :</label>
        <select class="form-select" aria-label="Default select example">
          <option selected>-- Pilih Pendidikan --</option>
          <option value="1">1. S3</option>
          <option value="2">2. S2</option>
          <option value="3">3. S1</option>
          <option value="4">4. D4</option>
          <option value="5">5. D3</option>
          <option value="6">6. D2</option>
          <option value="7">7. D1</option>
          <option value="8">8. SMA/SEDRAJAT</option>
          <option value="9">9. SMP</option>
          <option value="10">10. SD</option>
        </select>
      </div>
      <div class="mb-3 mt-3">
        <label for="exampleFormControlInput1" class="form-label fw-bold"><span class="text-danger">*</span> Perguruan Tinggi/Universitas atau Sekolah :</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Lembaga atau Institusi Pendidikan">
      </div>
      <div class="mb-3 mt-3">
        <label for="exampleFormControlInput1" class="form-label fw-bold"><span class="text-danger">*</span> Jenis/Bidang Usaha :</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Bidang Usaha Tempat Praktek" required>
      </div>

      <div class="bg-sub p-2 mt-4 rounded">
        <p class="fw-bold text-white mb-0">Unggah Dokumen</p>
      </div>
      <div class="mt-3 mb-3">
        <label class="form-label fw-bold" for="inputGroupFile01"><span class="text-danger">*</span> Upload Foto Ktp</label>
        <input type="file" class="form-control" id="inputGroupFile01" required>
      </div>
      <div class="mt-3 mb-3">
        <label class="form-label fw-bold" for="inputGroupFile01"><span class="text-danger">*</span> Upload Foto Ijazah</label>
        <input type="file" class="form-control" id="inputGroupFile01" required>
      </div>
      <div class="mt-3 mb-3">
        <label class="form-label fw-bold" for="inputGroupFile01">Upload Sertifikat Prlatihan (Opsional)</label>
        <input type="file" class="form-control" id="inputGroupFile01">
      </div>
    </div>
    <div class="container mb-5 form-group text-center">
      <a href="#"><button type="submit" class="btn btn-form btn-warning w-100 text-white">Submit</button></a>
    </div>
  </main>
  <!-- End main -->
@endSection()

@section('outJS')

@endSection()