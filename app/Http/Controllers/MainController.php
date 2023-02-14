<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Post;

class MainController extends Controller
{
    public function posts(){

        $posts = Post:: all();
        
        return view('pages.posts', compact('posts'));
    }
    public function person(){

        $people = Person :: all ();
        return view('pages.person', compact('people'));

    }
}
