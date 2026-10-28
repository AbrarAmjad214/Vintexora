<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SeoController extends Controller
{
    public function robots(): Response
    {
        $sitemap = url('/sitemap.xml');
        $body = <<<TXT
User-agent: *
Allow: /
Disallow: /audit
Disallow: /storage/

Sitemap: {$sitemap}

TXT;

        return response($body, 200)->header('Content-Type', 'text/plain; charset=UTF-8');
    }

    public function sitemap(): Response
    {
        $urls = [
            ['loc' => route('home'), 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['loc' => route('about'), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => route('markets'), 'changefreq' => 'monthly', 'priority' => '0.9'],
            ['loc' => route('contact'), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => route('privacy'), 'changefreq' => 'yearly', 'priority' => '0.3'],
            ['loc' => route('services.index'), 'changefreq' => 'weekly', 'priority' => '0.9'],
        ];

        foreach (config('vintexora.services') as $service) {
            $urls[] = [
                'loc' => route('services.show', $service['slug']),
                'changefreq' => 'weekly',
                'priority' => '0.85',
            ];
        }

        $xml = view('sitemap', [
            'urls' => $urls,
            'lastmod' => now()->toDateString(),
        ])->render();

        return response($xml, 200)->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
