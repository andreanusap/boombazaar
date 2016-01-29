<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
	protected $guarded = ['id'];
	protected $table = 'city';
	
	public function user()
	{
		return $this->belongsTo('App\Model\User');
	}
	
	public function regions()
	{
		return $this->hasMany('App\Model\Region', 'regionID');
	}
}
