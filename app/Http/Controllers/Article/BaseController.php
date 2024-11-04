<?php

namespace App\Http\Controllers\Article;

use App\Services\Article\Service;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service) 
    {
        $this->service = $service; 
    }
}