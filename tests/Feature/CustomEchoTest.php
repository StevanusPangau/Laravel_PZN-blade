<?php

namespace Tests\Feature;

use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomEchoTest extends TestCase
{
    public function testCustomEcho()
    {
        $person = new Person;
        $person->name = "Evan";
        $person->address = "Indonesia";

        $this->view("custom-echo", ["person" => $person])
            ->assertSeeText("Evan : Indonesia");
    }
}
