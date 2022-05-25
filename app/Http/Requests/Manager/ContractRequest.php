<?php

namespace App\Http\Requests\Manager;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
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

            'apartment_id'  => 'required',
            'tenant_id'     => 'required|exists :users,id',
            'price'         => 'required',
            'commission'    => 'required',
            'start_at'      => 'required',
            'end_at'        => 'required',
            'image'         => 'required',

        ];
    }
}
