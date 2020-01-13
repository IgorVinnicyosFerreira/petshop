<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = ['name', 'race', 'age', 'client_id'];

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function services()
    {
        return $this->hasMany('App\Models\Service');
    }
}
