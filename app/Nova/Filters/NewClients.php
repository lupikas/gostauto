<?php

namespace App\Nova\Filters;

use Illuminate\Http\Request;
use Laravel\Nova\Filters\BooleanFilter;

class NewClients extends BooleanFilter
{
    public $name = 'Nauji / Seni klientai';

    /**
     * Apply the filter to the given query.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(Request $request, $query, $value)
    {
        if ($value['new_clients'] && !$value['old_clients']) {
            $query->where('new_client', $value['new_clients']);
        } elseif ($value['old_clients'] && !$value['new_clients']) {
            $query->where('new_client', !$value['old_clients']);
        } elseif ($value['old_clients'] && $value['new_clients']) {
            $query->where('new_client', $value['new_clients'])->orWhere('new_client', !$value['old_clients']);
        }

        return $query;
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function options(Request $request)
    {
        return [
            'Nauji klientai' => 'new_clients',
            'Seni klientai' => 'old_clients',
        ];
    }
}
