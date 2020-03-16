<?php


namespace App\Service;

use App\Models\TUserMessage;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\Array_;

class MessageService extends BaseService
{
    /**
     * @param $user_id
     * @param $text
     */
    public function post($user_id, $text)
    {
        $userMessage = new TUserMessage();
        $userMessage->user_id = $user_id;
        $userMessage->message = $text;
        $userMessage->save();
    }

    /**
     * @param $user_id
     * @param $offset
     * @param $count
     * @return array
     */
    public function list($user_id, $offset, $count)
    {
        return TUserMessage::query()
            ->where('user_id', $user_id)
            ->offset($offset)
            ->limit($count)
            ->get();
    }
}
