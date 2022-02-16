<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
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
                'account_id' => '1',
                'ebook_id' => '1',
                'order_date' => '2022-02-14',
            ],
            [
                'account_id' => '2',
                'ebook_id' => '5',
                'order_date' => '2022-02-14',
            ],[
                'account_id' => '2',
                'ebook_id' => '10',
                'order_date' => '2022-02-15',
            ],[
                'account_id' => '3',
                'ebook_id' => '1',
                'order_date' => '2022-02-15',
            ],[
                'account_id' => '3',
                'ebook_id' => '10',
                'order_date' => '2022-02-15',
            ],
        ];
        foreach ($role as $key => $value){
            Order::create($value);
        }
    }
}
