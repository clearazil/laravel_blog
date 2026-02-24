<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MyArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::where('user_id', auth()->id())->latest()->get();

        return view('my-articles.index', compact('articles'));
    }
}
