<?php

return [
    'name' => 'Ventixora',
    'tagline' => 'Digital growth agency for the UAE, USA, UK and Canada',
    'default_description' => 'Ventixora builds websites, e-commerce, POS, marketing, apps, AI automation and QA for businesses in the UAE, USA, United Kingdom and Canada. Free growth audit.',
    'og_image' => 'images/brand-7ee39eaf42.png',
    'mark' => 'images/ventixora-mark.svg',
    'contact' => [
        // Leads are emailed here when mail is configured; they are always saved to storage/app/leads.
        'email' => env('CONTACT_EMAIL'),
        // International format without "+" or spaces, e.g. 971501234567. Empty hides WhatsApp buttons.
        'whatsapp' => env('CONTACT_WHATSAPP'),
    ],
    'locales' => [
        'en' => 'en',
        'en-AE' => 'en_AE',
        'en-US' => 'en_US',
        'en-GB' => 'en_GB',
        'en-CA' => 'en_CA',
    ],
    'markets' => [
        ['code' => 'AE', 'name' => 'United Arab Emirates', 'short' => 'UAE', 'hreflang' => 'en-AE', 'cities' => 'Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah'],
        ['code' => 'US', 'name' => 'United States', 'short' => 'USA', 'hreflang' => 'en-US', 'cities' => 'New York, California, Texas, Florida, remote-first across states'],
        ['code' => 'GB', 'name' => 'United Kingdom', 'short' => 'UK', 'hreflang' => 'en-GB', 'cities' => 'London, Manchester, Birmingham, Edinburgh, remote UK-wide'],
        ['code' => 'CA', 'name' => 'Canada', 'short' => 'Canada', 'hreflang' => 'en-CA', 'cities' => 'Toronto, Vancouver, Calgary, Montreal, remote Canada-wide'],
    ],
];
