<?php

namespace App\Http\Requests\Manager;

use Illuminate\Foundation\Http\FormRequest;

class EstateRequest extends FormRequest
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
            'rent' => 'required',
            'property_id' => 'required|int|exists:properties,id',
            'owner_id' => 'required',
            'area' => 'required',
            'commission' => 'required',
            'description' => 'required',
            'location' => 'required',
            'notes' => 'required',
            'estate_age' => 'required',
            'rooms' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'images' => 'required',
//            'tags' => 'array'
        ];
    }
}



