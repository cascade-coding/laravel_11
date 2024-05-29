<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function get_author($post_id)
    {
        $author = Post::find($post_id)->author;
        return $author;
    }
    public function add_author()
    {
        $author = new Author();
        $author->username = "Steve";
        $author->password = "654141fsd42";
        $author->save();
        dd("Author data saved!");
    }
}
