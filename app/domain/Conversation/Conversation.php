<?php

namespace GO\\Domain\Conversation;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{

	protected $fillable = [ 'sender_id', 'receiver_id' ];

	public function messages()
	{
		return $this->hasMany('GO\domain\Messages\Message');
	}

	public function user()
	{
		return $this->belongsTo('GO\domain\Users\User');
	}


}
