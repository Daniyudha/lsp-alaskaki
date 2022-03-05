<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
		protected $table = 'articles';
		protected $primaryKey = 'id';
		protected $fillable = ['title','slug','content_thumbnail','content_full','image','created_at','updated_at'];
}
