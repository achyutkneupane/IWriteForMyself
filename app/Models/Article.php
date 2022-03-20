<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use HasFactory,SoftDeletes, InteractsWithMedia, Sluggable;
    protected $dates = ['deleted_at'];
    protected $guarded = [];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function writer()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'article_tag','article_id');
    }
    public function cover()
    {
        return $this->getMedia('cover')->count() ? $this->getMedia('cover')->last()->getUrl() : null;
    }
    public function medium_cover()
    {
        return $this->getMedia('cover')->count() ? $this->getMedia('cover')->last()->getUrl('medium') : null;
    }
    public function big_cover()
    {
        return $this->getMedia('cover')->count() ? $this->getMedia('cover')->last()->getUrl('big') : null;
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('small')
             ->format(Manipulations::FORMAT_WEBP)
             ->width(150)
             ->height(80)
             ->nonQueued();
        $this->addMediaConversion('medium')
             ->format(Manipulations::FORMAT_WEBP)
             ->width(300)
             ->height(160)
             ->nonQueued();
        $this->addMediaConversion('big')
             ->format(Manipulations::FORMAT_WEBP)
             ->width(800)
             ->height(420)
             ->nonQueued();
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function votes()
    {
        return $this->morphMany(Vote::class, 'votable');
    }
}