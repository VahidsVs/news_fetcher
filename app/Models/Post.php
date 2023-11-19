<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $guarded = ['id'];

    protected $appends = [
        'published_ago'
    ];

    public function getPublishedAgoAttribute()
    {
        return  Carbon::parse($this->published_at)->diffForHumans();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
