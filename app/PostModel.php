<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
  	protected $table = "tbl_add_post";

  	public function category()
  	{
  		return $this->belongsTo('App\Category');
  	}

  	public function tags()
  	{
  		return $this->belongsToMany('App\Tag');
  	}

  	public function comment()
  	{
  		return $this->hasMany('App\Comment','post_model_id')->where('approved','0');
  	}

    public function commentcount()
    {
      return $this->hasMany('App\Comment','post_model_id');
    }
}
