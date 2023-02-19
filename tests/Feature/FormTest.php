<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view('form', ["user" => [
            "premium" => true,
            "name" => "Evan",
            "admin" => true
        ]])->assertSee("checked")
            ->assertSee("Evan")
            ->assertDontSee("readonly");

        $this->view('form', ["user" => [
            "premium" => false,
            "name" => "Evan",
            "admin" => false
        ]])->assertDontSee("checked")
            ->assertSee("Evan")
            ->assertSee("readonly");
    }
}
