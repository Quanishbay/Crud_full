<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Http\Request;

class StoreController extends BaseController
{



    public function store(StoreRequest $request)
    {
        $validated = $request->validated();

        $this->service->store($validated);

    }
}
