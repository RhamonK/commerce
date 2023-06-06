<?php

namespace App\Orchid\Resources;

use Illuminate\Database\Eloquent\Model;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Illuminate\Validation\Rule;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;
use App\Models\post;

class PostResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = post::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('title')
                ->title('Nom')
                ->placeholder('Entrez le titre du blog'),
            TextArea::make('content')->title('contenu')->placeholder("Description du blog"),
            Cropper::make('image')->title('photo du blog'),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('image', 'image')
                ->width('150')
                ->render(fn($model) =>
                    "<img src='{$model->image}'
                              alt='sample'
                              class='mw-100 d-block img-fluid rounded-1 w-100'>"),
            TD::make('title'),
            TD::make('content'),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [
            Sight::make('title'),
            Sight::make('content'),
            Sight::make('image')
                ->render(fn($model) =>
                    "<img src='{$model->image}'
                            alt='sample'
                            class='mw-100 d-block img-fluid rounded-1 w-100'>"),
        ];
    }

    public function rules(Model $model): array
    {
        return [
            'title' => [
                'required',
                Rule::unique(self::$model, 'title')->ignore($model),
            ],
            'content' => [
                'required'
            ]
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
