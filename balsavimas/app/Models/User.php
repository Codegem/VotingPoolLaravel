<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Aprasau priklausomybes priklauso daug useriu

    public function grupes(){
        return $this->belongsToMany(Grupes::class);
    }

    // ar priklauso grupems 

    public function turiGrupes($grupes){
        if($this->grupes()->whereIn('Group_Name', $grupes)->first()){
            return true;
        }
        return false;
    }

    // ar priklauso vienai kazkuriai grupei

    public function turiGrupe($grupe){
        if($this->grupes()->where('Group_Name', $grupe)->first()){
            return true;
        }
        return false;
    }

    // Useriui priklauso poolai

    public function voting(){
        return $this->belongsToMany(Voting::class);
    }


}