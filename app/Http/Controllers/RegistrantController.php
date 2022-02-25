<?php

namespace App\Http\Controllers;

use App\Models\Registrant;
use Illuminate\Http\Request;

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
			//dd($registrant, $request);
			$data = [
				'title' => 'Edit '.$registrant->unique_id,
				'registrant' => $registrant
			];

			return view('admin.registrant.admin-registrant-edit', $data);
		}

		public function update(Registrant $registrant, Request $request)
		{
			dd($registrant, $request);
		}

		public function destroy(Registrant $registrant)
		{
			$registrant->delete();
			return redirect()->back()->with('message',
				sweetAlert('Success!','Berhasil menghapus pendaftaran','success'));
		}
}
