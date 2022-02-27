<?php

namespace App\Http\Controllers;

use App\Models\Registrant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegistrantController extends Controller
{
    public function index()
		{
			$registrants = Registrant::all();
			$data = [
				'title' => 'Data Registrant',
				'registrants' => $registrants
			];

			//dd($registrants);

			return view('admin.registrant.admin-registrant-list', $data);
		}

		public function edit(Registrant $registrant)
		{
			$data = [
				'title' => 'Edit '.$registrant->unique_id,
				'registrant' => $registrant
			];

			return view('admin.registrant.admin-registrant-edit', $data);
		}

		public function update(Registrant $registrant, Request $request)
		{
			try {
				$dataUpdate = [
					'skema_sertifikasi' => $registrant->skema_sertifikasi,
					'jenis_uji' => $registrant->jenis_uji,
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
					'foto_ktp' => $this->imageRequestUpdate($request, 'foto_ktp', $registrant),
					'foto_ijazah' => $this->imageRequestUpdate($request, 'foto_ijazah', $registrant),
					'sertifikat_pelatihan' => $this->imageRequestUpdate($request, 'sertifikat_pelatihan', $registrant)
				];

				Registrant::query()
					->where('id', $registrant->id)
					->update($dataUpdate);

				session()->flash('message', sweetAlert('Success!','Berhasil mengupdate Data Sertifikasi.','success'));
			} catch (\Exception $e) {
				session()->flash('message', sweetAlert('Upss!','Gagal mengupdate Data Sertifikasi. '.$e->getMessage(),'error'));
			}

			return redirect()->back();
		}

		public function updateStatusRegistrant(Registrant $registrant, Request $request)
		{
			$registrant->status = $request->update_status;
			$registrant->save();
			return redirect()->back()->with('message',
				sweetAlert('Success!','Berhasil update status pendaftaran','success'));
		}

		private function imageRequestUpdate($request, $name, $registrant) {
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
				$image = $registrant->$name;
			}
			return $image;
		}

		public function destroy(Registrant $registrant)
		{
			$registrant->delete();
			return redirect()->back()->with('message',
				sweetAlert('Success!','Berhasil menghapus pendaftaran','success'));
		}
}
