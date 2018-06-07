<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Auth;

class PagesController extends Controller
{
    public function about ()
    {
        // $first = 'saba';
        // $last = 'gogadze';
        // $full= $first. ' '.$last;
        // $email = 'sabagogadze@gmail.com';
        // $data = [];
        // $data['email']=$email;
        // $data['full'] = $full;
        

       	return view('pages.about');
    }
    public function contact ()
    {
    	return view('pages.contact');
    }
    public function index ()
    {
        
        $posts = Post::orderBy('id', 'desc')->limit('4')->get();
    	return view('pages.index', compact('posts'));
    }
}
