<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = [
        'nama',
        'nip',
        'gender',
        'alamat',
        'kontak',
        'email',
    ];

    // Relasi ke Industri (jika guru punya banyak industri)
    public function industri()
    {
        return $this->hasMany(Industri::class);
    }

    // Relasi ke PKL (jika guru punya banyak data PKL)
    public function pkl()
    {
        return $this->hasMany(PKL::class, 'guru_id');
    }
}
