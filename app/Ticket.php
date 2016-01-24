<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
	protected $guarded = ['id'];
	protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
	public function comments()
	{
		return $this->hasMany('App\Comment', 'post_id');
	}
	// 	kalau mau setting table sendiri, default table nama model ditambahin huruf s belakangnya
	//  contoh model ini Ticket, default table nya tickets
	// 	protected $table = 'my_flights';
}
