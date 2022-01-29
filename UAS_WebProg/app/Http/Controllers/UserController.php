<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \App\User;
use \App\Article;
use \App\Categorie;

class UserController extends Controller
{
    public function profile(){
        $users = Auth::user();
        return view('profile',compact('users'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'min:8'],
        ]);

        $users = User::findOrFail($id);
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->phone = $request['phone'];

        $users->save();

        return redirect()->back();
    }

    public function blog(){
        $users = Auth::user()->id;
        $articles = DB::select('select * from articles where user_id = ?',[$users]);
        return view('blog',['articles'=>$articles]);

    }

    public function deletearticle($id){
        Article::find($id)->delete();
        return redirect()->back();
    }

    public function insert(){
        $categories = Categorie::all();
        return view('insert',['categories'=>$categories]);
    }

    public function createblog(request $request){
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
            'description' => 'required',
        ]);

        $users = Auth::user()->id;
        $title = $request->input('title');
        $category_id = $request->input('category');

        if($request->hasFile('imageArticle')){
            $filename = $request->imageArticle->getClientOriginalName();
             $request->imageArticle->storeAs('img',$filename, 'public');
        }
        $image = '../img/'.$filename;
        $description = $request->input('description');
        
        Article::create([
            'user_id' => $users,
            'category_id' => $category_id,
            'title' => $title,
            'image' => $image,
            'description' => $description,
        ]);

        return redirect()->back();
        
    }
}
