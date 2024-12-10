<?php

namespace App\Services\Post;

use App\Models\Post;

class Service
{
    public function store($post)
    {

        $item = Post::create($post);


        return response()->json($item, 201);
    }


    public function update($validated, $id)
    {

        $item = Post::findOrFail($id);

        $tags = array_unique($validated['tags']);
        unset ($validated['tags']);

        $item->update($validated);
        $item->tags()->sync($tags);

        return response()->json($item, 200);

    }

}
