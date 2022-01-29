<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\User;

class AdminController extends Controller
{
    public function user(){
        $user = DB::select('select * from users where role="user"');
        return view('user',compact('user'));
    }
    public function deleteUser($id){
        User::find($id)->delete();
        return redirect()->back();
    }
}
