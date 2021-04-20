<?php

namespace Tests\Feature;

use App\Models\Animal;
use App\Models\Type;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Laravel\Passport\Client;
use Laravel\Passport\Passport;

class AnimalTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testViewAllAnimal()
    {
        //模擬客戶端憑證授權，使用模型工廠建立一個客戶端
        Passport::actingAsClient(
            Client::factory()->create()
        );

        Type::factory(5)->create();
        //User::factory(5)->create();
        Animal::factory(10)->create();

        $response = $this->json('GET', 'api/animals');
        $this->withoutExceptionHandling();

        $resultStructure = [
            "data" => [
                '*' => [
                    "id", "type_id", "type_name", "name", "birthday",
                    "age", "area", "fix", "description", "created_at",
                    "updated_at"
                ]
            ],
            "links" => [
                "first", "last", "prev", "next"
            ],
            "meta" => [
                "current_page", "from", "last_page", "path",
                "per_page", "to", "total"
            ]
        ];

        $response->assertStatus(200)->assertJsonStructure($resultStructure);
    }
    
}
