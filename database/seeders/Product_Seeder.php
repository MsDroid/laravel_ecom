<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Product_Seeder extends Seeder
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
            [
                'name'=>'LG Mobile',
                'price'=>'10000',
                'description'=>'smart phone haivndj mdsoe sdsdjlo sdjoso',
                'category'=>'Mobile',
                'gallery'=>'https://static.digit.in/product/97036a3ef3b60f99a34cf0e16fb867896146a6e2.jpeg?tr=w-1200',
            ],
            [
                'name'=>'LG Mobile',
                'price'=>'10000',
                'description'=>'smart phone haivndj mdsoe sdsdjlo sdjoso',
                'category'=>'Mobile',
                'gallery'=>'https://static.digit.in/product/97036a3ef3b60f99a34cf0e16fb867896146a6e2.jpeg?tr=w-1200',
            ],
            [
                'name'=>'LG Mobile',
                'price'=>'10000',
                'description'=>'smart phone haivndj mdsoe sdsdjlo sdjoso',
                'category'=>'Mobile',
                'gallery'=>'https://static.digit.in/product/97036a3ef3b60f99a34cf0e16fb867896146a6e2.jpeg?tr=w-1200',
            ],
            [
                'name'=>'LG Mobile',
                'price'=>'10000',
                'description'=>'smart phone haivndj mdsoe sdsdjlo sdjoso',
                'category'=>'Mobile',
                'gallery'=>'https://static.digit.in/product/97036a3ef3b60f99a34cf0e16fb867896146a6e2.jpeg?tr=w-1200',
            ],

        ]);
    }
}
