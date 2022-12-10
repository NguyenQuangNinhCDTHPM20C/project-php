<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name'=> 'Iphone 14 ',
             'description'=> 'Dien thoai sang chanh',
             'color' => 'vang',
             'ram'=> '8GB',
             'storage'=>'128GB',
             'front_camera'=> '48MP',
             'back_camera'=> '12MP',
             'price'=>32000,
             'stock'=>3,
             'image'=>'https://product.hstatic.net/200000409445/product/14promax_vangsau_937df645ec4149c0937cc3045659f280_master.jpg']);
        Product::create([
         'product_name'=> 'Iphone 14 ',
         'description'=> 'Dien thoai sang chanh',
         'color' => 'vang',
         'ram'=> '8GB',
         'storage'=>'128GB',
         'front_camera'=> '48MP',
         'back_camera'=> '12MP',
         'price'=>32990000,
         'stock'=>3,
         'image'=>'https://product.hstatic.net/200000409445/product/14promax_vangsau_937df645ec4149c0937cc3045659f280_master.jpg'
        ]);
        Product::create([
            'product_name'=> 'Iphone 11 ',
            'description'=> 'Dien thoai sang chanh',
            'color' => 'den',
            'ram'=> '8GB',
            'storage'=>'128GB',
            'front_camera'=> '48MP',
            'back_camera'=> '12MP',
            'price'=>32990000,
            'stock'=>3,
            'image'=>'https://product.hstatic.net/200000409445/product/14promax_vangsau_937df645ec4149c0937cc3045659f280_master.jpg'
           ]);
           Product::create([
            'product_name'=> 'Iphone 10 ',
            'description'=> 'Dien thoai sang chanh',
            'color' => 'trang',
            'ram'=> '8GB',
            'storage'=>'128GB',
            'front_camera'=> '48MP',
            'back_camera'=> '12MP',
            'price'=>32990000,
            'stock'=>3,
            'image'=>'https://product.hstatic.net/200000409445/product/14promax_vangsau_937df645ec4149c0937cc3045659f280_master.jpg'
           ]);
    }
}
