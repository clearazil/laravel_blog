<?php

namespace App\Http\Controllers;

use App\Models\Article;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Article::limit(3)->get();

        return view('index', compact('articles'));
    }
}
