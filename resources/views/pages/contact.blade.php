@extends('layouts.service')

@section('title', 'Contact Vintexora | Free Growth Audit — UAE')
@section('description', 'Request a free Vintexora growth audit. Tell us what is leaking — website, store, POS, ads or automation — and we will reply within 48 hours.')

@section('content')
<main class="pg-contact" id="top">

  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner" style="grid-template-columns:1fr;">
      <div>
        <div class="breadcrumb">
          <a href="{{ url('/') }}">Vintexora</a><span class="sep">/</span>
          <span class="current">Contact</span>
        </div>
        <div class="eyebrow">Contact · UAE</div>
        <h1>Send the leak. We will tell you what to keep, kill, and rebuild.</h1>
        <p class="hero-sub">A growth audit in 48 hours. No lock-in pitch. The form is below — same form as every other page, so you always know where to write.</p>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top:0;">
    <div class="wrap">
      <div class="card-grid">
        <div class="feat-card reveal"><h3>What happens next</h3><p>We read the form, open the URL if you have one, and reply on email or WhatsApp with a sequence — not a 20-slide deck.</p></div>
        <div class="feat-card reveal"><h3>Best things to send</h3><p>Website or store URL. Ad account if spend is the leak. A tax invoice if POS is the leak. The three loops that hurt this month if automation is the leak.</p></div>
        <div class="feat-card reveal"><h3>Hours &amp; coverage</h3><p>UAE business days. Dubai, Abu Dhabi, Sharjah and the Northern Emirates. We will say if a request is outside our ceiling.</p></div>
      </div>
    </div>
  </section>

</main>
@endsection
