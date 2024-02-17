<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function customer()
    {
        if (auth()->user()->level == 'admin') {
            $user = User::where('level', 'customer')->get();
        } else {
            $userReff = auth()->user()->referral_code;
            $user = User::where('level', 'customer')->where('referral', $userReff)->get();
        }
        $data = [
            'user' => $user
        ];
        return view('dashboard.member.index', compact('data'));
    }
}
