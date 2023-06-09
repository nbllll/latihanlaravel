<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaskRequest extends FormRequest
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
             'tasks' => ['required'],
             'user'  => ['required']
        ];
    }

    public function messages(){
        return[
            'required' => ':attribute harus di isi'
            // 'required' => ':attribute harus di isi'
        ];
    }
}
