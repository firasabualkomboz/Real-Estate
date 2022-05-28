<?php

namespace App\Http\Requests\Manager;

use Illuminate\Foundation\Http\FormRequest;

class ApartmentRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'features' => 'required',
            'rent' => 'required',
            'commission' => 'required',
            'space' => 'required',
            'rooms' => 'required',
            'bathroom' => 'required',
            'on_floor' => 'required',
            'image' => 'required',
            'estate_id' => 'required',
        ];
    }
}
