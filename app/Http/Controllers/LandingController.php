<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Throwable;

class LandingController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function audit(Request $request): RedirectResponse
    {
        $back = strtok(url()->previous(), '#').'#audit';

        // Honeypot: real visitors never see or fill this field.
        if ($request->filled('company_site')) {
            return redirect()->to($back)->with('audit_sent', true);
        }

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'whatsapp' => ['nullable', 'string', 'max:40'],
            'business' => ['nullable', 'string', 'max:180'],
            'service' => ['nullable', 'string', 'max:80'],
            'message' => ['nullable', 'string', 'max:2000'],
            'source' => ['nullable', 'string', 'max:80'],
        ]);

        // Send errors back to the form itself, not the top of the page.
        if ($validator->fails()) {
            return redirect()->to($back)->withErrors($validator)->withInput();
        }

        $data = $validator->validated();

        $lead = $data + [
            'page' => url()->previous(),
            'ip' => $request->ip(),
            'at' => now()->toIso8601String(),
        ];

        Storage::disk('local')->append('leads/leads.jsonl', json_encode($lead, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));

        if ($to = config('seo.contact.email')) {
            try {
                $body = collect($lead)->map(fn ($v, $k) => ucfirst($k).': '.$v)->implode("\n");
                Mail::raw($body, function ($m) use ($to, $lead) {
                    $m->to($to)->replyTo($lead['email'], $lead['name'])
                        ->subject('New lead: '.$lead['name'].' ('.($lead['service'] ?: 'general').')');
                });
            } catch (Throwable $e) {
                Log::warning('Lead email failed', ['error' => $e->getMessage()]);
            }
        }

        return redirect()->to($back)->with('audit_sent', true);
    }
}
