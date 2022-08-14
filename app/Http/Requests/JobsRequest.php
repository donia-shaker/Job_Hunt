<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobsRequest extends FormRequest
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
            'detailsAR' => 'string|min:3',
            'detailsEN' => 'string|min:3',
            'end_date' => 'required|date|after:now',
        ];
    }
}
