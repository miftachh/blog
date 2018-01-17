<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    Protected $table = "tbl_tag";

	public function posts()
	{
		return $this->belongsToMany('App\PostModel');
	}
}
