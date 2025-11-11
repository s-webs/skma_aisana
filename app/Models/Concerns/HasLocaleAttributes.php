<?php

namespace App\Models\Concerns;

trait HasLocaleAttributes
{
    protected array $locales = ['ru','kk','en'];

    /** Вернёт field_{locale} с опциональным fallback */
    public function l(string $field, ?string $locale = null, bool $fallback = true): ?string
    {
        $locale = $locale ?: app()->getLocale();
        $col = "{$field}_{$locale}";
        $val = $this->getAttribute($col);

        if (($val === null || $val === '') && $fallback) {
            foreach (array_unique([$this->preferredFallbackLocale() ?? 'ru', config('app.fallback_locale','ru')]) as $fb) {
                $fbVal = $this->getAttribute("{$field}_{$fb}");
                if ($fbVal !== null && $fbVal !== '') return $fbVal;
            }
        }
        return $val;
    }

    /** Мягкий fallback можно переопределить в модели */
    protected function preferredFallbackLocale(): ?string
    {
        return 'ru';
    }

    /** Удобная сортировка по локализованному полю с fallback */
    public function scopeOrderByLocalized($q, string $field, ?string $locale = null, string $direction = 'asc')
    {
        $locale = $locale ?: app()->getLocale();
        // ВНИМАНИЕ: $field должен быть «белым списком» (руками передаём корректные имена)
        return $q->orderByRaw("
            COALESCE(NULLIF({$field}_{$locale}, ''), {$field}_ru, {$field}_en, {$field}_kk) {$direction}
        ");
    }
}
