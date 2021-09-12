<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealisasiOutput extends Model
{
    use HasFactory;

    public function ikkTarget()
    {
        return $this->belongsTo(IkkTarget::class, 'ikk_target_id','id');
    }
}
