<?php

namespace App\Http\Controllers\Chats;

use App\Http\Controllers\BaseController;
use App\Services\Chats\DetailService;

class DetailController extends BaseController
{
    private DetailService $service;

    public function __construct(DetailService $service)
    {
        $this->service = $service;
    }

    public function __invoke($id)
    {
        $result = $this->service->handle($id);
        return $this->response($result);
    }
}
