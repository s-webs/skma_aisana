<?php

namespace App\Models;

use App\Models\Concerns\HasLocaleAttributes;
use App\Models\Concerns\HasLocalizedSlugs;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasLocaleAttributes, HasLocalizedSlugs;

    protected $fillable = [
        'title_ru', 'title_kk', 'title_en',
        'text_ru', 'text_kk', 'text_en',
        'slug_ru', 'slug_kk', 'slug_en',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'bool',
    ];

    // «Виртуальные» атрибуты под текущую локаль
    public function getTitleAttribute()
    {
        return $this->l('title');
    }

    public function getTextAttribute()
    {
        return $this->l('text');
    }

    public function scopePublished($q)
    {
        return $q->where('is_published', true);
    }
}
