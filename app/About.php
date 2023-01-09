<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    protected $guard = 'abouts';
    protected $fillable = [
        'banner_image', 'banner_title', 'banner_sub_title','title','sub_title','description'
    ];
}
