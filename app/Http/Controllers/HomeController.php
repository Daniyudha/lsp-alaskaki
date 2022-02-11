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
			'title' => 'Visi Misi'
		];

		return view('home.visi-dan-misi', $data);
	}
}
