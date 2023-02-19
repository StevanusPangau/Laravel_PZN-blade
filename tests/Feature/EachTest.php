<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each-once.each", ["users" => [
            [
                "name" => "Evan",
                "hobbies" => ["Coding", "Gaming"]
            ],
            [
                "name" => "Stevanus",
                "hobbies" => ["Coding", "Gaming"]
            ]
        ]])->assertSeeInOrder([".red", "Evan", "Coding", "Gaming", "Stevanus", "Coding", "Gaming"]);
    }
}
