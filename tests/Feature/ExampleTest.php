<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test that the enhanced anime dashboard portfolio page renders successfully
     * and contains all key components (Hero, Projects, About, Dashboard Widgets, Contact).
     */
    public function test_portfolio_page_loads_with_all_sections(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Farhan Pratama');
        $response->assertSeeText('Aplikasi Monev Kinerja Guru');
        $response->assertSeeText('Perancangan Sistem & Rekayasa Perangkat Lunak');
        $response->assertSeeText('Interactive Dashboard Showcase');
        $response->assertSeeText('Midnight Coding Symphony');
        $response->assertSeeText('Mari Terhubung & Berdiskusi');
    }
}
