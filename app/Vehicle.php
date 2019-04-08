<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $guarded=[];
    protected $casts=[
        'ac'=>'boolean',
    ];
    
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    
    public function function2()
    {
        return $this->hasMany(ProcessingRq::class);
    }
    
}
