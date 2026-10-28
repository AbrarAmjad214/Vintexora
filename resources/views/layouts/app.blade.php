<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@include('partials.seo-head')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;500;600;700&family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
<link rel="stylesheet" href="{{ asset('css/motion.css') }}">
<link rel="stylesheet" href="{{ asset('css/chrome.css') }}">
<link rel="stylesheet" href="{{ asset('css/ventix.css') }}?v=3">
</head>
<body>
@include('partials.site-header')
@yield('content')
@include('partials.page-form')
@include('partials.site-footer')
@include('partials.site-services-drop')
@include('partials.cta-dock')
<script src="{{ asset('js/landing.js') }}"></script>
<script src="{{ asset('js/motion.js') }}"></script>
<script src="{{ asset('js/site.js') }}"></script>
<script src="{{ asset('js/ventix.js') }}?v=3"></script>
@include('partials.seo-schema')
</body>
</html>
