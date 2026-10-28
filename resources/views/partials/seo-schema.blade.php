@php
  $canonical = trim($__env->yieldContent('canonical')) ?: url()->current();
  $seoTitle = trim($__env->yieldContent('title')) ?: config('seo.name');
  $seoDescription = trim($__env->yieldContent('description')) ?: config('seo.default_description');
  $org = [
    '@context' => 'https://schema.org',
    '@type' => ['Organization', 'ProfessionalService'],
    'name' => 'Vintexora',
    'url' => url('/'),
    'logo' => asset(config('seo.og_image')),
    'description' => config('seo.default_description'),
    'areaServed' => [
      ['@type' => 'Country', 'name' => 'United Arab Emirates'],
      ['@type' => 'Country', 'name' => 'United States'],
      ['@type' => 'Country', 'name' => 'United Kingdom'],
      ['@type' => 'Country', 'name' => 'Canada'],
    ],
    'knowsAbout' => [
      'Web Design', 'E-Commerce', 'POS', 'Digital Marketing', 'SEO',
      'Mobile Apps', 'AI Automation', 'Software QA', 'Branding', 'Hosting',
    ],
    'sameAs' => [],
  ];
  $website = [
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => 'Vintexora',
    'url' => url('/'),
    'inLanguage' => 'en',
    'publisher' => ['@type' => 'Organization', 'name' => 'Vintexora'],
  ];
  $crumbs = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
      [
        '@type' => 'ListItem',
        'position' => 1,
        'name' => 'Home',
        'item' => url('/'),
      ],
    ],
  ];
  if (! request()->routeIs('home')) {
      $crumbs['itemListElement'][] = [
          '@type' => 'ListItem',
          'position' => 2,
          'name' => $seoTitle,
          'item' => $canonical,
      ];
  }
  if (request()->routeIs('services.show')) {
      $svc = collect(config('vintexora.services'))->firstWhere('slug', request()->route('slug'));
      if ($svc) {
          $serviceSchema = [
              '@context' => 'https://schema.org',
              '@type' => 'Service',
              'name' => $svc['title'],
              'description' => $seoDescription,
              'url' => $canonical,
              'provider' => ['@type' => 'Organization', 'name' => 'Vintexora', 'url' => url('/')],
              'areaServed' => [
                  ['@type' => 'Country', 'name' => 'United Arab Emirates'],
                  ['@type' => 'Country', 'name' => 'United States'],
                  ['@type' => 'Country', 'name' => 'United Kingdom'],
                  ['@type' => 'Country', 'name' => 'Canada'],
              ],
          ];
      }
  }
@endphp
<script type="application/ld+json">{!! json_encode($org, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
<script type="application/ld+json">{!! json_encode($website, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
<script type="application/ld+json">{!! json_encode($crumbs, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
@isset($serviceSchema)
<script type="application/ld+json">{!! json_encode($serviceSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
@endisset
@stack('schema')
