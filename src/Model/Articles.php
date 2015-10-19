<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model {

	protected $table = "articles";

    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    public function scopeUnpublished($query)
    {
        $query -> where('published_at', '<=', Carbon::now());
    }

    public function scopePublished($query)
    {
        $query -> where('published_at', '>', Carbon::now());
    }

    public function setPublishedAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }
}