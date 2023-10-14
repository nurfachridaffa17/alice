<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'tb_mahasiswa';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_mahasiswa', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_hp'];
}
