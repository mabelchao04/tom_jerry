<?php

namespace Database\Seeders;

use App\Animal;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

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

        Schema::disableForeignKeyConstraints();
        Animal::truncate();
        User::truncate();

        User::factory(5)->create();

        Animal::factory(10000)->create();

        Schema::enableForeignKeyConstraints();

    }
}
