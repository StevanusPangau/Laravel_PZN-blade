<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class InlineBladeTemplateTest extends TestCase
{
    public function testInlineBladeTemplate()
    {
        // blade render cocok digunakan untuk mengirim data yang sederhana seperti email tanpa membuat filenya...
        $respone = Blade::render('Hello {{$name}}', ['name' => 'Evan']);
        assertEquals("Hello Evan", $respone);
    }
}
