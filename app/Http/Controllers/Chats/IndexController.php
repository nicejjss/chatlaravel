<?php

namespace App\Http\Controllers\Chats;

use App\Http\Controllers\BaseController;
use App\Services\Chats\IndexService;

class IndexController extends BaseController
{
    private IndexService $service;

    public function __construct(IndexService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $result = $this->service->handle();
        return $this->response($result);
    }
}
