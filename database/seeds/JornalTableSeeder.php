<?php

use Illuminate\Database\Seeder;

class JornalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Jornal::class, 15)->create();
    }
}
