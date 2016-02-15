<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Organizer;
use Auth;

class EventController extends Controller
{
    //
	public function event()
	{
		$userOrganizer = Organizer::where ( 'userId',Auth::user()->id )->first ();
		if ($userOrganizer==Null)
			return redirect('/organizer/create')->with ( 'status', 'You dont have organizer, please create it');
		else
			return view('event.event');
	}
	public function create()
	{
		return view('event.create');
	}
}
