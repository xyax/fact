<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedController extends Controller
{
    public function post(request $request){
        $id = $request->input('id');
        $assunto = $request->input('assunto');
        $corpo = $request->input('corpo');

        DB::insert('insert into feed values (null,?,?,?)', array($id, $assunto, $corpo));

        $data = DB::select('select * from users where id=?', [$id]);

        $posts = DB::select('select * from feed');
        $feed = array(
            'id' => $data[0]->id,
            'nome' => $data[0]->name,
            'posts' => $posts
        );
        return view('pages.feed')->with('feed', $feed);

    }
}
