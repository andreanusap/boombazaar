<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProfileFormRequest extends Request {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}
	
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
    	if((Request::get('old_password'))!="" ||(Request::get('password')!="") 
    			||(Request::get('password_confirmation'))!="" )
    	{
			return [
				//
				'old_password' => 'required|confirmed|min:6',
				'password' => 'required|confirmed|min:6',
				'password_confirmation' => 'required|confirmed|min:6' 
		];
		}
		
		return [
				//
		];
	}
}
