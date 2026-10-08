<?php

namespace Tests\Feature;

use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
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
        $response->assertSeeText('Halo, saya Farhan.');
        $response->assertSeeText('BARS');
        $response->assertSeeText('Keahlian & Perkakas');
        $response->assertSeeText('Proyek Pilihan');
        $response->assertSeeText('Aplikasi Monev Kinerja Guru');
        $response->assertSeeText('SIDE_QUEST_LOG.EXE');
        $response->assertSeeText('Badan Pusat Statistik (BPS)');
        $response->assertSeeText('Shopee Express');
        $response->assertSeeText('UNDUH CV');
        $response->assertSeeText('??? // EXPANDABLE_TECH_STACK');
        $response->assertSeeText('[ Unlock via Recruitment ]');
        $response->assertSeeText('Mari Terhubung & Berdiskusi');
    }

    public function test_portfolio_page_has_seo_meta_and_disabled_empty_demo(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('<link rel="canonical"', false);
        $response->assertSee('property="og:title"', false);
        $response->assertSee('name="description"', false);
        // Semua demo di config masih '#', jadi tombol tampil sebagai "Segera Hadir" tanpa href '#'
        $response->assertSeeText('Segera Hadir');
        $response->assertDontSee('href="#"', false);
    }

    public function test_contact_form_sends_email_message(): void
    {
        Mail::fake();

        $response = $this->from('/')->post('/contact', [
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'message' => 'Halo, saya ingin bekerja sama.',
        ]);

        $response->assertRedirect('/');
        Mail::assertSent(ContactMessage::class, function (ContactMessage $mail) {
            return $mail->hasTo('fahranpratama64@gmail.com')
                && $mail->contact['name'] === 'Budi Santoso'
                && $mail->contact['email'] === 'budi@example.com';
        });
    }

    public function test_contact_social_links_open_external_messaging_apps(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('https://mail.google.com/mail/?view=cm', false);
        $response->assertSee('https://wa.me/628218919798?text=', false);
    }
}
