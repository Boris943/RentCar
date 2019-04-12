<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcessingRq extends Model
{
    protected $guarded=[];

    public function function1()
    {
        return $this->belongsTo(Vehicle::class);    
    }

    public function extra()
    {
        return $this->belongsToMany(Extras::class);
    }

}
