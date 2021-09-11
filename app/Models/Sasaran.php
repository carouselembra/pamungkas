<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sasaran extends Model
{
    use HasFactory;

    public function ikkTarget()
    {
        return $this->hasMany(IkkTarget::class,'sasaran_id');
    }

    public function jawabanSasaran()
    {
        return $this->hasOne(JawabanSasaran::class, 'sasaran_id','id');
    }
}
