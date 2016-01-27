<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileFormRequest;

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
	
	public function update( ProfileFormRequest $request) {
		$user = Auth::user()->id;
		$profile = User::where( 'id',$user )->first();
		$profile->name = $request->get ( 'name' );
		$profile->save ();
		return redirect ( '/profile' )->with ( 'status', 'Profile has been updated!' );
	}
}
