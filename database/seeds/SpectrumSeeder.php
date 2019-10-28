<?php

use Illuminate\Database\Seeder;

class SpectrumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spectrums')->insert([
            'type_spectrum' => 'Gama Alta',
        ]);
    }
}
