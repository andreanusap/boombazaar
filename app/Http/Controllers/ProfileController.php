<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\User;
use Auth;

class ProfileController extends Controller
{
    //
	public function show() {
		$user = Auth::user()->id;
		$users = User::where( 'id',$user )->first();
		return view ( 'auth.profile', compact ( 'users' ) );
	}
}
