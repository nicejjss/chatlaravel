<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller
{
    protected function response($content, $status = Response::HTTP_OK) {
        return response($content, $status);
    }
}
