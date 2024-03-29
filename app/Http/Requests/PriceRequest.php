<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceRequest extends FormRequest
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
            'price' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
          'required' => 'Trường dữ liệu bắt buộc',
          'integer' => 'Dữ liệu phải là số nguyên'
        ];
    }
}
