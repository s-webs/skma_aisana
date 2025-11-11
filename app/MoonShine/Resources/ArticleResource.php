<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Article>
 */
class ArticleResource extends ModelResource
{
    protected string $model = Article::class;

    protected string $title = 'Articles';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Preview', 'preview'),
            Text::make('Заголовок', 'title_ru'),
            Date::make('Дата', 'created_at')->badge('blue')->sortable(),
            Switcher::make('Опубликовано', 'is_published')
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Tabs::make([
                    Tab::make('RU', [
                        Text::make('Заголовок', 'title_ru')->unescape(),
                        TinyMce::make('Контент', 'text_ru'),
                        Slug::make('slug_ru')->from('title_ru'),
                    ]),
                    Tab::make('KZ', [
                        Text::make('Заголовок', 'title_kk')->unescape(),
                        TinyMce::make('Контент', 'text_kk'),
                        Slug::make('slug_kk')->from('title_kk'),
                    ]),
                    Tab::make('EN', [
                        Text::make('Заголовок', 'title_en')->unescape(),
                        TinyMce::make('Контент', 'text_en'),
                        Slug::make('slug_en')->from('title_en'),
                    ]),
                ]),
                Date::make('Дата', 'created_at'),
                Image::make('Preview', 'preview')
                    ->disk('public')
                    ->dir('articles/previews'),
                Switcher::make('Опубликовано', 'is_published')
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
        ];
    }

    /**
     * @param Article $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
