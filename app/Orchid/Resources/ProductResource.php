<?php

namespace App\Orchid\Resources;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class ProductResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Product::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('name')
                ->title('Nom')
                ->placeholder('Entrez le nom du produit'),
            Input::make('slug')->title('slug')->placeholder('Entrez le slug du produit'),
            TextArea::make('description')->title('description')->placeholder("Description du produit"),
            Input::make('price')->title('Prix')->type('number'),
            Cropper::make('image')->title('photo du produit'),
            CheckBox::make('active')
                ->value(1)
                ->placeholder('Actif')
                ->help('Actif')
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
            TD::make('name'),
            TD::make('slug'),
            TD::make('description'),
            TD::make('price'),

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
            Sight::make('id'),
            Sight::make('name'),
            Sight::make('slug'),
            Sight::make('decription'),
            Sight::make('price'),
            Sight::make('image')
                ->render(fn($model) =>
                    "<img src='{$model->image}'
                              alt='sample'
                              class='mw-100 d-block img-fluid rounded-1 w-100'>"),
        ];
    }

    /**
     * Get the validation rules that apply to save/update.
     *
     * @return array
     */
    public function rules(Model $model): array
    {
        return [
            'name' => [
                'required',
                Rule::unique(self::$model, 'name')->ignore($model),
            ],
            'slug' => [
                'required',
                Rule::unique(self::$model, 'name')->ignore($model),
            ],
            'description' => [
                'required'
            ],
            'price' => [
                'required',
                "numeric"
            ],
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