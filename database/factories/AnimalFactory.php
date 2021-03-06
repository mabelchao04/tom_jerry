<?php

namespace Database\Factories;

use App\Models\Animal;
use App\Models\User;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AnimalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Animal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //numberBetween隨機產生範圍1到3之間的整數
            'type_id' => Type::all()->random()->id,
            'name' => $this->faker->name,
            'birthday' => $this->faker->date(),
            'area' => $this->faker->city,
            'fix' => $this->faker->boolean,
            'description' => $this->faker->text,
            'personality' => $this->faker->text,
            'user_id' => User::all()->random()->id
        ];
    }
}
