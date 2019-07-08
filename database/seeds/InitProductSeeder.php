<?php

use Illuminate\Database\Seeder;

class InitProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i = 0 ; $i <= 10 ; $i++){
            DB::table('products')->insert([
                'name' => 'Áo Vàng' .$i,
                'price' => '350000'+ $i*10000,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
  