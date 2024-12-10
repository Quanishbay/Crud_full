<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostTag;

class DestroyController extends BaseController
{
    public function destroy($id) {

        $post = Post::find($id);

        $post->delete();

        return response()->json('Was successfully deleted', 204);
    }
}
