<?php


namespace App\Service;

use App\Models\TUserMessage;

class MessageService extends BaseService
{
    /**
     * @param $name
     * @param $text
     */
    public function post($user_id, $text)
    {
        $userMessage = new TUserMessage();
        $userMessage->user_id = $user_id;
        $userMessage->message = $text;
        $userMessage->save();
    }
}
