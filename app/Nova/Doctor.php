<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use MrMonat\Translatable\Translatable;
use NovaAttachMany\AttachMany;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;
use Whitecube\NovaFlexibleContent\Flexible;

class Doctor extends Resource
{
    use HasSortableRows;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Doctor::class;

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
        return __('Gydytojai');
    }

    public static function singularLabel()
    {
        return __('Gydytojas');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     * @throws \Exception
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Images::make(__('Nuotrauka'), 'doctors')->conversionOnIndexView('small'),
            Text::make(__('Pavadinimas'), 'title'),
            Text::make(__('Nuorodos dalis'), 'slug')->readonly()->hideFromIndex(),
            Translatable::make(__('Specialybė'), 'specialty')->singleLine(),
            Translatable::make(__('Apie'), 'about')->trix()->asHtml()->hideFromIndex(),
            Translatable::make(__('Citata'), 'quote')->trix()->asHtml()->hideFromIndex(),

            AttachMany::make(__('Procedūros'), 'procedures', Procedure::class),
            BelongsToMany::make(__('Procedūros'), 'procedures', Procedure::class),

            AttachMany::make(__('Naujienos'), 'posts', Post::class),
            BelongsToMany::make(__('Naujienos'), 'posts', Post::class),

            Flexible::make(__('Kvalifikacija'), 'qualification')->addLayout(__('Kvalifikacija'), 'qualification', [
                Translatable::make(__('Pavadinimas'), 'title')->singleLine(),
            ])->button(__('Pridėti')),

            Flexible::make(__('Mokslinė veikla'), 'scientific_activity')->addLayout(__('Mokslinė veikla'), 'scientific_activity', [
                Translatable::make(__('Pavadinimas'), 'title')->singleLine(),
            ])->button(__('Pridėti')),
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
