<?php

namespace App\Http\Controllers\Chats;

use App\Http\Controllers\BaseController;
use App\Services\Chats\PostService;
use Illuminate\Http\Request;

class PostController extends BaseController
{
    private PostService $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    public function __invoke(Request $request)
    {
        $data = $request->all();
        $result = $this->service->handle($data);
        return $this->response($result);
    }
}
