<?php


namespace App\Nova\Flexible\Layouts;


use Laravel\Nova\Fields\File;
use MrMonat\Translatable\Translatable;
use Spatie\MediaLibrary\HasMedia;
use Whitecube\NovaFlexibleContent\Concerns\HasMediaLibrary;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Possibilitieslayout extends Layout implements HasMedia
{
    use HasMediaLibrary;

    protected $name = 'possibilities';

    protected $title = 'Galimybės';

    public function fields()
    {
        return [
            Translatable::make(__('Pavadinimas'), 'title')->singleLine(),
            Translatable::make(__('Tekstas'), 'desc')->trix()->asHtml(),
            File::make(__('Video'), 'video'),
        ];
    }
}
