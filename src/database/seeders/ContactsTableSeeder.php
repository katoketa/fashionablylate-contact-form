<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category_id' => 2,
            'first_name' => '太郎',
            'last_name' => '山田',
            'gender' => 1,
            'email' => 'test@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'detail' => '届いた商品が注文した商品ではありませんでした。
商品の取り替えをお願いします。'
        ];
        for ($i = 0; $i < 50; $i++) {
            DB::table('contacts')->insert($param);
        }

                $param = [
            'category_id' => 3,
            'first_name' => '花子',
            'last_name' => '園田',
            'gender' => 2,
            'email' => 'super@example.com',
            'tel' => '08012345678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building' => '千駄ヶ谷マンション101',
            'detail' => '届いた商品が腐っていました。
商品交換をお願いします。'
        ];
        for ($i = 0; $i < 20; $i++) {
            DB::table('contacts')->insert($param);
        }
    }
}
