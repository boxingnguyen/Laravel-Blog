<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [ // cho phep truy cap va thay doi du lieu trong db o 2 truong title va body
		'title',
	    'body'
    ];
}

