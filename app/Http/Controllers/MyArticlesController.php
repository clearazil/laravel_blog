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

    public function create()
    {
        return view('my-articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'      => 'required|max:255',
            'content'    => 'required',
            'is_premium' => 'required|boolean',
        ]);

        Article::create([
            'title'      => $validated['title'],
            'content'    => $validated['content'],
            'is_premium' => $validated['is_premium'],
            'user_id'    => auth()->id()
        ]);

        return redirect()->route('my-articles.index')->with('success', 'Article successfully created!');
    }
}
