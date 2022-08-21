<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EngWordRequest extends FormRequest
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
           'eng' => 'required|max:250',
           'rus' => 'required|max:250',
           'description'  => 'required|max:250',
        ];
    }
}
