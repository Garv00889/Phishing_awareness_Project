<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PhishingLogs;

class DashboardController extends Controller
{
    public function index()
{
    return view('phishing.dashboard', [
        'logs' => PhishingLogs::latest()->get()
    ]);
}
}