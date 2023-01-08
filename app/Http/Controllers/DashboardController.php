<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Identity;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'identity' => Identity::find(),
            'title' => "Home"
        ];
        return view('dashboard.index', compact('data'));
    }
}
