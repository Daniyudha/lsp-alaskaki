<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRegistrantRequest;
use App\Mail\SendContactMail;
use App\Models\Article;
use App\Models\Registrant;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class HomeController extends Controller {

	public function index() {
		$data = [
			'title' => 'Welcome',
			'articles' => Article::query()->limit(3)->inRandomOrder()->get()
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
		//$registrant = [
		//	'name'	=> 'Rahma',
		//	'umur' => 18,
		//	'alamat' => 'Jineman, Girikerto, Turi'
		//];
		//
		//$data["email"] = "cobavoba17@gmail.com";
		//$data["title"] = "From ItSolutionStuff.com";
		//$data["body"] = "This is Demo";
		//$pdf = PDF::loadView('email.form-view', $registrant);
		//Mail::send('email.form-sending', ['type' => 'RCC', 'title' => getSchemaCertificate(1), 'unique_id' => 'SERTIFIKASI.03.00004'], function($message) use($data, $pdf) {
		//	$message->to($data["email"], $data["email"])
		//		->subject($data["title"])
		//		->attachData($pdf->output(), "text.pdf");
		//});

		$data = [
			'title' => 'Kontak Kami'
		];

		return view('home.kontak', $data);
	}

	public function kontak_post(Request $request)
	{
		$data = [
			'name' => $request->name,
			'subject' => $request->subject,
			'messages' => $request->message,
			'email' => $request->email
		];

		Mail::to(trim(getenv('MAIL_USERNAME')))->send(new SendContactMail($data));
		return redirect()->back()->with('message',
			sweetAlert('Success!','Berhasil mengirim pesan ke '.getenv('APP_NAME'),'success'));
	}

	public function peserta(){
		$registrants = Registrant::query()
			->where('status', 'pending')->get();
		$data = [
			'title' => 'Peserta Kompetensi',
			'registrants' => $registrants
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
		$registrants = Registrant::query()
			->where('status', 'success')->get();
		$data = [
			'title' => 'Pemegang Sertifikat',
			'registrants' => $registrants
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

	public function artikel(){
		$article = Article::query()
			->paginate(9);
		$data = [
			'title' => 'Artikel',
			'articles' => $article
		];

		return view('home.artikel', $data);
	}

	public function artikel_detail($slug){
		$article = Article::query()
			->where('slug', $slug)
			->first();
		$data = [
			'title' => 'Artikel '.$article->title,
			'article' => $article
		];

		return view('home.artikel-detail', $data);
	}

	public function form_pendaftaran_post(CreateRegistrantRequest $request){
		$dataInsert = [
			'skema_sertifikasi' => $request->skema_sertifikasi,
			'jenis_uji' => $request->jenis_uji,
			'no_ktp' => $request->no_ktp,
			'nama_lengkap' => $request->nama_lengkap,
			'jenis_kelamin' => $request->jenis_kelamin,
			'no_hp' => $request->no_hp,
			'email' => $request->email,
			'tempat_lahir' => $request->tempat_lahir,
			'tanggal_lahir' => $request->tanggal_lahir,
			'provinsi' => $request->provinsi,
			'kabupaten' => $request->kabupaten,
			'kecamatan' => $request->kecamatan,
			'kelurahan' => $request->kelurahan,
			'kode_pos' => $request->kode_pos,
			'alamat_sesuai_ktp' => $request->alamat_sesuai_ktp,
			'pendidikan_terakhir' => $request->pendidikan_terakhir,
			'universitas_sekolah' => $request->universitas_sekolah,
			'bidang_usaha' => $request->bidang_usaha,
			'foto_ktp' => $this->imageRequestCreate($request, 'foto_ktp'),
			'foto_ijazah' => $this->imageRequestCreate($request, 'foto_ijazah'),
			'sertifikat_pelatihan' => $this->imageRequestCreate($request, 'sertifikat_pelatihan')
		];

		$insert = Registrant::query()->create($dataInsert);

		if($insert->id > 0){
			//@Mail::to(trim($request->email))->send(new SendFormMail($request->jenis_uji, getSchemaCertificate($request->skema_sertifikasi)));
			$insert->unique_id = setGetUniqueId($insert->id, $insert->jenis_uji, $insert->skema_sertifikasi);
			$insert->save();
			session()->flash('message', sweetAlert('Success!','Berhasil mendaftarkan Sertifikasi. Tunggu informasi selanjutnya.','success'));
		} else {
			session()->flash('message', sweetAlert('Upss!','Gagal mendaftarkan Sertifikasi','error'));
		}

		return redirect()->route('form-pendaftaran');
	}

	private function imageRequestCreate($request, $name) {
		if ($request->hasFile($name)) {
			try {
				$guessExtension = strtolower($request->file($name)->guessExtension());
				$fileName = pathinfo(
					$request->file($name)
						->getClientOriginalName(), PATHINFO_FILENAME
				);
				$time = time();
				$image = $time.'-'.Str::slug(strtolower($fileName)).'.'.$guessExtension;

				$request
					->file($name)
					->storeAs('public/'.$name.'/', $time.'-'.Str::slug(strtolower($fileName)).'.'.$guessExtension);
			} catch (\Exception $exception) {
				return redirect()->back()->with('message',
					sweetAlert('Error!','Failed Upload '.ucwords(str_replace('_',' ',$name)).'. '.$exception->getMessage(),'error')
				);
			}
		} else {
			$image = NULL;
		}
		return $image;
	}
}
