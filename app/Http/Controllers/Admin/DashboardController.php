<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('content.admin.dashboard');
    }
}
