<?php

namespace Tests\Unit;

use App\Models\Location;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LocationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_path()
    {
        $location = Location::factory()->create();

        $this->assertEquals('/locations/' . $location->id, $location->path());
    }
}
