<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test that the modern anime dashboard portfolio page renders successfully
     * and contains all key showcase components.
     */
    public function test_portfolio_page_renders_with_alive_dashboard_elements(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Farhan Pratama');
        $response->assertSeeText('Web Developer');
        $response->assertSeeText('Aplikasi Monev Kinerja Guru');
        $response->assertSeeText('Late Night Coding Sessions');
        $response->assertSeeText('Core Capabilities');
        $response->assertSeeText('Clean Architecture');
        $response->assertSeeText('Mari Terhubung & Berdiskusi');
    }
}
