<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, InteractsWithMedia;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = ['deleted_at'];
    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];

    public function profile()
    {
        return $this->getMedia('profile')->count() ? $this->getMedia('profile')->last()->getUrl() : null;
    }
    public function medium_profile()
    {
        return $this->getMedia('profile')->count() ? $this->getMedia('profile')->last()->getUrl('medium') : null;
    }
    public function big_profile()
    {
        return $this->getMedia('profile')->count() ? $this->getMedia('profile')->last()->getUrl('big') : null;
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
            ->height($media->collection_name === 'cover' ? 80 : 150)
            ->nonQueued();
        $this->addMediaConversion('medium')
            ->format(Manipulations::FORMAT_WEBP)
            ->width(300)
            ->height($media->collection_name === 'cover' ? 160 : 300)
            ->nonQueued();
        $this->addMediaConversion('big')
            ->format(Manipulations::FORMAT_WEBP)
            ->width(800)
            ->height($media->collection_name === 'cover' ? 420 : 800)
            ->nonQueued();
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commenter');
    }
    public function votes()
    {
        return $this->morphMany(Vote::class, 'voter');
    }
}
