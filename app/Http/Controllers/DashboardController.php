<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class DashboardController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function showDashboard()
    {
        $users = $this->userService->getAll();
        return view('layout.admin.dashboard', compact('users'));
    }
}
