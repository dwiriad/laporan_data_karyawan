<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_kelamin extends Model
{
    use HasFactory;

    protected $table = 'jenis_kelamins';

    protected $fillable = ['name'];

    public function data_karyawan()
    {
        return $this->hasMany(data_karyawan::class, 'jk_id', 'id');
    }
}
