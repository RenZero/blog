<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'Blog';

    protected $filetable = [
        'title',
        'body',
        'published_at'
        //$add = App\Blog::create(['title' => 'New title', 'body' => 'New body', 'published_at' => Carbon\Carbon::now()]);
    ];
}
