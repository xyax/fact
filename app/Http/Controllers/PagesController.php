<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function feed(request $request){
        $un = $request->input('uname');
        $pw = $request->input('password');

        $data = DB::select('select * from users where username=? and password=?', [$un, $pw]);

        $posts = DB::select('select * from feed');
        $feed = array(
            'id' => $data[0]->id,
            'nome' => $data[0]->name,
            'posts' => $posts
        );
        return view('pages.feed')->with('feed', $feed);
    }
}
