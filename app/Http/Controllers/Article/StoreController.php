<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Http\Requests\Article\StoreRequest;
use App\Http\Controllers\Article\BaseController;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);
        
        return redirect()->route('articles.index');
    }
}
