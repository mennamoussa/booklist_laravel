<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:6|max:255',
            'price' => 'required|min_digits:0',
            'category' => 'required|exists:categories,id',
            'description' => 'required|max:255',
            /* 'pic' => 'mimes:jpg,bmp,png' */
        ];
    }
}
