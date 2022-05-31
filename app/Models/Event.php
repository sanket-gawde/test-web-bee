<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $guarded = ['id'];

	//relation of event to the workshop
	public function workshops()
	{
	 	return $this->hasMany(Workshop::class, 'event_id', 'id');
	} 
}
