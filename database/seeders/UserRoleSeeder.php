<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use Spatie\Permission\Models\Role;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRoleSeeder extends Seeder
{

public function run()
{
    if (!User::where('email', 'sugiarto@sija.com')->exists()) {
        $user = User::create([
            'name' => 'Sugiarto',
            'email' => 'sugiarto@sija.com',
            'password' => Hash::make('password'),
        ]);

        // Tambahkan role atau hubungan lainnya di sini
    }
}
}

