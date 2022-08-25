<?php

namespace App\Http\Requests\api;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:100',
            'place' => 'string|min:3',
            'startDate' => 'required|date|',
            'endDate' => 'required|date|before:now',
            'userId' => 'required',
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'start' =>$this->startDate,
            'end' =>$this->endDate,
            'user_id' =>$this->userId,
        ]);

    }
}
