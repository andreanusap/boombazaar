<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model {
	//
	protected $fillable = [
			'organizerName','organizerDesc', 'imageUrl','userId',
			'created_by','update_by','created_at','update_at','rowstatus'
	];
	
	protected $guarded = [ 
			'id' 
	];
	public function user() {
		return $this->belongsTo ( 'App\Model\User' );
	}
	public function events() {
		return $this->hasMany ( 'App\Model\Events', 'organizerID' );
	}
}
