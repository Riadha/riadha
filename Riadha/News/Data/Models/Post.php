<?php

namespace Riadha\News\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $table = 'news_posts';

    protected $fillable = [
        'title',
        'body',
        'status'
    ];
}
