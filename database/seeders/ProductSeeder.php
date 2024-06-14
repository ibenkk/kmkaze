<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->create(
            [
                'name_product'=>'vape 1',
                'kategory'=>'mod',
                'harga'=>'RP 2.000.000',
            ]
        );
        DB::table('products')->create(
            [
                'name_product'=>'vape 2',
                'kategory'=>'mod',
                'harga'=>'RP 2.000.000',
            ]
        );

    }
}
