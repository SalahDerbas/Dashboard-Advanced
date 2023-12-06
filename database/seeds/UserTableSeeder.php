<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'            => 'admin'                         ,
            'email'           => 'admin@admin.com'               ,
            'password'        => Hash::make('12345678')    ,
        ]);
    }
}
