<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio single page application.
     */
    public function index(): View
    {
        $portfolio = config('portfolio');

        return view('welcome', compact('portfolio'));
    }

    /**
     * Send a contact message to the configured email address.
     */
    public function contact(Request $request): JsonResponse|RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        try {
            Mail::to(config('portfolio.email'))->send(new ContactMessage($data));

            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Pesan Anda berhasil dikirim. Saya akan segera membalasnya.',
                ]);
            }

            return redirect()->route('home')
                ->with('success', 'Pesan Anda berhasil dikirim. Saya akan segera membalasnya.');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());

            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Koneksi pengiriman email server sedang dalam kendala. Silakan hubungi langsung via WhatsApp atau email fahranpratama64@gmail.com.',
                ], 500);
            }

            return redirect()->route('home')
                ->with('error', 'Koneksi pengiriman email server sedang dalam kendala. Silakan hubungi langsung via WhatsApp atau email fahranpratama64@gmail.com.');
        }
    }
}
