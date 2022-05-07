<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoType extends Model
{
	protected $table = 'photo_types';
	protected $id = 'id';
	protected $fillable = ['name', 'slug', 'created_at', 'updated_at'];
	public $timestamps = true;

	public function photos(): \Illuminate\Database\Eloquent\Relations\HasMany {
		return $this->hasMany(Photo::class,'fk_photo_type','id');
	}
}
