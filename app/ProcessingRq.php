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

    public function extras()
    {
        return $this->belongsToMany(Extras::class, 'extra_procesingrq', 'procesingrq_id', 'extra_id');
    }

}
