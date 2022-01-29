<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;
use \App\Categorie;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function home()
    {
        $article = Article::all();
        return view('welcome',compact('article'));
    }


}
