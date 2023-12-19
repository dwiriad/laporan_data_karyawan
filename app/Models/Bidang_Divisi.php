<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang_Divisi extends Model
{
    use HasFactory;

    protected $table = 'bidang_divisis';

    protected $fillable = ['name','keterangan'];

    public function data_karyawan()
    {
        return $this->hasMany(DataKaryawan::class, 'divisi_id', 'id');
    }
}
