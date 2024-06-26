<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = \App\Models\User::all();
        $orders = \App\Models\Order::all();
        return view('back.admin', compact('users', 'orders'));
    }
}
