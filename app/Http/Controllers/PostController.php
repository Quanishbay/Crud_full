<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        return response()->json($posts, 200);

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|integer',
            'tags' => 'nullable|array',
        ]);

        $tags = $validated['tags'];
        unset ($validated['tags']);

        $item = Post::create($validated);

        $item->tags()->attach($tags);

        return response()->json($item, 201);
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|integer',
            'tags' => 'nullable|array',
        ]);

        $item = Post::findOrFail($id);

        $tags = array_unique($validated['tags']);
        unset ($validated['tags']);

        $item->update($validated);
        $item->tags()->sync($tags);

        return response()->json($item, 200);

    }

    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return response()->json($post, 204);
    }

    public function categories()
    {
        $categories = Category::all();

        return response()->json($categories, 200);
    }

    public function tags()
    {
        $tags = Tag::all();

        return response()->json($tags, 200);
    }
}
