<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
                'nis' => 'unique:students|max:8|required',
                'name' => 'max:50|required',
                'gender' => 'required',
                'class_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'class_id' => 'class',
        ];
    }

    public function messages()
    {
        return [
            'nis.required' => 'NIS wajib diisi',
            'nis.max' => 'NIS maximal :max karakter',
            'name.required' => 'Nama wajib diisi',
        ];
    }
}
