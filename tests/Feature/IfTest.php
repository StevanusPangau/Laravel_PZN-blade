<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfTest extends TestCase
{
    public function testIf()
    {
        $this->view("if", ["hobbies" => []])
            ->assertSeeText("I Don't Have Any Hobbie!", false); // false digunakan agar escape tidak aktif jadi bisa menggunakan tanda petik

        $this->view("if", ["hobbies" => ["coding"]])
            ->assertSeeText("I Have One Hobbiy!");

        $this->view("if", ["hobbies" => ["coding", "programming"]])
            ->assertSeeText("I Have Multiple Hobbies!");
    }
}
