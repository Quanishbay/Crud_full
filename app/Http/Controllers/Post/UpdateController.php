<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function update(UpdateRequest $request, $id) {

        $validated = $request->validated();

        $this->service->update($validated, $id);



    }
}
