<?php
namespace App\Exports;

use App\Models\Registrant;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RegistrantExport implements FromView
{
	private $registrants;

	public function __construct($registrants)
	{
		$this->registrants = $registrants;
	}

	public function view(): View
	{

		return view('admin.exports.registrant-export', [
			'registrants' => $this->registrants
		]);
	}
}