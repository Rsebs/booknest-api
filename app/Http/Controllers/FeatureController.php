<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        try {
            $features = Feature::all();
            return $this->successResponse($features, 'Users fetched successfully');
        } catch (\Throwable $th) {
            return $this->errorResponse('An error occurred while fetching the user data', 500);
        }
    }
}
