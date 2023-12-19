<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datakaryawan extends Model
{
    use HasFactory;

    protected $fillable = ['divisi_id','agama_id', 'gol_id', 'jk_id','status_id', 'user_id','nip', 'name', 'tempat_lahir', 'tanggal_lahir', 'telp', 'alamat', 'image'];

    public function agama()
    {
        return $this->belongsTo(Agama::class, 'agama_id', 'id');
    }
    public function bidang_divisi()
    {
        return $this->belongsTo(Bidang_Divisi::class, 'divisi_id', 'id');
    }
    public function gol()
    {
        return $this->belongsTo(Gol::class, 'gol_id', 'id');
    }
    public function jenis_kelamin()
    {
        return $this->belongsTo(Jenis_Kelamin::class, 'jk_id', 'id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
