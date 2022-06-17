<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class StoreRequest extends FormRequest
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
            'title_ua' => 'required|string',
            'title_ru' => '',
            'description_ua' => 'required|string',
            'description_ru' => '',
            'content_ua' => '',
            'content_ru' => '',
            'seo_description_ua' => '',
            'seo_description_ru' => '',
            'seo_keywords_ua' => '',
            'seo_keywords_ru' => '',
            'preview_image' => '',
            'price' => 'required',
            'count' => '',
            'is_published' => '',
            'is_new' => '',
            'is_hit' => '',
            'is_recomended' => '',
        ];
    }
}
