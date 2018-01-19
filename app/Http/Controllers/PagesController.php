<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('welcome.blade,php')->withPosts($posts);
    }    

    public function getmain(){
        return view('main');
    }
    
    public function getabout(){
        return view('about');
    }
    
    public function getpievienotrecepti(){
        return view('/pievienotrecepti');
    }
    
    public function getaboutfile(){
        return view('/aboutfile');
    }

    public function getreceptes(){
        return view('/receptes');
    }
    
    public function getpievienot(){
        return view('/pievienot');
    }

}
