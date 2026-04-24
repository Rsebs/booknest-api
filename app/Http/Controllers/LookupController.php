<?php

namespace App\Http\Controllers;

use PhpHelpers\Services\LookupService;

class LookupController extends Controller
{
    public function index(string $resource, LookupService $service)
    {
        return $this->successResponse($service->handle($resource, request()->all()));
    }
}
