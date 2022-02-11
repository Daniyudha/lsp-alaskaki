<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
	public function index() {
		$data = [
			'title' => 'Welcome'
		];

		return view('home.index', $data);
	}

	public function asesor() {
		$data = [
			'title' => 'Asesor Kompetensi'
		];

		return view('home.asesor', $data);
	}

	public function dokumentasi() {
		$data = [
			'title' => 'Dokumentasi'
		];

		return view('home.dokumentasi', $data);
	}

	public function faq() {
		$data = [
			'title' => 'Syarat & Ketentuan'
		];

		return view('home.faq', $data);
	}

	public function form_pendaftaran() {
		$data = [
			'title' => 'Form Pendaftaran'
		];

		return view('home.form-pendaftaran', $data);
	}

	public function fungsi_tujuan() {
		$data = [
			'title' => 'Fungsi & Tujuan'
		];

		return view('home.fungsi-tujuan', $data);
	}

	public function galeri() {
		$data = [
			'title' => 'Galeri'
		];

		return view('home.galeri', $data);
	}

	public function visi_misi(){
		$data = [
			'title' => 'Visi & Misi'
		];

		return view('home.visi-dan-misi', $data);
	}

	public function struktur_organisasi(){
		$data = [
			'title' => 'Struktur Organisasi'
		];

		return view('home.struktur-organisasi', $data);
	}

	public function latar_belakang(){
		$data = [
			'title' => 'Latar Belakang'
		];

		return view('home.latarbelakang', $data);
	}

	public function kontak(){
		$data = [
			'title' => 'Kontak Kami'
		];

		return view('home.kontak', $data);
	}

	public function peserta(){
		$data = [
			'title' => 'Peserta Kompetensi'
		];

		return view('home.peserta', $data);
	}

	public function skema(){
		$data = [
			'title' => 'Skema Kompetensi'
		];

		return view('home.skema', $data);
	}

	public function tempat(){
		$data = [
			'title' => 'Tempat Uji Kompetensi'
		];

		return view('home.tempat', $data);
	}

	public function pemegang(){
		$data = [
			'title' => 'Pemegang Sertifikat'
		];

		return view('home.pemegang', $data);
	}

	public function laporan(){
		$data = [
			'title' => 'Laporan Asesmen'
		];

		return view('home.laporan', $data);
	}

	public function upload(){
		$data = [
			'title' => 'Ungah Dokumen'
		];

		return view('home.upload', $data);
	}
}
