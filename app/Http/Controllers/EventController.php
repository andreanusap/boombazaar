<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    //
	public function event()
	{
		return view('event.event');
	}
	public function create()
	{
		return view('event.create');
	}
}
