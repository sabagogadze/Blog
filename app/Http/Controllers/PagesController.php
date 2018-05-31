<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

       	return view('pages.about', compact('data'));
    }
    public function contact ()
    {
    	return view('pages.contact');
    }
    public function index ()
    {
    	return view('pages.index');
    }
}
