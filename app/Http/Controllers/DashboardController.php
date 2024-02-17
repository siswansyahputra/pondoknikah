<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Identity;
use Illuminate\Http\Request;
use App\Models\Notifications;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboardh.index');
    }
}
