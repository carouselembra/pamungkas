<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefFormSSubUnsur extends Model
{
    public function parameter()
    {
        return $this->hasMany(RefFormSParameter::class, 'sub_unsur_id', 'id');
    }

    public function unsur()
    {
        return $this->belongsTo(RefFormSUnsur::class, 'unsur_id','id');
    }
}
