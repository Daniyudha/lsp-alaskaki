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
		$endRequest = \Carbon\Carbon::parse($request->end)->endOfDay()->format('Y-m-d H:i:s');
		$startRequest = \Carbon\Carbon::parse($request->start)->startOfDay()->format('Y-m-d H:i:s');
		$registrants = $registrants->whereBetween('created_at', [$startRequest. '00:00:00', $endRequest])
		->get();
		//dd($endRequest, $startRequest);

		if($registrants->isEmpty()){
			return redirect()->route('export.registrants-view')
				->with('message', sweetAlert('Maaf!', 'Data tidak ditemukan.','info'));
		}

		$start =  \Carbon\Carbon::parse($request->start)->format('d-m-Y');
		$end =  \Carbon\Carbon::parse($request->end)->format('d-m-Y');
		//dd($end);

		return Excel::download(new RegistrantExport($registrants),
			'Data-Pendaftaran ('.ucfirst($request->status).'_'.$start.'_'.$end.').xlsx');
	}

	public function exportDataRegistrantAll(): \Symfony\Component\HttpFoundation\BinaryFileResponse {
		$registrants = Registrant::all();

		return Excel::download(new RegistrantExport($registrants),
			'Data-Pendaftaran (Semua).xlsx');
	}
}
