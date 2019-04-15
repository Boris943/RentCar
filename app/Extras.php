<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extras extends Model
{
    protected $guarded = [];

    public function procrq()
    {
        return $this->belongsToMany(ProcessingRq::class, 'extra_procesingrq', 'extra_id', 'procesingrq_id');
    }
}
