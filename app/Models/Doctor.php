<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Scout\Searchable;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;
use Whitecube\NovaFlexibleContent\Value\FlexibleCast;
use Whitecube\Sluggable\HasSlug;

class Doctor extends Model implements HasMedia, Sortable
{
    use HasFactory;
    use HasTranslations;
    use HasSlug;
    use InteractsWithMedia;
    use SortableTrait;
    use Searchable;

    protected $guarded = [];

    protected $casts = [
        'qualification' => FlexibleCast::class,
        'scientific_activity' => FlexibleCast::class,
    ];

    public $translatable = ['about','quote','specialty'];

    public $sluggable = 'title';

    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
    ];

    public function procedures(): BelongsToMany
    {
        return $this->belongsToMany(Procedure::class);
    }

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
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
        $this->addMediaCollection('doctors')->singleFile();
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('sort_order');
        });
    }
}
