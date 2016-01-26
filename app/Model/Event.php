<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
	//
	protected $guarded = [ 
			'id' 
	];
	public function organizer() {
		return $this->belongsTo ( 'App\Organizer' );
	}
	public function city() {
		return $this->belongsTo ( 'App\City' );
	}
	public function eventMessage() {
		return $this->hasMany ( 'App\EventMessage', 'event_ID' );
	}
	public function regions() {
		return $this->hasMany ( 'App\EventImage', 'event_ID' );
	}
	public function regions() {
		return $this->hasMany ( 'App\EventParticipant', 'event_ID' );
	}
}
