<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenduduk extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'data_penduduk';

    public function JenisKelamin()
    {
        return $this->belongsTo(JenisKelamin::class);
    }

    public function Agama()
    {
        return $this->belongsTo(Agama::class);
    }

    public function Status()
    {
        return $this->belongsTo(Status::class);
    }
}
