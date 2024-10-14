<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
        // Buat role admin jika belum ada
        $roleAdmin = Role::firstOrCreate(['name' => 'admin']);
        $roleMember = Role::firstOrCreate(['name' => 'member']); // contoh untuk role member

        // Buat user admin baru
        $userAdmin = User::create([
            'name' => 'Pribadi Ramadhan',
            'username' => 'prabusemar',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('satusampai8')
        ]);

        // Tugaskan role admin ke user
        $userAdmin->assignRole($roleAdmin);

        // Buat user member baru (opsional)
        $userMember = User::create([
            'name' => 'Ryan Yanuar Pradana',
            'username' => 'rynynr',
            'email' => 'ryan@gmail.com',
            'password' => bcrypt('siperingkat3')
        ]);

        // Tugaskan role member ke user
        $userMember->assignRole($roleMember);
    }
}
