<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show(){
        $articles = Article::all();
     return view('article')->with('articles',$articles);
    }

    public function create(Request $request){
      $article = Article::create(['title' => $request->article, 'content' => $request->content]);
     return back();
    }

    public function delete($id){
        Article::where('id', $id)->delete();
       return back();
      }

      public function update(Request $request, $id){
        $article = Article::where('id',$id)->update(['title' => $request->article, 'content' => $request->content]);
       return back();
      }
}