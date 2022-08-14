<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompaniesRequest extends FormRequest
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
            'nameAR' => 'required|string|min:3|max:100',
            'nameEN' => 'required|string|min:3|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000',
            'addressAR' => 'string|min:3|max:100',
            'addressEN' => 'string|min:3|max:100',
            'phone' => 'required',
        ];
    }
}
