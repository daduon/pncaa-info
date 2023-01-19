<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Module;

class Home extends Model
{
    protected $guard = 'homes';
    protected $fillable = [
        'banner_image', 'banner_title','banner_sub_title','title','sub_title','description','module_id'
    ];


    public function module()
    {
        return $this->belongsTo(Module::class,'module_id');
    }
}
