@extends('layouts.main_home')

@section('outCSS')

@endSection()

@section('contents')

    <!-- main -->
    <main id="main"> 
        <div class="container mt-5 mb-3 section-bg p-3 rounded">
            <div class="bg-sub p-2 rounded">
                <p class="fw-bold text-white mb-0">Data Diri</p>
            </div>
            <div class="mt-3 mb-3">
                <label class="form-label fw-bold" for="inputGroupFile01">Upload Foto Ktp</label>
                <input type="file" class="form-control" id="inputGroupFile01">
            </div>
            <div class="mt-3 mb-3">
                <label class="form-label fw-bold" for="inputGroupFile01">Upload Foto Ijazah</label>
                <input type="file" class="form-control" id="inputGroupFile01">
            </div>
            <div class="mt-3 mb-3">
                <label class="form-label fw-bold" for="inputGroupFile01">Upload Sertifikat Prlatihan (Opsional)</label>
                <input type="file" class="form-control" id="inputGroupFile01">
            </div>
        </div>
        <div class="container mb-5 form-group text-center">
            <button type="submit" class="btn btn-form btn-warning w-100 text-white">Submit</button>
        </div>
    </main>
    <!-- End main -->

@endSection()

@section('outJS')

@endSection()