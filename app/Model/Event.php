<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
	//
	protected $fillable = [
			'eventName','eventDesc', 'location', 'termsCond','cityId',
			'organizerId','created_by','update_by','update_at','rowstatus'
	];
	
	protected $guarded = [ 
			'id' 
	];
	public function organizer() {
		return $this->belongsTo ( 'App\Model\Organizer' );
	}
	public function city() {
		return $this->belongsTo ( 'App\Model\City' );
	}
	public function eventMessages() {
		return $this->hasMany ( 'App\Model\EventMessage', 'event_ID' );
	}
	public function images() {
		return $this->hasMany ( 'App\Model\EventImage', 'event_ID' );
	}
	public function eventParticipants() {
		return $this->hasMany ( 'App\Model\EventParticipant', 'event_ID' );
	}
}
