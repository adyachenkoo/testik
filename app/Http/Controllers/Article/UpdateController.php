<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Http\Requests\Article\UpdateRequest;
use App\Http\Controllers\Article\BaseController;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, int $id)
    {
        $data = $request->validated();

        $this->service->update($id, $data);
        
        return redirect()->route('articles.show', ['id'=>$id]);
    }
}
