<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
            'password'        => Hash::make('12345678')          ,
            'phone'           =>  987654321                      ,
            'firstname'       => 'first'                         ,
            'lastname'        => 'last'                          ,
            'gender'          => 'Male'                          ,
            'material_status' => 'Single'                        ,
            'status'          => 'Active'                        ,
            'photo'           => 'http://localhost:8000/assets/images/Logo SD1.png',
        ]);

        $role = Role::create([ 'name' => 'Owner' ]);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

    }
}
