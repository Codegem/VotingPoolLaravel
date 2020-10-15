<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    // mass asignment protect
    protected $guarded = [];

    // useriui priklauso daug poolu
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
