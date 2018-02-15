<?php

namespace GO\Domain\Users\Traits;

use GO\domain\Users\User;
use GO\domain\Conversation\Conversation;
use Auth;

trait Conversation
{

	public function createConversations($receiver_id)
	{

		Coversation::create([

			'sender_id' => auth()->user()->id,
			'receiver_id' => $receiver_id

		]);

	}

}
