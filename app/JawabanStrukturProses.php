<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JawabanStrukturProses extends Model
{
    public function mapping()
    {
        return $this->belongsTo(Mapping_responden::class, 'mapping_id',);

    }
}
