<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public $timestamps = false;
    protected $fillable = ['title', 'content', 'gambar'];
}
