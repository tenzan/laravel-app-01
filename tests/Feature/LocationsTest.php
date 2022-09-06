<?php

namespace Tests\Feature;

use App\Models\Location;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LocationsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_user_can_create_a_location()
    {
        $this->withoutExceptionHandling();

        $attributes = [
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph
        ];

        $this->post('/locations', $attributes)->assertRedirect('/locations');

        $this->assertDatabaseHas('locations', $attributes);

        $this->get('/locations')->assertSee($attributes['name']);
    }

    /** @test */
    public function a_user_can_view_a_location()
    {
        $this->withoutExceptionHandling();

        $location = Location::factory()->create();

        $this->get($location->path())
            ->assertSee($location->name)
            ->assertSee($location->description);
    }

    /** @test */
    public function a_location_requires_a_name()
    {
        $attributes = Location::factory()->raw(['name' => '']);

        $this->post('/locations',$attributes)->assertSessionHasErrors('name');
    }

}
