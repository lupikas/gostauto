<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use OptimistDigital\NovaPageManager\Template;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;

use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use MrMonat\Translatable\Translatable;
use NovaAttachMany\AttachMany;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;
use Whitecube\NovaFlexibleContent\Flexible;
use Kraftbit\NovaTinymce5Editor\NovaTinymce5Editor;

class defoult extends Template
{
    public static $type = 'page';
    public static $name = 'work';
    public static $seo = false;
    public static $view = null;

    public function fields(Request $request): array
    {
        return [
            //Text::make('Title', 'title')
            NovaTinymce5Editor::make('Body', 'body'),
        ];
    }
}
