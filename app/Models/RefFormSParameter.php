<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefFormSParameter extends Model
{
    public function kriteria()
    {
        return $this->hasMany(RefFormSKriteria::class, 'parameter_id', 'id');
    }

    public function subUnsur()
    {
        return $this->belongsTo(RefFormSSubUnsur::class, 'sub_unsur_id','id');
    }
}
