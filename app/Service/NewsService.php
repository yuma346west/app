<?php


namespace App\Service;


use App\News;

class NewsService
{
    /**
     * @param $name
     * @param $text
     */
    public function create($name, $text)
    {
        $news = new News();
        $news->name = $name;
        $news->body = $text;
        $news->save();
    }
}
