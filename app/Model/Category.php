<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	protected $guarded = ['id'];
	
	public function shop()
	{
		return $this->hasMany('App\Shop', 'category_ID');
	}
}
