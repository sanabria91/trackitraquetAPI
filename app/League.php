<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{

    protected $fillable = ['sport_id','name','is_public','created_by_id','admin_id'];

    public function Sport()
    {
        return $this->belongsTo(Sports::class);
    }

}
