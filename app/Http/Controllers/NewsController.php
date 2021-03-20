<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(News $news)
    {
        return view('newsOne')
            ->with('newsOne', $news)
            ->with('categories', Categories::all());
    }

    public function getAllNews()
    {
        $news = News::query()
            ->orderBy('id','desc')
            ->paginate(5);

        return view('allNews')
            ->with('news', $news)
            ->with('categories', Categories::all());
    }

    public function addNews(Request $request)
    {
        $news = new News;

        if ($request->isMethod('get')) {
            return view('addNews')
                ->with('categories', Categories::all())
                ->with('head', 'Добавление новости')
                ->with('news', $news)
                ->with('route', 'addNews');
        }

        if ($request->isMethod('post')) {

            $news->title = $request->title;
            $news->inform = $request->inform;
            $news->is_private = $request->isPrivate;
            $news->save();
            return redirect()->route('allNews');
        }
    }

    public function updateNews(Request $request, News $news)
    {
        if ($request->isMethod('get')) {
            return view('addNews')
                ->with('categories', Categories::all())
                ->with('head', 'Изменение новости')
                ->with('news', $news)
                ->with('route', 'updateNews');
        }

        if ($request->isMethod('post')) {
            $news->title = $request->title;
            $news->inform = $request->inform;
            $news->is_private = $request->isPrivate;
            $news->save();
            return redirect()->route('allNews');
        }
    }

    public function deleteNews(News $news)
    {
        $news->delete();
        return redirect()->route('allNews');
    }


}
