<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view('template.include', [])
            ->assertSeeText("Belajar Laravel Blade Template")
            ->assertSeeText("Selamat datang di website kami")
            ->assertSeeText("Selamat datang di web");

        $this->view('template.include', ["tittle" => "Evan"])
            ->assertSeeText("Evan")
            ->assertSeeText("Selamat datang di website kami")
            ->assertSeeText("Selamat datang di web");
    }
}
