<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Industri extends Model
{
    use HasFactory;
    protected $table = 'industri';

    protected $fillable = ['nama', 'bidang_usaha', 'alamat', 'kontak', 'email', 'guru_pembimbing'];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_pembimbing');
    }

    public function pkl()
    {
        return $this->hasMany(PKL::class);
    }
}

