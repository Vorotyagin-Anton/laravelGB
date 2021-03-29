<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\XMLParserService;
use App\Jobs\NewsParsing;
use App\Models\News;
use Cassandra\Date;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index(XMLParserService $parserService)
    {
        $rssLinks = [
            'https://news.yandex.ru/auto.rss',
            'https://news.yandex.ru/auto_racing.rss',
            'https://news.yandex.ru/army.rss',
            'https://news.yandex.ru/gadgets.rss',
        ];
        foreach ($rssLinks as $link) {
//            $parserService->saveNews($link);
            NewsParsing::dispatch($link);
        }

        return redirect()->route('category', ['category' => 11]);
    }
}
