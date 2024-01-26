<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => ['required', 'min:5', 'max:100', 'unique:projects'],
            'cover_image' => ['nullable', 'image', 'max:512'],
            'content' => ['nullable']
        ];
    }

    public function messages(){
        return[
            'title.required' => 'Inserisci il titolo del comic',
            'title.min' => 'Il titolo può avere minimo :min caratteri',
            'title.max' => 'Il titolo può avere al massimo :max caratteri',
            'cover_image.image' =>'formato errato',
            'cover_image.max' =>'dimensione eccessiva'
        ];
    }
}
