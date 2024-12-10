<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostTag;

class IndexController extends BaseController
{
   public function index()
   {
       $posts = Post::all();

       return response()->json($posts, 200);

   }
}
