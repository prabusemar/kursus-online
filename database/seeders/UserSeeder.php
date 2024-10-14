<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat user baru
        $user = User::create([
            'name' => 'Pribadi Ramadhan',
            'username' => 'prabusemar',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('satusampai8')
        ]);

        // Cari role berdasarkan nama
        $role = Role::where('name', 'admin')->first();

        // Tugaskan role ke user
        $user->assignRole($role);
    }
}
