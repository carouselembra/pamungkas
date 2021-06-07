<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefFormSKriteria extends Model
{
    public function parameter()
    {
        return $this->belongsTo(RefFormSParameter::class, 'parameter_id','id');
    }
}
