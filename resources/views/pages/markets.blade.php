@extends('layouts.service')

@section('title', 'Digital Agency for UAE, USA, UK & Canada | Ventixora Markets')
@section('description', 'Ventixora serves businesses in the UAE, United States, United Kingdom and Canada — websites, e-commerce, POS, SEO, ads, apps and automation with local market defaults.')

@section('content')
<main class="pg-about" id="top">

  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner" style="grid-template-columns:1fr;">
      <div>
        <div class="breadcrumb">
          <a href="{{ url('/') }}">Ventixora</a><span class="sep">/</span>
          <span class="current">Markets</span>
        </div>
        <div class="eyebrow">UAE · USA · UK · Canada</div>
        <h1>One growth stack. Four markets that actually buy online.</h1>
        <p class="hero-sub">We are UAE-based and work with operators in the United States, United Kingdom and Canada — same team for web, store, till, ads and automation, with local tax, payments and search behaviour built in.</p>
        <div class="hero-ctas">
          <a href="{{ route('contact') }}" class="btn btn-primary">Get a Free Growth Audit</a>
          <a href="{{ route('services.index') }}" class="btn btn-ghost">See all services</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top:0;">
    <div class="wrap">
      <div class="about-stats reveal">
        <div class="about-stat"><b>UAE</b><span>VAT, WhatsApp, bilingual, Gulf payments</span></div>
        <div class="about-stat"><b>USA</b><span>English-first, cards, state-aware ops</span></div>
        <div class="about-stat"><b>UK</b><span>VAT, cards, GBP, UK search intent</span></div>
        <div class="about-stat"><b>Canada</b><span>Bilingual-ready, CAD, provincial delivery</span></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Where we work</div>
        <h2>Local defaults. Same engineering discipline.</h2>
        <p>Search, checkout and tax are not the same in Dubai, Dallas, London and Toronto. We do not paste a US plugin default onto a UAE store — or a Gulf WhatsApp flow onto a UK clinic — without saying so.</p>
      </div>
      <div class="div-grid reveal" style="grid-template-columns:repeat(2,1fr);">
        @foreach ($markets as $market)
          <article class="div-card">
            <small>{{ $market['code'] }} · {{ $market['hreflang'] }}</small>
            <h3>{{ $market['name'] }}</h3>
            <p>{{ $market['cities'] }}. Web, e-commerce, POS, SEO, ads, apps, automation and QA scoped for how this market actually searches and pays.</p>
          </article>
        @endforeach
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">What we ship</div>
        <h2>The same nine divisions, staffed for these countries</h2>
      </div>
      <div class="div-grid reveal">
        @foreach ($services as $item)
          <a class="div-card" href="{{ route('services.show', $item['slug']) }}">
            <small>{{ $item['code'] }}</small>
            <h3>{{ $item['title'] }}</h3>
            <p>{{ $item['short'] }}</p>
          </a>
        @endforeach
      </div>
    </div>
  </section>

</main>
@endsection
