<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    public function people()
    {
        return $this->hasMany(Person::class);
    }
}
