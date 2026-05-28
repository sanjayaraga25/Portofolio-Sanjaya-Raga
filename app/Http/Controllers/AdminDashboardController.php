<?php

namespace App\Http\Controllers;

use App\Services\DashboardService;

class AdminDashboardController extends Controller
{
    public function __construct(
        private DashboardService $dashboardService
    ) {}

    public function index()
    {
        $stats = $this->dashboardService->getStats();

        return view('admin.dashboard', compact('stats'));
    }
}
