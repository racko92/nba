<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use App\Team;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('user')->paginate(10);

        return view('news.index', ['news' => $news]);
    }

    public function show($id){

        $news = News::findOrFail($id);

        return view('news.show', ['news' => $news]);
    }
    public function filter(Team $team)
    {
        $news = $team->news()->with('users')->latest()->paginate(10);

        return view('news.index', ['news' => $news]);
    }
}
