<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function about(): View
    {
        return view('pages.about', [
            'services' => config('vintexora.services'),
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact', [
            'services' => config('vintexora.services'),
            'selected' => request('service'),
        ]);
    }

    public function privacy(): View
    {
        return view('pages.privacy');
    }
}
