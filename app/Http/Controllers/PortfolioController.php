<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

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
}
