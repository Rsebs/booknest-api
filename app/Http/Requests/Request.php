<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpHelpers\Helpers\ApiResponse;

class Request extends FormRequest
{
    use ApiResponse;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        if ($this->has('email')) {
            $this->merge(['email' => strtolower($this->input('email'))]);
        }
    }
}
