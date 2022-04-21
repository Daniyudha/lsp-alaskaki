<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $id = 'id';
	protected $fillable = ['title', 'type', 'descriptions', 'image', 'created_at', 'deleted_at'];
	public $timestamps = true;
}
