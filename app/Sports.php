<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sports extends Model
{
    protected $fillable = ['name'];

    public function leagues()
    {
        return $this->hasMany(League::class);
    }
}
