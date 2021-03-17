<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyFirstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->post('/getDataForm');
        $response->assertRedirect('getDataForm');

        $response = $this->get('/getDataForm');
        $response->assertStatus(200);
        $response->assertViewIs('getDataForm');
        $response->assertViewHas('categories', (new \App\Http\Controllers\Controller())->getCategories());
    }
}
