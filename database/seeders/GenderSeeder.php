<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender = [
            [
                'id' => '1',
                'gender_desc' => 'Male',
            ],
            [
                'id' => '2',
                'gender_desc' => 'Female',
            ],
        ];
        foreach ($gender as $key => $value){
            Gender::create($value);
        }
    }
}
