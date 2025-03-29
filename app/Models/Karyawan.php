<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\table;

class Karyawan extends Model
{
    protected $table = 'karyawan';



    protected $fillable = 
    [
        'nama_lengkap',
        'nip',
        'nomor_telepon',
        'alamat',
        'gender',
        'tanggal_lahir',
    ];
        
    
}
