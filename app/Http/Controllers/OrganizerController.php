<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\OrganizerFormRequest;
use App\Model\Organizer;

class OrganizerController extends Controller
{
    //
    
	public function create()
	{
		return view('organizer.create');
	}
	public function createOrganizer(OrganizerFormRequest $request) {
		$organizer = new Organizer ( array (
				'organizerName' => $request->get ( 'organizerName' ),
				'organizerDesc' => $request->get ( 'organizerDesc' ),
				'imageUrl' => $request->get ( 'imageUrl' ),
				'userId' => Auth::user()->id
		) );
		$organizer ->save ();
	
		
	
		return redirect ( '/event' )->with ( 'status', 'Event Organizer created successfull ' );
	}
}
