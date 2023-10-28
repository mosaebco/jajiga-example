<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StorePropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(Request $request): array
    {
        return [
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5000',
            'description' => 'required|max:255|min:10',
            'price' => 'required',
            // 'city_id' => 'required',
        ];
    }
}
