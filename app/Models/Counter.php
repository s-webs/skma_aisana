<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasLocaleAttributes;

class Counter extends Model
{
    use HasLocaleAttributes;

    protected $fillable = [
        'name_ru','name_kk','name_en',
        'count',
        // created_at/updated_at НЕ нужно добавлять в fillable — Eloquent сам их ведёт
    ];

    protected $casts = [
        'count' => 'int',
    ];

    /** Достаём локализованное название счётчика */
    public function getNameAttribute()
    {
        return $this->l('name');
    }

    /** Если тебе удобнее обращаться как к title — оставь алиас */
    public function getTitleAttribute()
    {
        return $this->getNameAttribute();
    }

    /** Часто нужно: сортировка по локализованному имени */
    public function scopeOrderByName($q, string $direction = 'asc')
    {
        return $this->scopeOrderByLocalized($q, 'name', null, $direction);
    }
}
