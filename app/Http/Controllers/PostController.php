<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

            return view('home', [
            'articles' => Post::all()
        ]);
    }
}