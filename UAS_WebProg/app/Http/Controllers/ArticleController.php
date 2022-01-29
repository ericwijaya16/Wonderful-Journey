<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Article;
use \App\Categorie;

class ArticleController extends Controller
{
    public function detail($id)
    {
        $article = Article::find($id);
        return view ('detail',['article'=>$article]);
    }

    public function category($id)
    {
        $article = DB::select('select * from articles where category_id=?',[$id]);
        $categorie = Categorie::where('id',$id)->firstOrfail();
        return view('category',compact('article','categorie'));
    }
}
