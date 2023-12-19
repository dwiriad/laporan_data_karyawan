<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;

    protected $table = 'statuses';

    protected $fillable = ['name'];

    public function data_karyawan()
    {
        return $this->hasMany(data_karyawan::class, 'status_id', 'id');
    }
}
