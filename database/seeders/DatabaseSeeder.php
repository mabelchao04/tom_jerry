<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\User;
use App\Models\Type;
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

        Type::truncate();
        User::truncate();
        Animal::truncate();

        Type::factory(5)->create();
        User::factory(5)->create();
        Animal::factory(10000)->create();

        Schema::enableForeignKeyConstraints();

    }
}
