<?php

namespace App\Models\Concerns;

trait HasLocaleColumns
{
    protected array $locales = ['ru','kk','en'];

    /** value по текущей локали с optional fallback */
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

    /** slug строго для заданной локали (без fallback) */
    public function slugFor(?string $locale = null): ?string
    {
        $locale = $locale ?: app()->getLocale();
        return $this->getAttribute("slug_{$locale}");
    }

    /** можно переопределить на уровне модели */
    protected function preferredFallbackLocale(): ?string
    {
        return 'ru';
    }

    /** Ключ роутинга динамически: slug_{locale} */
    public function getRouteKeyName(): string
    {
        return 'slug_'.app()->getLocale();
    }

    /** На всякий: явно укажем как биндинг искать по текущему ключу */
    public function resolveRouteBindingQuery($query, $value, $field = null)
    {
        $field = $field ?: $this->getRouteKeyName();
        return $query->where($field, $value);
    }
}
