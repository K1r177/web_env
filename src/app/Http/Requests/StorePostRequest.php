<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(Request $request): bool
    {
        //dd($request->all());
        return $request->title != 'test';
        //return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:5'],
            'slug'  => ['required', 'max:255', 'unique:posts'],
            'content' => ['required'],
            'category_id' => ['required', 'exists:categories,id']
        ];
    }

    public function messages()
    {
        return [
            'slug.required' => ':attribute required!'
        ];
    }

}
