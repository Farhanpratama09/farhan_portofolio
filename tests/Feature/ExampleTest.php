<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test that the portfolio single page returns a successful 200 response
     * and contains the essential branding and section elements.
     */
    public function test_portfolio_page_loads_successfully_with_data(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Farhan Pratama');
        $response->assertSee('Web Developer & AI Enthusiast');
        $response->assertSee('Core Web & Backend');
        $response->assertSee('Portfolio Showcase');
        $response->assertSee('Kontak');
    }
}
