<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefFormSUnsur extends Model
{
    public function subUnsur()
    {
        return $this->hasMany(RefFormSSubUnsur::class, 'unsur_id', 'id');
    }
}
