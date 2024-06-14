<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Product::create(
            [
                'name_product'=>'vape 1',
                'kategory'=>'mod',
                'harga'=>'RP 2.000.000',
                'updated_at'=>Carbon::now(),
                'created_at'=>Carbon::now(),
            ]
        );
        Product::create(
            [
                'name_product'=>'vape 1',
                'kategory'=>'kapas',
                'harga'=>'RP 2.000.000',
                'updated_at'=>Carbon::now(),
                'created_at'=>Carbon::now(),
            ]
        );
        Product::create(
            [
                'name_product'=>'vape 1',
                'kategory'=>'liquid',
                'harga'=>'RP 2.000.000',
                'updated_at'=>Carbon::now(),
                'created_at'=>Carbon::now(),
            ]
        );
        Product::create(
            [
                'name_product'=>'vape 1',
                'kategory'=>'mod',
                'harga'=>'RP 2.000.000',
                'updated_at'=>Carbon::now(),
                'created_at'=>Carbon::now(),
            ]
        );

    }
}
