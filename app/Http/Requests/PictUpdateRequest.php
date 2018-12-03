<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PictUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'question' => 'sometimes|string|min:3',
            'answer' => 'sometimes|string|min:3',
        ];
    }
}
