<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;

class UpdateRegistrantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array {
        return [
            'skema_sertifikasi' => [
							'required',
							Rule::in(['1','2','3','4','5','6','7','8','9','10','11'])
						],
            'jenis_uji' => [
							'required',
							Rule::in(['sertifikasi','rcc'])
						],
            'no_ktp' => 'required|numeric',
            'nama_lengkap' => 'required|string|max:100|min:3',
            'jenis_kelamin' => [
							'required',
							Rule::in(['L','P'])
						],
            'no_hp' => 'required|numeric',
            'email' => 'required|email',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'provinsi' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'kode_pos' => 'required|numeric',
            'alamat_sesuai_ktp' => 'required|string|max:255|min:5',
            'pendidikan_terakhir' => [
							'required',
							Rule::in(['S3','S2','S1','D4','D3','D2','D1','SMA/SEDRAJAT','SMP','SD'])
						],
            'universitas_sekolah' => 'required|string',
            'bidang_usaha' => 'nullable|string',
            'foto_ktp' => 'nullable|image|mimes:jpeg,png,jpg',
            'foto_ijazah' => 'nullable|image|mimes:jpeg,png,jpg',
            'sertifikat_pelatihan' => 'nullable|image|mimes:jpeg,png,jpg'
        ];
    }
}
