<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agama extends Model
{
    use HasFactory;

    protected $table = 'agamas';

    protected $fillable = ['name'];

    public function data_karyawan()
    {
        return $this->hasMany(data_karyawan::class, 'agama_id', 'id');
    }
}
