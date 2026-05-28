<?php

namespace App\Http\Controllers;

use App\Services\PortfolioService;

class PortfolioController extends Controller
{
    public function __construct(
        private PortfolioService $portfolioService
    ) {}

    public function index()
    {
        $data = $this->portfolioService->getHomeData();

        return view('pages.home', $data);
    }
}
