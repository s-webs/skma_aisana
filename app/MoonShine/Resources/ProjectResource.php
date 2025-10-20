<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

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
 * @extends ModelResource<Project>
 */
class ProjectResource extends ModelResource
{
    protected string $model = Project::class;

    protected string $title = 'Projects';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
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
                Image::make('Изображение', 'image')
                    ->disk('public')
                    ->dir('projects'),
                Tabs::make([
                    Tab::make('RU', [
                        Text::make('Название', 'name_ru')->unescape(),
                        TinyMce::make('Контент', 'text_ru'),
                        Slug::make('Slug', 'slug_ru')->from('name_ru'),
                    ]),
                    Tab::make('KZ', [
                        Text::make('Название', 'name_kk')->unescape(),
                        TinyMce::make('Контент', 'text_kk'),
                        Slug::make('Slug', 'slug_kk')->from('name_kk'),
                    ]),
                    Tab::make('EN', [
                        Text::make('Название', 'name_en')->unescape(),
                        TinyMce::make('Контент', 'text_en'),
                        Slug::make('Slug', 'slug_en')->from('name_en'),
                    ]),
                ]),
                Date::make('Дата', 'created_at'),
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
     * @param Project $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
