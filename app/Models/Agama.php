<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;

    protected $table = 'agama';

    public function DataPenduduk()
    {
        return $this->hasMany(DataPenduduk::class);
    }
}
