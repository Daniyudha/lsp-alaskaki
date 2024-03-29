@extends('layouts.main_home')

@section('outCSS')

@endSection()

@section('contents')
<style>
::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    opacity: 0.7 !important;
}

::-moz-placeholder {
    /* Firefox 19+ */
    opacity: 0.7 !important;
}

:-ms-input-placeholder {
    /* IE 10+ */
    opacity: 0.7 !important;
}

:-moz-placeholder {
    /* Firefox 18- */
    opacity: 0.7 !important;
}
</style>
<!-- ======= Header ======= -->
<div class="bg-header-form p-1 mt-0">
    <h5 class="text-center text-white mb-0">FORM BIODATA CALON PESERTA UJI KOMPETENSI</h5>
</div>
<!-- End Header -->

<!-- main -->
<main id="main">
    @if(\Illuminate\Support\Facades\Session::has('messageBS'))
    <div class="alert alert-success mt-5 text-center" role="alert">
        Pendaftaran Berhasil. <a href="javascript:void(0)" class="alert-link">Silahkan cek Email Anda untuk melihat
            hasil pendaftaran</a>.
    </div>
    @endif
    <form action="{{ route('form-pendaftaran-post') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container mt-5 section-bg p-3 rounded-3">
            <h5><span class="text-danger">*</span> Pilih Skema Sertifikasi</h5>
            <select class="form-select @error('skema_sertifikasi') is-invalid @enderror" required
                name="skema_sertifikasi">
                <option selected>-- Pilih Skema --</option>
                <option value="1" {{ old('skema_sertifikasi') == 1 ? 'selected' : '' }}>1. MENJAHIT ALAS KAKI</option>
                <option value="2" {{ old('skema_sertifikasi') == 2 ? 'selected' : '' }}>2. PEMBUATAN POLA SECARA MANUAL
                </option>
                <option value="3" {{ old('skema_sertifikasi') == 3 ? 'selected' : '' }}>3. PEMOTONGAN (CUTTING) BAHAN
                    ALAS KAKI MENGGUNAKAN MESIN</option>
                <option value="4" {{ old('skema_sertifikasi') == 4 ? 'selected' : '' }}>4. PEMOTONGAN (CUTTING) BAHAN
                    ALAS KAKI SECARA MANUAL</option>
                <option value="5" {{ old('skema_sertifikasi') == 5 ? 'selected' : '' }}>5. PENGEMALAN ALAS KAKI</option>
                <option value="6" {{ old('skema_sertifikasi') == 6 ? 'selected' : '' }}>6. PENGKASARAN SEPATU/ ALAS KAKI
                    (ROUGHING)</option>
                <option value="7" {{ old('skema_sertifikasi') == 7 ? 'selected' : '' }}>7. PENGOPENAN ALAS KAKI DENGAN
                    MESIN</option>
                <option value="8" {{ old('skema_sertifikasi') == 8 ? 'selected' : '' }}>8. PENGOPENAN ALAS KAKI SECARA
                    MANUAL</option>
                <option value="9" {{ old('skema_sertifikasi') == 9 ? 'selected' : '' }}>9. PENGOPERASIAN MESIN INJEKSI
                    OUTSOLE</option>
                <option value="10" {{ old('skema_sertifikasi') == 10 ? 'selected' : '' }}>10. PENYELESAIAN PRODUK ALAS
                    KAKI (FINISHER)</option>
                <option value="11" {{ old('skema_sertifikasi') == 11 ? 'selected' : '' }}>11. PERAKITAN ALAS KAKI
                </option>
            </select>
            @error('skema_sertifikasi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <div class="mb-3 mt-3">
                @php
                if(old('jenis_uji')){
                $checkType = old('jenis_uji');
                } else {
                $checkType = null;
                }
                @endphp
                <p class="form-label fw-bold"><span class="text-danger">*</span> Jenis Uji</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" {{ $checkType == 'sertifikasi' ? 'checked' : '' }} type="radio"
                        name="jenis_uji" id="jenis_uji_S" value="sertifikasi" required>
                    <label class="form-check-label" for="jenis_uji_S">SERTIFIKASI</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" {{ $checkType == 'rcc' ? 'checked' : '' }} type="radio"
                        name="jenis_uji" id="jenis_uji_R" value="rcc" required>
                    <label class="form-check-label" for="jenis_uji_R">RCC</label>
                </div>
                @error('jenis_uji')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="container mt-5 mb-3 section-bg p-3 rounded">
            <div class="bg-sub p-2 rounded">
                <p class="fw-bold text-white mb-0">Data Diri</p>
            </div>
            <div class="mb-3 mt-3">
                <label for="no_ktp" class="form-label fw-bold"><span class="text-danger">*</span> No. KTP :</label>
                <input type="text" value="{{ old('no_ktp') }}" minlength="14" maxlength="18" name="no_ktp"
                    class="form-control @error('no_ktp') is-invalid @enderror" id="no_ktp" placeholder="1234567890"
                    required>
                @error('no_ktp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="nama_lengkap" class="form-label fw-bold"><span class="text-danger">*</span> Nama Lengkap
                    :</label>
                <input type="text" value="{{ old('nama_lengkap') }}" name="nama_lengkap"
                    class="form-control @error('nama_lengkap') is-invalid @enderror" minlength="3" maxlength="100"
                    id="nama_lengkap" placeholder="Alexander Purwoto" required>
                @error('nama_lengkap')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                @php
                if(old('jenis_kelamin')){
                $checkSex = old('jenis_kelamin');
                } else {
                $checkSex = null;
                }
                @endphp
                <p class="form-label fw-bold"><span class="text-danger">*</span> Jenis Kelamin :</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" {{ $checkSex == 'L' ? 'checked' : '' }} type="radio"
                        name="jenis_kelamin" id="jenis_kelamin_L" value="L" required>
                    <label class="form-check-label" for="jenis_kelamin_L">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" {{ $checkSex == 'P' ? 'checked' : '' }} type="radio"
                        name="jenis_kelamin" id="jenis_kelamin_P" value="P" required>
                    <label class="form-check-label" for="jenis_kelamin_P">Perempuan</label>
                </div>
                @error('jenis_kelamin')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="no_hp" class="form-label fw-bold"><span class="text-danger">*</span> No. Telepon :</label>
                <input type="text" value="{{ old('no_hp') }}" class="form-control @error('no_hp') is-invalid @enderror"
                    name="no_hp" id="no_hp" placeholder="081234567xxx" required>
                @error('no_hp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label fw-bold"><span class="text-danger">*</span> Email Pribadi :</label>
                <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"
                    name="email" id="email" placeholder="name@example.com" required>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="tempat_lahir" class="form-label fw-bold"><span class="text-danger">*</span> Tempat Lahir
                    :</label>
                <input type="text" value="{{ old('tempat_lahir') }}" name="tempat_lahir"
                    class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
                    placeholder="Sleman" required>
                @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tanggal_lahir" class="form-label fw-bold"><span class="text-danger">*</span> Tanggal Lahir
                    :</label>
                <div class="input-group date" id="datepicker">
                    <input type="date" value="{{ old('tanggal_lahir') }}"
                        class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"
                        name="tanggal_lahir" required>
                    <span class="input-group-append">
                        <i class="fa fa-calendar"></i>
                    </span>
                </div>
                @error('tanggal_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div> 
            <div class="bg-sub p-2 rounded mt-4">
                <p class="fw-bold text-white mb-0">Alamat</p>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="provinsi" class="form-label fw-bold"><span class="text-danger">*</span> Provinsi:</label>
                <input type="text" value="{{ old('provinsi') }}"
                    class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi"
                    placeholder="Yogyakarta" required>
                @error('provinsi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="kabupaten" class="form-label fw-bold"> <span class="text-danger">*</span>
                    Kota/Kabupaten:</label>
                <input type="text" value="{{ old('kabupaten') }}"
                    class="form-control @error('kabupaten') is-invalid @enderror" name="kabupaten" id="kabupaten"
                    placeholder="Sleman" required>
                @error('kabupaten')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="kecamatan" class="form-label fw-bold"><span class="text-danger">*</span> Kecamatan:</label>
                <input type="text" value="{{ old('kecamatan') }}"
                    class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" id="kecamatan"
                    placeholder="Turi" required>
                @error('kecamatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="kelurahan" class="form-label fw-bold"><span class="text-danger">*</span> Kelurahan:</label>
                <input type="text" value="{{ old('kelurahan') }}"
                    class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" id="kelurahan"
                    placeholder="Girikerto" required>
                @error('kelurahan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="alamat_sesuai_ktp" class="form-label fw-bold"><span class="text-danger">*</span>
                    Jalan/Desa/Dusun/RT/RW :</label>
                <input class="form-control @error('alamat_sesuai_ktp') is-invalid @enderror" name="alamat_sesuai_ktp"
                    placeholder="Jalan Demangan, Jineman RT/RW 005/006" id="alamat_sesuai_ktp"
                    value="{{ old('alamat_sesuai_ktp') }}" required>
                @error('alamat_sesuai_ktp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="kode_pos" class="form-label fw-bold">Kode Pos :</label>
                <input type="number" value="{{ old('kode_pos') }}"
                    class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" id="kode_pos"
                    placeholder="55551">
                @error('kode_pos')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="bg-sub p-2 mt-4 rounded">
                <p class="fw-bold text-white mb-0">Data Pendidikan</p>
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="pendidikan_terakhir" class="form-label fw-bold"><span class="text-danger">*</span>
                    Pendidikan Terakhir :</label>
                <select class="form-select @error('pendidikan_terakhir') is-invalid @enderror"
                    name="pendidikan_terakhir" id="pendidikan_terakhir" required>
                    <option selected>-- Pilih Pendidikan --</option>
                    <option value="S3" {{ old('pendidikan_terakhir') == 'S3' ? 'selected' : '' }}>1. S3</option>
                    <option value="S2" {{ old('pendidikan_terakhir') == 'S2' ? 'selected' : '' }}>2. S2</option>
                    <option value="S1" {{ old('pendidikan_terakhir') == 'S1' ? 'selected' : '' }}>3. S1</option>
                    <option value="D4" {{ old('pendidikan_terakhir') == 'D4' ? 'selected' : '' }}>4. D4</option>
                    <option value="D3" {{ old('pendidikan_terakhir') == 'D3' ? 'selected' : '' }}>5. D3</option>
                    <option value="D2" {{ old('pendidikan_terakhir') == 'D2' ? 'selected' : '' }}>6. D2</option>
                    <option value="D1" {{ old('pendidikan_terakhir') == 'D1' ? 'selected' : '' }}>7. D1</option>
                    <option value="SMA/SEDRAJAT" {{ old('pendidikan_terakhir') == 'SMA/SEDRAJAT' ? 'selected' : '' }}>8.
                        SMA/SEDRAJAT</option>
                    <option value="SMP" {{ old('pendidikan_terakhir') == 'SMP' ? 'selected' : '' }}>9. SMP</option>
                    <option value="SD" {{ old('pendidikan_terakhir') == 'SD' ? 'selected' : '' }}>10. SD</option>
                </select>
                @error('pendidikan_terakhir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="universitas_sekolah" class="form-label fw-bold">Perguruan
                    Tinggi/Universitas atau Sekolah :</label>
                <input type="text" value="{{ old('universitas_sekolah') }}" class="form-control
            @error('universitas_sekolah') is-invalid @enderror" name="universitas_sekolah" id="universitas_sekolah"
                    placeholder="Universitas Terbuka">
                @error('universitas_sekolah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="bidang_usaha" class="form-label fw-bold">Jenis/Bidang Usaha :</label>
                <input type="text" value="{{ old('bidang_usaha') }}"
                    class="form-control @error('bidang_usaha') is-invalid @enderror" id="bidang_usaha"
                    name="bidang_usaha" placeholder="Sepatu">
                @error('bidang_usaha')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="bg-sub p-2 mt-4 rounded">
                <p class="fw-bold text-white mb-0">Data Pekerjaan</p>
            </div>
            <div class="mb-3 mt-3">
                <label for="kantor_sekarang" class="form-label fw-bold">Nama Perusahaan/Institusi/Kantor :</label>
                <input type="text" value="{{ old('kantor_sekarang') }}" maxlength="100"
                    class="form-control @error('kantor_sekarang') is-invalid @enderror" id="kantor_sekarang"
                    name="kantor_sekarang" placeholder="PT Merah Putih">
                @error('kantor_sekarang')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="jabatan" class="form-label fw-bold">Jabatan :</label>
                <input type="text" value="{{ old('jabatan') }}" maxlength="100"
                    class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan"
                    placeholder="Direktur">
                @error('jabatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="alamat_kantor" class="form-label fw-bold">Alamat Perusahaan/Institusi/Kantor :</label>
                <input type="text" value="{{ old('alamat_kantor') }}" maxlength="255"
                    class="form-control @error('alamat_kantor') is-invalid @enderror" id="alamat_kantor"
                    name="alamat_kantor" placeholder="Alamat lengkap perusahaan/institusi/kantor">
                @error('alamat_kantor')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="phone_fax_email_kantor" class="form-label fw-bold">No. Telp/Fax/E-mail :</label>
                <input type="text" value="{{ old('phone_fax_email_kantor') }}" maxlength="100"
                    class="form-control @error('phone_fax_email_kantor') is-invalid @enderror"
                    id="phone_fax_email_kantor" name="phone_fax_email_kantor"
                    placeholder="08932342XXX / (205)90998XX / email@example.com">
                @error('phone_fax_email_kantor')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="bg-sub p-2 mt-4 rounded">
                <p class="fw-bold text-white mb-0">Unggah Dokumen (format gambar)</p>
            </div>
            <div class="mt-3 mb-3">
                <label for="foto_ktp" class="form-label fw-bold">Upload Foto Ktp</label>
                <input type="file" class="form-control @error('foto_ktp') is-invalid @enderror" id="foto_ktp"
                    name="foto_ktp">
                @error('foto_ktp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mt-3 mb-3">
                <label for="foto_ijazah" class="form-label fw-bold">Upload Foto Ijazah</label>
                <input type="file" class="form-control @error('foto_ijazah') is-invalid @enderror" id="foto_ijazah"
                    name="foto_ijazah">
                @error('foto_ijazah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mt-3 mb-3">
                <label for="sertifikat_pelatihan" class="form-label fw-bold">Upload Foto Sertifikat Pelatihan
                    (Opsional)</label>
                <input type="file" class="form-control @error('sertifikat_pelatihan') is-invalid @enderror"
                    id="sertifikat_pelatihan" name="sertifikat_pelatihan">
                @error('sertifikat_pelatihan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="container mb-5 form-group text-center">
            <button type="submit" class="btn btn-form btn-warning w-100 text-white">Submit</button>
        </div>
    </form>
</main>
<!-- End main -->

<style>
#header {
    display: none !important;
}

#topbar {
    display: none !important;
}

#footer {
    display: none !important;
}
</style>
@endSection()

@section('outJS')

@endSection()