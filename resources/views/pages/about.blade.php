@extends('layouts.service')

@section('title', 'About Ventixora | Digital Agency — UAE, USA, UK & Canada')
@section('description', 'Ventixora is a digital growth agency for the UAE, USA, UK and Canada: websites, e-commerce, POS, marketing, apps, AI automation and QA — one team, no lock-in.')

@section('content')
<main class="pg-about" id="top">

  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner" style="grid-template-columns:1fr;">
      <div>
        <div class="breadcrumb">
          <a href="{{ url('/') }}">Ventixora</a><span class="sep">/</span>
          <span class="current">About</span>
        </div>
        <div class="eyebrow">About · UAE</div>
        <h1>One team for the website, the store, the till, and the demand that fills them.</h1>
        <p class="hero-sub">Ventixora exists because UAE operators were tired of a web freelancer, a POS vendor, and an ads agency who would not read each other’s reports. We sit in the middle on purpose.</p>
        <div class="hero-ctas">
          <a href="#audit" class="btn btn-primary">Get a Free Growth Audit</a>
          <a href="{{ route('services.index') }}" class="btn btn-ghost">See all services</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top:0;">
    <div class="wrap">
      <div class="about-stats reveal">
        <div class="about-stat"><b>9</b><span>Service divisions under one roof</span></div>
        <div class="about-stat"><b>UAE</b><span>Built for this market — VAT, mobile, WhatsApp</span></div>
        <div class="about-stat"><b>0</b><span>Lock-in contracts. We earn the next month.</span></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap mag-split">
      <div class="prose reveal">
        <div class="eyebrow">Why we exist</div>
        <h2 style="font-size:clamp(24px,3vw,32px);margin-bottom:16px;">Growth work that survives a Friday night in Dubai.</h2>
        <p>A campaign is useless if checkout fails on a mid-range Android. A beautiful site is useless if the till sells a size the warehouse does not have. A chatbot is useless if it invents a VAT rate. We build and run the stack as one system so those sentences stop being true.</p>
        <p>We work with retail, F&amp;B, clinics, and corporate teams across Dubai, Abu Dhabi, Sharjah and the Northern Emirates. Start with one leak. Add the next division when growth demands it — not because a pitch deck has nine logos.</p>
      </div>
      <div class="stack-cards reveal">
        <article><h3>Operators, not demos</h3><p>We design for cashiers, sales leads, and the person who gets the 11pm WhatsApp — not for a quiet Tuesday slide.</p></article>
        <article><h3>Same stand-up</h3><p>When ads, the site, and POS disagree, the people who shipped all three are in the same conversation.</p></article>
        <article><h3>Honest ceilings</h3><p>We will say when you need a website not an app, configure not custom, or a NOC we are not pretending to be.</p></article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">How we work</div>
        <h2>Diagnose, architect, ship, compound</h2>
      </div>
      <div class="process-track cols-4 reveal">
        <div class="process-step"><div class="process-num">01</div><h3>Diagnose</h3><p>The leak first: site, till, ads, ops. A growth audit in 48 hours when you send the URL and the loop that hurts.</p></div>
        <div class="process-step"><div class="process-num">02</div><h3>Architect</h3><p>One catalogue, one scoreboard, one identity. We will not install a second stock file to win a beauty contest.</p></div>
        <div class="process-step"><div class="process-num">03</div><h3>Ship</h3><p>Staging, VAT, Arabic, mid-range Android, a freeze before your campaign. Launch is a gate.</p></div>
        <div class="process-step"><div class="process-num">04</div><h3>Compound</h3><p>Hosting, QA, ads, and the next surface — month to month, no lock-in.</p></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Divisions</div>
        <h2>Nine systems. Open the brief that matches this quarter.</h2>
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

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Where</div>
        <h2>Serving the UAE, USA, UK and Canada</h2>
      </div>
      <div class="card-grid cols-4">
        <div class="feat-card reveal"><h3>UAE</h3><p>Dubai, Abu Dhabi, Sharjah, Northern Emirates.</p></div>
        <div class="feat-card reveal"><h3>USA</h3><p>English-first, cards, remote across states.</p></div>
        <div class="feat-card reveal"><h3>UK</h3><p>London and UK-wide — VAT, GBP, UK search.</p></div>
        <div class="feat-card reveal"><h3>Canada</h3><p>Toronto to Vancouver — CAD, bilingual-ready.</p></div>
      </div>
    </div>
  </section>

</main>
@endsection
