<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $guarded = [];

    public function stocks(){
        return $this->hasMany(Stock::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
