<?php

namespace App\Http\Controllers;

use App\Models\Registrant;
use Illuminate\Http\Request;
use App\Exports\RegistrantExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
	public function exportRegistrant()
	{
		$data = [
			'title' => 'Export Data Pendaftaran'
		];

		return view('admin.exports.registrant-export-page', $data);
	}

	public function exportDataRegistrant(Request $request) {
		$registrants = Registrant::query();
		if($request->status != 'semua'){
			$registrants = $registrants->where('status', $request->status);
		}
		$registrants = $registrants->whereBetween('created_at', [$request->start, $request->end])
		->get();

		if($registrants->isEmpty()){
			return redirect()->route('export.registrants-view')
				->with('message', sweetAlert('Maaf!', 'Data tidak ditemukan.','info'));
		} else {
			session()->flash('message', sweetAlert('Berhasil Export Data!',$registrants->count().' Data ditemukan.','success'));
		}

		$start =  \Carbon\Carbon::parse($request->start)->format('d-m-Y');
		$end =  \Carbon\Carbon::parse($request->end)->format('d-m-Y');

		return Excel::download(new RegistrantExport($registrants),
			'Data-Pendaftaran ('.ucfirst($request->status).'_'.$start.'_'.$end.').xlsx');
	}

	public function exportDataRegistrantAll(): \Symfony\Component\HttpFoundation\BinaryFileResponse {
		$registrants = Registrant::all();

		return Excel::download(new RegistrantExport($registrants),
			'Data-Pendaftaran (Semua).xlsx');
	}
}
