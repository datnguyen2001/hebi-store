<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (Request $request)
    {
        $titlePage = 'Tổng quan';
        $page_menu = 'dashboard';
        $page_sub = null;
        return view('admin.dashboard', compact('titlePage', 'page_sub', 'page_menu'));
    }
}
