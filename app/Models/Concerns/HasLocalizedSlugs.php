<?php

namespace App\Models\Concerns;

trait HasLocalizedSlugs
{
    /** slug строго для нужной локали */
    public function slugFor(?string $locale = null): ?string
    {
        $locale = $locale ?: app()->getLocale();
        return $this->getAttribute("slug_{$locale}");
    }

    /** Роут-биндинг: slug_{locale} */
    public function getRouteKeyName(): string
    {
        return 'slug_'.app()->getLocale();
    }

    public function resolveRouteBindingQuery($query, $value, $field = null)
    {
        $field = $field ?: $this->getRouteKeyName();
        return $query->where($field, $value);
    }
}
