<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
            'real_name' => 'required',
            'country' => 'required',
            'type' => 'required',
            'idcard' => 'required',
            'address' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'bankaccount' => 'required',
            //'email' => 'required|email',
           // 'message' => 'required',
        ];
    }
}
