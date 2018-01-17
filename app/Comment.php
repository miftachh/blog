<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    Protected $table = "tbl_comment";
    public function posts()
	{
		return $this->belongsToMany('App\PostModel');
	}
}
