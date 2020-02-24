<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UploadRequest.
 */
class UploadRequest extends FormRequest
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
            '_token' => ['required'],
            'slug' => ['required', 'max:100'],
            'category' => ['required', 'integer'],
            'suggested_category' => ['sometimes', 'nullable', 'string', 'max:100'],
        ];
    }
}
