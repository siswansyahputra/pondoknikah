<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Identity;
use Illuminate\Http\Request;
use App\Models\Notifications;
use Illuminate\Notifications\Notification;

class NotificationsController extends Controller
{
    public function submitReseller()
    {
        $admin = User::firstwhere('level', 'admin');
        $dataNotifi = [
            'user_id' => auth()->user()->id,
            'type' => 'submit',
            'notifiable_id' => $admin->id,
            'notifiable_type' => 'reseller',
            'data' => 'Pengajuan reseller baru'
        ];
        Notifications::create($dataNotifi);
        return redirect()->route('profile')->with('submitSuccess', 'Pengajuan berhasil');
    }
    public function viewNotifi()
    {
        $user = auth()->user();
        if ($user->level == 'admin') {
            $notifi = Notifications::where('read_at', NULL)->get();
            $countNotifi = Notifications::where('read_at', NULL)->count();
        } else {
            $notifi = "";
            $countNotifi = "";
        }
        $data = [
            'identity' => Identity::find(),
            'title' => "Notifications",
            'notifi' => $notifi,
            'countNotifi' => $countNotifi
        ];
        return view('dashboard.notifications.index', compact('data'));
    }
    public function allNotifi()
    {
        $notifi = Notifications::all();
        return view('dashboard.notifications.index', compact('notifi'));
    }
}
