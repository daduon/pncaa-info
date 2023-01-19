<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Module;

class About extends Model
{
    protected $guard = 'abouts';
    protected $fillable = [
        'banner_image', 'banner_title','banner_sub_title','title','sub_title','description','module_id'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class,'module_id');
    }
}
