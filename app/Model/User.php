<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//example learninglaravel.net
//     protected $fillable = [
//         'name', 'email', 'password',
//     ];

	protected $fillable = [
	        'name','username', 'password', 'email','birthDate',
			'isVerified','cityId','address','address','postalCode',
			'phoneHome','phoneCell','facebook_id','google_id',
			'created_by','update_by','update_at','rowstatus'
			
	    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
    
    public function City()
    {
    	return $this->belongsTo('App\Model\City');
    }
}
