<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'キャップ',
            'detail' => '野球帽です。',
            'price' => '2000',
            'imgpath' => 'cap.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'ジャケット',
            'detail' => '黒色',
            'price' => '4000',
            'imgpath' => 'jaket.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'ボトム',
            'detail' => 'グレー',
            'price' => '5000',
            'imgpath' => 'bottom.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'Tシャツ',
            'detail' => '薄手です',
            'price' => '1500',
            'imgpath' => 't-shirt.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'スニーカー',
            'detail' => 'ナイキ',
            'price' => '10000',
            'imgpath' => 'sunker.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'スニーカー',
            'detail' => 'アディダス',
            'price' => '9000',
            'imgpath' => 'kutu.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'バッグ',
            'detail' => '旅行で使えます',
            'price' => '12000',
            'imgpath' => 'bag.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'ダウン',
            'detail' => 'あったかいです',
            'price' => '20000',
            'imgpath' => 'down.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => 'シャツ',
            'detail' => 'ビジネス用',
            'price' => '3500',
            'imgpath' => 'shirt.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

    }
}
