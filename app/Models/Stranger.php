<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stranger extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commenter');
    }
    public function votes()
    {
        return $this->morphMany(Vote::class, 'voter');
    }
}
