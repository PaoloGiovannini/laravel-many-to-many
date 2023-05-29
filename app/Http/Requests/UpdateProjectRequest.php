<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title' => 'required|max:50',
            'content' => 'max:2000',
            'type_id' => 'nullable|exists:types,id',
            'technologies' => 'exists:technologies,id',
            'image' => 'nullable|image|max:1024'
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'il titolo è obbligatorio',
            'title.max' => 'il titolo deve avere al massimo :max caratteri',
            'content.max' => 'la descizione deve avere al massimo :max caratteri',
        ];
    }
}
