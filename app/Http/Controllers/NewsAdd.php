<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsAdd extends Controller
{
    public function create() {
        return view('news.create');
    }

    public function store() {
        $publish = request()->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'full_website' => 'required',
        ]);

        News::create($publish);

        return redirect('/news');
    }
}
