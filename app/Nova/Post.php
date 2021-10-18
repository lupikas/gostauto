<?php

namespace App\Nova;

use ClassicO\NovaMediaLibrary\MediaLibrary;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Kraftbit\NovaTinymce5Editor\NovaTinymce5Editor;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use MrMonat\Translatable\Translatable;
use NovaAttachMany\AttachMany;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

class Post extends Resource
{
    use HasSortableRows;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Post::class;

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
        return __('Įrašai');
    }

    public static function singularLabel()
    {
        return __('Įrašas');
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
            Images::make(__('Nuotrauka'), 'posts')->conversionOnIndexView('small'),
            Boolean::make(__('Paryškintas'), 'featured')->sortable(),
            Translatable::make(__('Pavadinimas'), 'title')->singleLine(),
            Text::make(__('Nuorodos dalis'), 'slug')->readonly()->hideFromIndex(),

            NovaTinymce5Editor::make(__('Aprašymas'), 'desc')
                ->hideFromIndex()
                ->options(['toolbar' => ['undo redo copy | formatselect | bold italic underline | bullist numlist | align | link']])
                ->translatable(),

            NovaTinymce5Editor::make(__('Aprašymas 2'), 'body')
                ->hideFromIndex()
                ->options(['toolbar' => ['undo redo copy | formatselect | bold italic underline | bullist numlist | align | link | image'], ['plugins' => ['image imagetools']]])
                ->translatable(),

            AttachMany::make(__('Gyditojai'), 'doctors', Doctor::class),
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
