<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\news;

class Newscontroller extends Controller
{
    public function index(){
        $data = news::all();

        return view("posts",['news'=>$data]);
    }
    public function home(){
        $data = news::all();

        return view("home",['news'=>$data]);
    }

    public function news(Request $req){

        $req->validate([
            'title' => 'required',
            'category' => 'required',
            'author' => 'required',
            'news' => 'required'
        ]);


        $a = new news();

        $a->title = $req->input('title');
        $a->category = $req->input('category');
        $a->author = $req->author;
        $a->post = $req->news;

        $a->save();

        return redirect('/');
    }

    public function delete($id){
        news::find($id)->delete();
        return redirect('/');
    }



}
