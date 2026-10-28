@php
  // Inline @section values arrive already escaped; decode so {{ }} escapes them only once.
  $seoTitle = html_entity_decode(trim($__env->yieldContent('title')), ENT_QUOTES | ENT_HTML5, 'UTF-8') ?: config('seo.name');
  $seoDescription = html_entity_decode(trim($__env->yieldContent('description')), ENT_QUOTES | ENT_HTML5, 'UTF-8') ?: config('seo.default_description');
  $canonical = trim($__env->yieldContent('canonical')) ?: url()->current();
  $ogType = trim($__env->yieldContent('og_type')) ?: 'website';
  $ogImage = trim($__env->yieldContent('og_image')) ?: asset(config('seo.og_image'));
@endphp
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta name="googlebot" content="index, follow">
<meta name="bingbot" content="index, follow">
<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}">
<link rel="canonical" href="{{ $canonical }}">
<link rel="alternate" hreflang="x-default" href="{{ $canonical }}">
@foreach (config('seo.locales') as $hreflang => $ogLocale)
<link rel="alternate" hreflang="{{ $hreflang }}" href="{{ $canonical }}">
@endforeach
<meta property="og:site_name" content="{{ config('seo.name') }}">
<meta property="og:type" content="{{ $ogType }}">
<meta property="og:locale" content="en_AE">
<meta property="og:locale:alternate" content="en_US">
<meta property="og:locale:alternate" content="en_GB">
<meta property="og:locale:alternate" content="en_CA">
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $seoDescription }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $seoDescription }}">
<meta name="twitter:image" content="{{ $ogImage }}">
<meta name="theme-color" content="#060710">
<meta name="author" content="Ventixora">
<meta name="geo.placename" content="Dubai, United Arab Emirates">
<meta name="geo.region" content="AE">
<link rel="icon" href="{{ asset(config('seo.og_image')) }}" type="image/png">
