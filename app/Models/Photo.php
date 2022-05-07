<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $id = 'id';
	protected $fillable = ['title', 'fk_photo_type', 'descriptions', 'image', 'created_at', 'updated_at'];
	public $timestamps = true;

	public function photo_type(): \Illuminate\Database\Eloquent\Relations\BelongsTo {
		return $this->belongsTo(PhotoType::class,'fk_photo_type','id');
	}
}
