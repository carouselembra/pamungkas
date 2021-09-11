<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IkkTarget extends Model
{
    use HasFactory;

    public function sasaran()
    {
        return $this->belongsTo(Sasaran::class,"sasaran_id");
    }

    public function jawabanIkkTarget()
    {
        return $this->hasOne(JawabanOutput::class, 'ikk_target_id','id');
    }
}
