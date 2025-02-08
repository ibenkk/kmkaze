<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Penjualan;
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


        Customer::create(
            [
                'number'=>'testing',
                'alamat'=>'testing',
                'gmail'=>'gmail',
                'otp'=>123,
                'verify'=>1,

            ]
        );
        Product::create(
            [
                'name_product'=>'vape 1',
                'product_category'=>'Mod',
                'product_price'=>2000000,
                'product_stock'=>2,
                // 'product_picture'=>"TESTING",
                'best_product'=>'1',
                'product_description'=>"ASDSADDSA",
                'updated_at'=>Carbon::now(),
                'created_at'=>Carbon::now(),
            ]
        );
        Product::create(
            [
                'name_product'=>'vape 2',
                'product_category'=>'Kapas',
                'product_price'=>2000000,
                'product_stock'=>2,
                // 'product_picture'=>"TESTING",
                'best_product'=>'1',
                'product_description'=>"ASDSADDSA",
                'updated_at'=>Carbon::now(),
                'created_at'=>Carbon::now(),
            ]
        );
        Product::create(
            [
                'name_product'=>'vape 3',
                'product_category'=>'Liquid',
                'product_price'=>2000000,
                'product_stock'=>2,
                // 'product_picture'=>"TESTING",
                'best_product'=>'1',
                'product_description'=>"ASDSADDSA",
                'updated_at'=>Carbon::now(),
                'created_at'=>Carbon::now(),
            ]
        );
        Product::create(
            [
                'name_product'=>'vape 4',
                'product_category'=>'Mod',
                'product_price'=>2000000,
                'product_stock'=>2,
                // 'product_picture'=>"TESTING",
                'best_product'=>'1',
                'product_description'=>"ASDSADDSA",
                'updated_at'=>Carbon::now(),
                'created_at'=>Carbon::now(),
            ]
        );
        Penjualan::create(
            [
                'nomor_telepon'=>'telepon 1',
                'Alamat'=>'Depok',
            'Comment'=>"DATA 1",
            'Total'=>1,
            'id_product'=>1,
            ]
        );
        Penjualan::create(
            [
                'nomor_telepon'=>'HAPUS INI',
                'Alamat'=>'Depok',
            'Comment'=>"DATA 1",
            'Total'=>1,
            'id_product'=>1,
            ]
        );
        Penjualan::create(
            [
                'nomor_telepon'=>'telepon 1',
                'Alamat'=>'Depok',
            'Comment'=>"DATA 1",
            'Total'=>1,
            'id_product'=>1,
            ]
        );
        Penjualan::create(
            [
                'nomor_telepon'=>'telepon 1',
                'Alamat'=>'Depok',
            'Comment'=>"DATA 1",
            'Total'=>1,
            'id_product'=>1,
            ]
        );
        Penjualan::create(
            [
                'nomor_telepon'=>'telepon 1',
                'Alamat'=>'Depok',
            'Comment'=>"DATA 1",
            'Total'=>1,
            'id_product'=>2,
            ]
        );
        User::create(['name'=>"Yosua Jelianfero Solissa",'email'=>"yosuasolissa@gmail.com",'password'=>'1234','isadmin'=>true]);


    }
}
