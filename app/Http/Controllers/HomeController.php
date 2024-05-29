<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show($author_id)
    {
        $author = Author::find($author_id);

        var_dump($author->username);
        // dd($author->post);

        foreach ($author->post as $post) {
            var_dump($post->title);
        }
    }
}
