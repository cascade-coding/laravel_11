<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function get_post($id){
        $post = Author::find($id)->post;
        return $post;
    }

    public function add_post($id)
    {
        $author = Author::find($id);

        $post = new Post();

        $post->title = "what is Kotlin";
        $post->body = "Kotlin is a language for building mobile apps";
        $post->cat = "apps";

        $author->post()->save($post);

        dd("post is saved");
    }
}
