<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test that the anime dashboard portfolio page renders successfully
     * and contains all key components (Hero, Projects, Tech Stack, Info Cards, Contact).
     */
    public function test_anime_dashboard_portfolio_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Farhan Pratama');
        $response->assertSeeText('Web Developer');
        $response->assertSeeText('Aplikasi Monev Kinerja Guru');
        $response->assertSeeText('Recent Tech Stack');
        $response->assertSeeText('Laravel Framework');
        $response->assertSeeText('Full-Stack Development');
        $response->assertSeeText('Mari Terhubung & Berdiskusi');
    }
}
