<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Cassandra\Date;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index()
    {
        $xml = XmlParser::load('https://news.yandex.ru/army.rss');

        $data = $xml->parse([
            'title' => [
                'uses' => 'channel.title'
            ],
            'link' => [
                'uses' => 'channel.link'
            ],
            'description' => [
                'uses' => 'channel.description'
            ],
            'image' => [
                'uses' => 'channel.image.url'
            ],
            'news' => [
                'uses' => 'channel.item[title,link,guid,description,pubDate]'
            ]
        ]);

        $news = new News;

        foreach ($data['news'] as $newsOne) {
            $news->title = $newsOne['title'];
            $news->inform = $newsOne['description'];
            $news->is_private = false;
            $news->link = $newsOne['link'];
            $news->save();
        }

        return redirect()->route('category', ['category' => 11]);
    }
}
