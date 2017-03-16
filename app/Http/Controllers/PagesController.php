<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function getHome(){
      $posts = Post::orderBy('created_at','desc')->limit(4)->get();
      return view('home')->with('posts',$posts);

    }

    public function getAbout(){
      return view('about');
    }

    public function getContact(){
      return view('contact');
    }
}
