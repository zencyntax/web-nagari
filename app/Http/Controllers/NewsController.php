<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\NewsData;

class NewsController extends Controller
{
    public function index()
    {
        $news = NewsData::all();
        return view('pages.news', compact('news'));
    }

    public function show($slug)
    {
        $news = collect(NewsData::all())
            ->firstWhere('slug', $slug);

        abort_if(!$news, 404);

        return view(
            'pages.news-detail',
            compact('news')
        );
    }
}
