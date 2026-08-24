<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function audit(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'whatsapp' => ['nullable', 'string', 'max:40'],
            'business' => ['nullable', 'string', 'max:180'],
            'service' => ['nullable', 'string', 'max:80'],
            'message' => ['nullable', 'string', 'max:2000'],
            'source' => ['nullable', 'string', 'max:80'],
        ]);

        return back()->with('audit_sent', true);
    }
}
