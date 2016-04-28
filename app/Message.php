<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $fillable = [
        'topic',
        'content',
        'published_at',
        'user_id',
        'email'
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query) {
        $query->where('published_at', '<=', Carbon::now());

    }

    public function scopeUnPublished($query) {
        $query->where('published_at', '>', Carbon::now());

    }

    public function setPublishedAtAttribute($date) {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
