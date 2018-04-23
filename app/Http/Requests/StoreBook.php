<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBook extends FormRequest
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
            'title' => 'required'
            'typePasta' => 'required'
            'pageNumbers' => 'required'
            'language' => 'required'
            'isbn10' => 'required'
            'isbn13' => 'required'
            'description' => 'required'
            'author_id' => 'required'
        ];
    }
}
