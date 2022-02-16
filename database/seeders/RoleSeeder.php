<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'id' => '1',
                'role_desc' => 'Admin',
            ],
            [
                'id' => '0',
                'role_desc' => 'User',
            ],
        ];
        foreach ($role as $key => $value){
            Role::create($value);
        }
    }
}
