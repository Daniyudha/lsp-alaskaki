<?php
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;

class RegistrantExport extends \PhpOffice\PhpSpreadsheet\Cell\StringValueBinder implements WithCustomValueBinder, FromView
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