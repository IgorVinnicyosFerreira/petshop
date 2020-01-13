<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'sex'];

    public function pets()
    {
        return $this->hasMany('App\Models\Pet');
    }

    public function services()
    {
        return $this->hasMany('App\Models\Service');
    }
}
