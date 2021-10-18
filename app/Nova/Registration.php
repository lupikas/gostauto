<?php

namespace App\Nova;

use App\Nova\Filters\NewClients;
use App\Nova\Filters\Procedures;
use App\Nova\Filters\VisitTime;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Registration extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Registration::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'customer_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'customer_name',
        'customer_phone',
        'customer_email',
        'selected_procedure',
        'selected_time',
        'selected_purpose',
        'comments',
    ];

    public static function label()
    {
        return __('Registracijos');
    }

    public static function singularLabel()
    {
        return __('Registracija');
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
            Boolean::make('Naujas klientas', 'new_client'),
            Text::make('Vardas', 'customer_name'),
            Text::make('Telefonas', 'customer_phone'),
            Text::make('El.paštas', 'customer_email'),
            Text::make('Procedūra', 'selected_procedure'),
            Text::make('Laikas', 'selected_time'),
            Text::make('Tikslas', 'selected_purpose'),
            Text::make('Komentaras', 'comments'),
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
        return [
            new NewClients(),
            new VisitTime(),
            new Procedures(),
        ];
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
