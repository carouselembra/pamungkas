<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipe_kuesioner extends Model
{
    protected $table = 'ref_tipe_kuesioners';


    public function users()
    {
        return $this->belongsToMany(User::class, 'mapping_respondens','kuesioner_id','user_id');

    }

    public function mappings()
    {
        return $this->hasMany(Mapping_responden::class, 'kuesioner_id');

    }
}
