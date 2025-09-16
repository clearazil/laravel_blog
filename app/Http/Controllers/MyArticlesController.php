<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyArticlesController extends Controller
{
    public function index()
    {
        return view('my-articles.index');
    }
}
