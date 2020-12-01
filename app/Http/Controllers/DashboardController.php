<?php

namespace App\Http\Controllers;

use App\Services\NewspaperService;
use App\Services\UserService;

class DashboardController extends Controller
{
    protected $newspaperService;

    public function __construct(NewspaperService $newspaperService)
    {
        $this->newspaperService = $newspaperService;
    }
    public function showDashboard()
    {
        $newspapers = $this->newspaperService->getAll();
        return view('layout.admin.dashboard', compact('newspapers'));
    }
}
