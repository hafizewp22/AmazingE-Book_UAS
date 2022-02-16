<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $role = [
            [
                'first_name' => 'Hafiz',
                'middle_name' => 'Elfia Wedo',
                'last_name' => 'Putra',
                'gender_id' => '1',
                'email' => 'hafizelfiawedoputra@gmail.com',
                'password' => bcrypt('binus111'),
                'role_id' => '1',
                'display_picture_link' => '1644900441.jpg',
            ],
            [
                'first_name' => 'Ani',
                'middle_name' => 'Neswati',
                'last_name' => 'Indah',
                'gender_id' => '2',
                'email' => 'd.ardi@gmail.com',
                'password' => bcrypt('binus111'),
                'role_id' => '2',
                'display_picture_link' => '1644896356.png',
            ],
            [
                'first_name' => 'Muhammad',
                'middle_name' => 'Doni',
                'last_name' => 'Putra',
                'gender_id' => '1',
                'email' => 'jxz77288@cuoly.com',
                'password' => bcrypt('binus111'),
                'role_id' => '2',
                'display_picture_link' => '1644896415.png',
            ],
        ];
        foreach ($role as $key => $value){
            User::create($value);
        }
    }
}
