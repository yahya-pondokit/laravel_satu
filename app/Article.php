<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
	use SoftDeletes;

    protected $table = 'article';
    protected $fillable = ['title', 'content'];
    protected $dates = ['deteled_at'];
}
