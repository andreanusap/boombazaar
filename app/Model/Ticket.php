<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function user()
	{
		return $this->belongsTo('App\Model\User');
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function comments()
	{
		return $this->hasMany('App\Model\Comment', 'post_id');
	}
	
	protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
// 	kalau mau setting table sendiri, default table nama model ditambahin huruf s belakangnya
//  contoh model ini Ticket, default table nya tickets
// 	protected $table = 'my_flights';
}
