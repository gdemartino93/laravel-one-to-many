<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Post;

class MainController extends Controller
{
    public function posts(Post $posts, Person $people){

        $posts = Post:: all();
        $people = Person :: all ();
        
        $person = Person :: all();
        return view('pages.posts', compact('posts'), compact('people'));
    }
    public function person(Person $people, Post $posts){
        $people = Person :: all ();
        $posts = Post :: all();
        return view('pages.person', compact('people'),compact('posts'));

    }
}
