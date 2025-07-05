<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use PhpHelpers\Helpers\ApiResponse;

class FeatureController extends Controller
{
    public function index()
    {
        try {
            $features = Feature::all();
            return ApiResponse::successResponse($features, 'Users fetched successfully');
        } catch (\Throwable $th) {
            return ApiResponse::errorResponse('An error occurred while fetching the user data', 500);
        }
    }
}
