<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EventMessages extends Model {
	//
	protected $guarded = [ 
			'id' 
	];
	public function event() {
		return $this->belongsTo ( 'App\Model\Event' );
	}
}
