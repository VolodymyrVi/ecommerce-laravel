<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = false;
    protected $fillable = [
        'title_ua',
        'title_ru',
        'description_ua',
        'description_ru',
        'content_ua',
        'content_ru',
        'seo_description_ua',
        'seo_description_ru',
        'seo_keywords_ua',
        'seo_keywords_ru',
        'preview_image',
        'price',
        'count',
        'is_published',
        'is_new',
        'is_hit',
        'is_recomended'
    ];
}
