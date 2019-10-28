<?php

use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->insert([
            'name' => 'Global 7',
            'addres' => 'Ciudad de Guatemala',
            'phone' => '2215-9594',
        ]);
    }
}
