<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
     public function index()
    {
    	$article = Article::orderBy('created_at', 'desc')->get();
    	return view('article.index', compact('article'));
    }

    public function create()
    {
    	return view('article.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'title' => 'required|min:10',
    		'content' => 'required'
    	]);

    	Article::create($request->all());
    	return redirect('article')->with('article', 'Article have been successfully stored');
    }

    public function edit($id)
    {
    	$article = Article::find($id);
    	return view('article.edit', compact('article'));
    }

    public function update(Request $id)
    {
    	Article::find($id->id)->update($id->all());
    	return redirect('article')->with('article', 'Article have been successfully updated');
    }

    public function show($id)
    {
    	$article = Article::find($id);
		return view('article.show', compact('article'));
    }

    public function destroy($id)
    {
    	Article::find($id)->delete();
    	return redirect('article')->with('article', 'Article have been successfully deleted :)');
    }
}
