<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test that the refined natural dashboard portfolio page renders successfully.
     */
    public function test_portfolio_page_loads_with_natural_content(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Farhan Pratama');
        $response->assertSeeText('Aplikasi Monev Kinerja Guru');
        $response->assertSeeText('Tentang Saya');
        $response->assertSeeText('Proyek Pilihan');
        $response->assertSeeText('Musik Koding');
        $response->assertSeeText('Fokus & Teknologi');
        $response->assertSeeText('Mari Terhubung & Berdiskusi');
    }
}
