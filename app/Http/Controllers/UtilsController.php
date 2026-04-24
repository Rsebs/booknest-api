<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class UtilsController extends Controller
{
    private function validateMode(string $nameModel)
    {
        $nameModel = ucfirst(strtolower($nameModel)); // Normalize name
        $pathModel = "App\\Models\\" . ucfirst($nameModel);
        if (!class_exists($pathModel)) throw new \Exception("The model '{$nameModel}' does not exist.");
        return new $pathModel();
    }

    public function selectOptions(string $nameModel)
    {
        try {
            $model = $this->validateMode($nameModel);
            $columnsSelect = ['id'];

            $tableModel = $model->getTable();

            $availableColumns = ['name', 'description', 'title'];

            foreach ($availableColumns as $column) {
                if (Schema::hasColumn($tableModel, $column)) {
                    $columnsSelect[] = "{$column} as label";
                    break;
                }
            }

            $query = $model::query();
            $result = $query->select($columnsSelect)->get();

            return $this->successResponse($result, 'Options fetched successfully');
        } catch (\Throwable $th) {
            return $this->errorResponse('An error occurred while fetching the options', 500);
        }
    }
}
