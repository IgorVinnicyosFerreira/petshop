<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;
    protected $fillable = ['client_id', 'user_id', 'pet_id', 'initial_time', 'end_time', 'price', 'description'];

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function pet()
    {
        return $this->belongsTo('App\Models\Pet');
    }
}
