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
	        'rowStatus','firstName','lastName','username', 'password', 'email',
			'isVerified','createdBy','lastModifiedBy','address','postalCode',
			'phoneHome','phoneCell','name','facebook_id','google_id'
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
