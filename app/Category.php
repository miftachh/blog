<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  	Protected $table = "tbl_category";
  	public function posts()
  	{
  		return $this->hasMany('App\PostModel','category_id');
  	}
}
