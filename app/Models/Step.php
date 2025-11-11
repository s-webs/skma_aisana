<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasLocaleAttributes;

class Step extends Model
{
    use HasLocaleAttributes;

    protected $fillable = [
        'step_num',
        'name_ru','name_kk','name_en',
        'description_ru','description_kk','description_en',
        'badge_ru','badge_kk','badge_en',
    ];
    // created_at/updated_at добавлять в fillable не нужно

    protected $casts = [
        'step_num' => 'int',
    ];

    // Аксессоры под текущую локаль
    public function getNameAttribute()        { return $this->l('name'); }
    public function getDescriptionAttribute() { return $this->l('description'); }
    public function getBadgeAttribute()       { return $this->l('badge'); }

    // Удобные скоупы
    public function scopeOrdered($q)               { return $q->orderBy('step_num'); }
    public function scopeOrderByName($q, $dir='asc'){ return $this->scopeOrderByLocalized($q, 'name', null, $dir); }
}
