<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;
use Whitecube\Sluggable\HasSlug;

class Feedback extends Model implements Sortable, HasMedia
{
    use HasFactory;
    use HasTranslations;
    use HasSlug;
    use SortableTrait;
    use InteractsWithMedia;

    protected $guarded = [];

    public $translatable = ['subtitle','body'];

    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('sort_order');
        });
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('small')
            ->width(350)
            ->height(350);

        $this->addMediaConversion('large')
            ->width(1920)
            ->height(1920);

        $this->addMediaConversion('xlarge')
            ->width(2560)
            ->height(2560);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('feedback')->singleFile();
    }
}
