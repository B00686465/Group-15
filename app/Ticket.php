<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
	// Make the columns mass assignable
	// $guarded can make them all assignable apart from chosen
	protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
     public function user()
     {
     	return $this->belongsTo('App\User');
     }

     public function getTitle()
     {
     	return $this->title;
     }
}
