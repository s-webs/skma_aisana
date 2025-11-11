<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasLocaleAttributes;
use App\Models\Concerns\HasLocalizedSlugs;

class Project extends Model
{
    use HasLocaleAttributes, HasLocalizedSlugs;

    protected $fillable = [
        'image',
        'name_ru','name_kk','name_en',
        'text_ru','text_kk','text_en',
        'slug_ru','slug_kk','slug_en',
        'short_description_ru','short_description_kk','short_description_en',
        'is_published','ready',
    ];

    // Аксессоры под текущую локаль
    public function getNameAttribute()             { return $this->l('name'); }
    public function getTextAttribute()             { return $this->l('text'); }
    public function getShortDescriptionAttribute() { return $this->l('short_description'); }

    // Скоупы
    public function scopePublished($q)        { return $q->where('is_published', true); }
}
