<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RawPhpTest extends TestCase
{
    public function testRawPhp()
    {
        $this->view("raw-php", [])
            ->assertSeeText("Evan")
            ->assertSeeText("Indonesia");
    }
}
