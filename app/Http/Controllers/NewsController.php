<?php

namespace App\Http\Controllers;

use App\Data\NewsData;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index(): View
    {
        return view('pages.news', [
            'hero' => NewsData::hero(),
            'featured' => NewsData::featured(),
            'news' => NewsData::news(),
        ]);
    }

    public function show(string $slug): View
{
    $details = NewsData::details();

    abort_unless(isset($details[$slug]), 404);

    return view('pages.news-detail', [
        'news' => $details[$slug],
        'relatedNews' => NewsData::news(),
        'currentSlug' => $slug,
    ]);
}
}
