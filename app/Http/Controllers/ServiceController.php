<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        return view('services.index', [
            'services' => config('vintexora.services'),
        ]);
    }

    public function show(string $slug): View|Response
    {
        $service = collect(config('vintexora.services'))->firstWhere('slug', $slug);

        if (! $service) {
            abort(404);
        }

        $view = 'services.'.$slug;

        if (! view()->exists($view)) {
            abort(404);
        }

        return view($view, [
            'service' => $service,
            'services' => config('vintexora.services'),
        ]);
    }
}
