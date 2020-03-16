<?php


namespace App\Service\View;

use App\Service\BaseService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

/**
 * Class ViewContent
 * @package App\Service
 * データをHTML表示形式に整形して変数に保持する
 */
class ViewContent extends BaseService
{
    public $content = '';
    public $header = [];
    public $body = [];

    /**
     *
     */
    public function getHtml()
    {
        return $this->content;
    }

    /**
     *
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * 連想配列をHTMLに変換する
     * @param $content
     * @param $type
     */
    public function setContent($content, $type = 'table')
    {
        $method = 'setTo' . ucfirst($type);
        $this->content = $this->$method($content);
    }

    /**
     * 連想配列をテーブルHTMLに変換する
     * @param $contents
     * @return array
     */
    protected function makeHeadAndBody($contents)
    {
        // TODO コレクションのeachとか使って中身を取得したい
        $head = Collection::make();
        $body = Collection::make();
        $contents = Collection::make($contents)->toArray();
        foreach ($contents as $index => $content) {
            $tmp_body = Collection::make();
            foreach ($content as $key => $c) {
                if ($head->search($key) === false) {
                    $head->push($key);
                }
                $tmp_body->push($c);
            }
            $body->push($tmp_body);
        }

        $this->header = $head;
        $this->body = $body;

        return [$head, $body];
    }

    /**
     * 連想配列をテーブルHTMLに変換する
     * @param $contents
     * @return string
     */
    protected function setToTable($contents)
    {
        [$head, $body] = $this->makeHeadAndBody($contents);

        $html = [];
        $html[] = '<table>';
        $html[] = '<thead>';
        $html[] = '<tr>';
        foreach ($head as $h) {
            $html[] = '<th>' . $h . '</th>';
        }
        $html[] = '</tr>';
        $html[] = '</thead>';
        $html[] = '<tbody>';
        foreach ($body as $line) {
            $html[] = '<tr>';
            foreach ($line as $l) {
                $html[] = '<td>' . $l . '</td>';
            }
            $html[] = '</tr>';
        }
        $html[] = '</tbody>';
        $html[] = '</table>';

        return implode('', $html);
    }
}
