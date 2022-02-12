<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
	protected $table = 'registrants';
	protected $primaryKey = 'id';
	protected $fillable = ['unique_id','skema_sertifikasi','jenis_uji','no_ktp',
		'nama_lengkap','jenis_kelamin','no_hp','email','tempat_lahir','tanggal_lahir','provinsi',
		'kabupaten','kecamatan','kelurahan','kode_pos','alamat_sesuai_ktp','pendidikan_terakhir',
		'universitas_sekolah','bidang_usaha','foto_ktp','foto_ijazah','sertifikat_pelatihan',
		'status','created_at','updated_at'];
	public $timestamps = true;
}
