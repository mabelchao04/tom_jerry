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
        // 取消外鍵約束
        Schema::disableForeignKeyConstraints();

        Type::truncate(); //清空types資料表 ID歸零
        User::truncate();
        Animal::truncate();

        Type::factory(5)->create();
        User::factory(5)->create();
        Animal::factory(10000)->create();
        //開啟外鍵約束
        Schema::enableForeignKeyConstraints();

    }
}
