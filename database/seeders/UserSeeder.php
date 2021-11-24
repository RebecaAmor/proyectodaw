<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Rebeca Amor',
            'email' => 'admin@admin.com',
            'nif' => '53302493Q',
            'bday' => '1989-02-26',
            'password' => bcrypt('secret'),
        ]);

        $user->assignRole('Admin');
    }
}