<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gol extends Model
{
    use HasFactory;

    protected $table = 'gol_darahs';

    protected $fillable = ['name'];

    public function data_karyawan()
    {
        return $this->hasMany(data_karyawan::class, 'gol_id', 'id');
    }
}
