<?php

namespace App\Http\Controllers;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CampaignController extends Controller
{
    
    public function index(): View
{
    return view('campaigns.index', [
        'campaigns' => Campaign::latest()->get() 
    ]);
}
    public function create(): View
    {
        return view('campaigns.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "subject" => "required",
            "email_body" => "required",
            "phishing_link" => "required|url"
        ]);
        $data = [
    "subject" => $request->subject,
    "email_body" => $request->email_body,
    "phishing_link" => $request->phishing_link
];

Campaign::create($data);

        return redirect()
            ->route('campaigns.index')
            ->with('success', 'Campaign Created');
    }
}
