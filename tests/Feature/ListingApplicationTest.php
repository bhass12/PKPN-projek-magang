<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ListingApplicationTest extends TestCase
{
    public function test_listing_application_page_renders_the_form_and_directory_preview(): void
    {
        $response = $this->withoutVite()->get(route('listing.create'));

        $response->assertOk()
            ->assertSee('Ajukan Listing Baru')
            ->assertSee('Preview di Directory')
            ->assertSee('id="listingForm"', false)
            ->assertSee('name="foto[]"', false);
    }

    public function test_directory_sidebar_cta_opens_the_listing_form(): void
    {
        $this->withoutVite()
            ->get(route('directory'))
            ->assertOk()
            ->assertSee(route('listing.create'), false);
    }

    public function test_valid_listing_application_is_emailed_to_the_directory_team(): void
    {
        Mail::shouldReceive('raw')
            ->once()
            ->withArgs(fn (string $body) => str_contains($body, 'Nama perusahaan/usaha: Hotel Contoh'));

        $response = $this->from(route('listing.create'))->post(route('listing.store'), [
            'perusahaan' => 'Hotel Contoh',
            'kategori' => 'hotel',
            'lokasi' => 'Sanur, Denpasar',
            'telepon' => '081234567890',
            'email' => 'info@example.com',
            'website' => 'https://example.com',
            'deskripsi' => 'Penginapan nyaman dekat pantai.',
        ]);

        $response->assertRedirect(route('listing.create'))
            ->assertSessionHas('success');
    }

    public function test_invalid_listing_application_is_rejected_before_emailing(): void
    {
        Mail::shouldReceive('raw')->never();

        $response = $this->from(route('listing.create'))->post(route('listing.store'), [
            'perusahaan' => 'Hotel Contoh',
            'kategori' => 'not-a-category',
            'lokasi' => 'Sanur, Denpasar',
            'telepon' => '081234567890',
            'email' => 'not-an-email',
            'deskripsi' => 'Penginapan nyaman dekat pantai.',
        ]);

        $response->assertRedirect(route('listing.create'))
            ->assertSessionHasErrors(['kategori', 'email']);
    }
}
