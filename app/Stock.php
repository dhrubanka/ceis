<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $guarded = [];

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }
}
