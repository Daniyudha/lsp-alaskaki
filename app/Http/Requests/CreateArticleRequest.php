<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;

class CreateArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array {
        return [
            'title' => 'required|string|min:5|max:120',
            'content_thumbnail' => 'required|string|min:20|max:200',
            'content_full' => 'required|string|min:100',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ];
    }
}
