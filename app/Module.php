<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Home;
use App\About;
use App\Contact;

class Module extends Model
{
    protected $guard = 'modules';
    protected $fillable = [
        'name',
        'status'
    ];

    public function homes()
    {
        return $this->hasMany(Home::class,'module_id','id');
    }

    public function abouts()
    {
        return $this->hasMany(About::class,'module_id','id');
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class,'module_id','id');
    }
}
