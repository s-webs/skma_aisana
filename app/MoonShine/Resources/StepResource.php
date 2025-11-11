<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Step;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;

/**
 * @extends ModelResource<Step>
 */
class StepResource extends ModelResource
{
    protected string $model = Step::class;

    protected string $title = 'Этапы реализации';

    protected bool $createInModal = true;

    protected bool $editInModal = true;

    protected bool $detailInModal = true;

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Number::make('Номер шага', 'step_num')
                ->sortable()
                ->badge('primary'),
            Text::make('Название', 'name_ru'),
            Text::make('Метка', 'badge_ru')
                ->badge('blue'),
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
                Number::make('Номер шага', 'step_num'),
                Tabs::make([
                    Tab::make('RU', [
                        Text::make('Название', 'name_ru'),
                        Textarea::make('description_ru'),
                        Text::make('Метка', 'badge_ru')
                    ]),
                    Tab::make('KZ', [
                        Text::make('Название', 'name_kk'),
                        Textarea::make('description_kk'),
                        Text::make('Метка', 'badge_kk')
                    ]),
                    Tab::make('EN', [
                        Text::make('Название', 'name_en'),
                        Textarea::make('description_en'),
                        Text::make('Метка', 'badge_en')
                    ]),
                ])
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
     * @param Step $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
