<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivitiesRequest extends FormRequest
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
            'name'=>'required|string',
            'pubDate'=>'required|string',
            'desc'=>'required',
            'program_id'=>'reuired|programs:id',
            'imagUrl'=>'file|mimes:jpeg,bmp,png,pdf,doc,docx',
            'note'=>'string'
        ];
    }
}
