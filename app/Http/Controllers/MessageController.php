<?php

namespace App\Http\Controllers;

use App\News;
use App\Service\MessageService;
use App\Service\View\ViewContent;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MessageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function post(Request $request)
    {
        // 呟き内容をメッセージテーブルに保存する
        $service = MessageService::forge();
        $service->post($request->user_id, $request->text);
    }

    /**
     * @param Request $request
     * @return View
     */
    public function list(Request $request)
    {
        $service = MessageService::forge();
        $list = $service->list(
            $request->get('user_id', null),
            $request->get('offset', 0),
            $request->get('count', 9));

        ViewContent::forge()->setContent($list);

        return view('message_list')->with('content', ViewContent::forge()->getHtml());
    }
}
