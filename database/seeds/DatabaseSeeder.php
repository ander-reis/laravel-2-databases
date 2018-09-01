<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MateriaTableSeeder::class);
        $this->call(JornalTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(ProviderTableSeeder::class);
    }
}
