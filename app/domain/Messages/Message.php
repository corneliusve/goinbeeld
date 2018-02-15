<?php

namespace GO\\Domain\Messages;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

	protected $fillable = ['sender_id', 'message', 'reciever_id'];

	public function conversation()
	{

		return $this->belongsTo('GO\domain\Conversation\Conversation');

	}


}
