<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function kuesioners()
    {
        return $this->belongsToMany(Tipe_kuesioner::class, 'mapping_respondens','user_id','kuesioner_id');

    }

    public function mappings()
    {
        return $this->hasMany(Mapping_responden::class, 'users_id');

    }

    public function satker()
    {
        return $this->belongsTo(Satker::class, 'id_satker');

    }
}
