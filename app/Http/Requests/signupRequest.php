<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'=>'required|max:255|string',
            'age'=>'numeric',
            'date'=>'string',
            'phone'=>'string',
            'address'=>'string'
                ];
    }
    public function messages()
    {
        return[
            'name.string'=>"Vui lòng điền tên vào nội dung",
            'date.string'=>"Vui lòng điền ngày vào nội dung",
            'phone.string'=>"Vui lòng điền điện thoại vào nội dung",
            'age.string'=>"Vui lòng điền tuổi vào nội dung",
            'address.string'=>"Vui lòng điền tên vào nội dung"
        ];
    }
}
