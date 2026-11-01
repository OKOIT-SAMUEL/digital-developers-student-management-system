<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $staff = [
            ['Administrator', 'admin@mubs.ac.ug', 'admin'],
            ['Mr Mosh Gyagenda', 'mosh@mubs.ac.ug', 'lecturer'],
            ['Ms Joy Tiko', 'joy@mubs.ac.ug', 'lecturer'],
            ['Registry Officer', 'registry@mubs.ac.ug', 'staff'],
        ];

        foreach ($staff as $person) {
            $user = User::where('email', $person[1])->first();

            if (!$user) {
                $user = new User();
            }

            $user->name = $person[0];
            $user->email = $person[1];
            $user->role = $person[2];
            $user->password = bcrypt('password');
            $user->save();
        }
    }
}