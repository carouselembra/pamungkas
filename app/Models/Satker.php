<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    protected $table = 'ref_satkers';

    public function users()
    {
        return $this->hasMany(User::class, 'id_satker');
    }
}
