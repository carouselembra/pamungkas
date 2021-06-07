<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapping_responden extends Model
{
    protected $table = 'mapping_respondens';


    public function users()
    {
        return $this->belongsToMany(User::class, 'mapping_respondens','kuesioner_id','users_id');

    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id',);

    }

    public function kuesioner()
    {
        return $this->belongsTo(Tipe_kuesioner::class, 'kuesioner_id',);

    }

    public function jawaban()
    {
        return $this->hasMany(JawabanStrukturProses::class, 'mapping_id',);

    }

}
