<?php

namespace App\Nova;

use App\Nova\Flexible\Layouts\Possibilitieslayout;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use MrMonat\Translatable\Translatable;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;
use Whitecube\NovaFlexibleContent\Flexible;

class Procedure extends Resource
{
    use HasSortableRows;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Procedure::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title',
        'slug',
    ];

    public static function label()
    {
        return __('Procedūros');
    }

    public static function singularLabel()
    {
        return __('Procedūra');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Images::make(__('Nuotrauka'), 'procedures')->hideFromIndex(),
            Translatable::make(__('Pavadinimas'), 'title')->singleLine(),
            Text::make(__('Nuorodos dalis'), 'slug')->readonly()->hideFromIndex(),
            Translatable::make(__('Aprašymas'), 'desc')->trix()->asHtml()->hideFromIndex(),

            Flexible::make(__('Pagrindinis'), 'list')->addLayout(__('Pagrindinis'), 'list', [
                Translatable::make(__('Pavadinimas'), 'title')->singleLine(),
                Translatable::make(__('Tekstas'), 'desc')->trix()->asHtml(),
                Translatable::make(__('Teksto po galimybėmis pavadinimas'), 'long_title')->trix()->asHtml(),
                Translatable::make(__('Tekstas po galimybėmis'), 'long_text')->trix()->asHtml(),
            ])->button(__('Pridėti')),

            Flexible::make(__('Galimybės'), 'possibilities')->addLayout(Possibilitieslayout::class)->button(__('Pridėti')),

            Flexible::make(__('Po procedūros'), 'after_procedure')->addLayout(__('Po procedūros'), 'after_procedure', [
                Translatable::make(__('Pavadinimas'), 'title')->singleLine(),
            ])->button(__('Pridėti')),

            Flexible::make(__('Kainos'), 'prices')->addLayout(__('Kainos'), 'prices', [
                Translatable::make(__('Pavadinimas'), 'title')->singleLine(),
                Text::make(__('Kaina'), 'price'),
            ])->button(__('Pridėti')),

            Flexible::make(__('DUK'), 'faq')->addLayout(__('DUK'), 'faq', [
                Translatable::make(__('Klausimas'), 'question')->singleLine(),
                Translatable::make(__('Atsakymas'), 'answer')->trix()->asHtml(),
            ])->button(__('Pridėti')),

            BelongsToMany::make(__('Gyditojai'), 'doctors', Doctor::class),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
