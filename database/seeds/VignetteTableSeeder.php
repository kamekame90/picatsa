<?php

use Illuminate\Database\Seeder;

class VignetteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vignette::class,20)->create();
    }
}
