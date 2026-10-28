@extends('layouts.web-design')

@section('title', 'Web Design & Development | UAE, USA, UK & Canada | Ventixora')
@section('description', 'Custom business websites, corporate sites, landing pages and WordPress for companies in the UAE, USA, UK and Canada. Mobile-first, conversion-focused. Free website audit.')

@section('content')

<main id="top">

  <!-- ============ HERO ============ -->
  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner">
      <div>
        <div class="breadcrumb">
          <a href="{{ url('/') }}">Ventixora</a><span class="sep">/</span>
          <a href="{{ route('services.index') }}">Services</a><span class="sep">/</span>
          <span class="current">Web Design &amp; Development</span>
        </div>
        <div class="eyebrow">Web Design &amp; Development · UAE</div>
        <h1>A website that looks premium, loads fast, and actually turns visitors into <span class="grad-text">customers.</span></h1>
        <p class="hero-sub">We design and build custom business websites, corporate sites, and landing pages for companies across Dubai, Abu Dhabi, and Sharjah — built mobile-first, because that's how the UAE actually browses.</p>
        <div class="hero-ctas">
          <a href="#audit" class="btn btn-primary">Get a Free Website Audit</a>
          <a href="#process" class="btn btn-ghost">See Our Process</a>
        </div>
        <div class="proof-strip">
          <span class="proof-chip">Mobile-first design</span>
          <span class="proof-chip">WordPress &amp; custom builds</span>
          <span class="proof-chip">Built for UAE search behavior</span>
        </div>
      </div>

      <div class="hero-visual">
        <div class="browser-frame">
          <div class="browser-top">
            <span class="browser-dot"></span><span class="browser-dot"></span><span class="browser-dot"></span>
            <div class="browser-url mono">yourbusiness.ae</div>
          </div>
          <div class="browser-loadbar"></div>
          <div class="browser-body">
            <div class="skel-hero-block"></div>
            <div class="skel-line" style="width:70%;"></div>
            <div class="skel-line" style="width:88%;"></div>
            <div class="skel-line" style="width:52%;"></div>
            <div class="skel-btn"></div>

            <div class="metric-chip mc-1"><span class="dot"></span>0.8s LOAD</div>
            <div class="metric-chip mc-2"><span class="dot"></span>98 MOBILE SCORE</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="marquee" aria-hidden="true">
    <div class="marquee-track">
      <span>Mobile-first</span><span>WordPress</span><span>Custom builds</span><span>0.8s load</span><span>WhatsApp above the fold</span><span>AR / EN ready</span><span>UAE search behaviour</span>
      <span>Mobile-first</span><span>WordPress</span><span>Custom builds</span><span>0.8s load</span><span>WhatsApp above the fold</span><span>AR / EN ready</span><span>UAE search behaviour</span>
    </div>
  </div>

  <!-- ============ PROBLEM FRAMING ============ -->
  <div class="problem-band">
    <div class="wrap section problem-inner">
      <div class="problem-copy reveal">
        <div class="eyebrow">Why this matters</div>
        <h2 style="font-size:clamp(24px,3vw,32px);margin-bottom:20px;">Why your website could be costing you customers</h2>
        <p>Most UAE businesses don't lose customers because they lack demand — they lose them because their website is slow, outdated, or impossible to navigate on a phone. A visitor in Dubai searching for your service on their commute won't wait five seconds for a page to load, and they won't dig through three menus to find your contact number. They'll click back and call your competitor instead.</p>
        <p>A website built without strategy is just a digital brochure nobody reads. A website built around how your customers actually search, browse, and decide is a sales tool that works 24 hours a day.</p>
      </div>
      <div class="decay-diagram reveal">
        <svg viewBox="-24 0 428 200" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="decayGrad" x1="0" y1="0" x2="1" y2="0">
              <stop offset="0%" stop-color="#8b6bff"/>
              <stop offset="100%" stop-color="#3fd0ff"/>
            </linearGradient>
          </defs>
          <path class="decay-line" d="M40,70 C120,70 140,130 190,130 C240,130 260,70 340,70"/>
          <circle cx="40" cy="70" r="6" fill="#8b6bff"/>
          <circle cx="190" cy="130" r="6" fill="#9f8bff"/>
          <circle cx="340" cy="70" r="6" fill="#3fd0ff"/>
          <text x="40" y="48" text-anchor="middle" class="decay-label-top">0:00</text>
          <text x="40" y="98" text-anchor="middle" class="decay-label-bottom">Visitor lands</text>
          <text x="190" y="108" text-anchor="middle" class="decay-label-top">0:03</text>
          <text x="190" y="158" text-anchor="middle" class="decay-label-bottom">Still loading</text>
          <text x="340" y="48" text-anchor="middle" class="decay-label-top">0:05</text>
          <text x="340" y="98" text-anchor="middle" class="decay-label-bottom">Back button → gone</text>
        </svg>
      </div>
    </div>
  </div>

  <!-- ============ WHAT WE BUILD ============ -->
  <section class="section" id="what-we-build">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">What we build</div>
        <h2>Every type of website your business might need</h2>
      </div>
      <div class="services-grid reveal">
        <div class="service-tile"><span class="service-id">BUILD.01</span><h3>Custom Business Website</h3><p>Built from scratch around your services, not a recycled template.</p></div>
        <div class="service-tile"><span class="service-id">BUILD.02</span><h3>Corporate Website Development</h3><p>Structured, credible sites for established companies with multiple departments, services, or locations.</p></div>
        <div class="service-tile"><span class="service-id">BUILD.03</span><h3>Landing Page Design</h3><p>Focused, single-goal pages built to convert ad traffic or campaign clicks into leads.</p></div>
        <div class="service-tile"><span class="service-id">BUILD.04</span><h3>WordPress Development</h3><p>Flexible, easy-to-manage sites your team can update without calling a developer every time.</p></div>
        <div class="service-tile"><span class="service-id">BUILD.05</span><h3>Website Redesign</h3><p>For businesses whose current site no longer reflects how big or credible they've become.</p></div>
        <div class="service-tile"><span class="service-id">BUILD.06</span><h3>Responsive Web Design</h3><p>Every build tested and optimized across mobile, tablet, and desktop.</p></div>
        <div class="service-tile"><span class="service-id">BUILD.07</span><h3>UI/UX Design &amp; Wireframing</h3><p>Structure and flow mapped out before a single visual element is designed.</p></div>
        <div class="service-tile"><span class="service-id">BUILD.08</span><h3>Website Strategy &amp; Consulting</h3><p>For businesses that need a plan before committing budget to a build.</p></div>
      </div>
    </div>
  </section>

  <!-- ============ PROCESS ============ -->
  <section class="section" id="process" style="padding-top:0;">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">How we work</div>
        <h2>From strategy to launch, in five steps</h2>
      </div>
      <div class="process-track reveal">
        <div class="process-step"><div class="process-num">01</div><h3>Discovery</h3><p>We learn your business, your customers, and your competitors before opening a design tool.</p></div>
        <div class="process-step"><div class="process-num">02</div><h3>Wireframing &amp; UX Planning</h3><p>We map the structure and user journey first, so the design has a job to do.</p></div>
        <div class="process-step"><div class="process-num">03</div><h3>Design</h3><p>Custom visuals built around your brand, not a stock theme.</p></div>
        <div class="process-step"><div class="process-num">04</div><h3>Development</h3><p>Built on WordPress or a custom stack, depending on what your business actually needs.</p></div>
        <div class="process-step"><div class="process-num">05</div><h3>Launch &amp; Optimize</h3><p>We test speed, mobile responsiveness, and conversion paths before and after going live.</p></div>
      </div>
    </div>
  </section>

  <!-- ============ TECHNICAL LAYER ============ -->
  <section class="section">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">The technical layer most agencies skip</div>
        <h2>Built to perform, not just to look good</h2>
        <p>A beautiful website that loads slowly or fails an accessibility check is still a broken website. Every site we build includes:</p>
      </div>
      <div class="card-grid reveal">
        <div class="feat-card">
          <div class="feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M13 2 3 14h7l-1 8 11-14h-7l1-6z"/></svg></div>
          <h3>Website Speed Optimization</h3>
          <p>Because a one-second delay measurably drops conversions.</p>
        </div>
        <div class="feat-card">
          <div class="feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3l8 3v6c0 4.5-3.2 7.9-8 9-4.8-1.1-8-4.5-8-9V6l8-3z"/></svg></div>
          <h3>Website Security</h3>
          <p>Hardened against the most common attack vectors from day one.</p>
        </div>
        <div class="feat-card">
          <div class="feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="9"/><path d="M8 12a4 4 0 0 1 8 0M12 8v.01M9 15.5c.9.7 1.9 1 3 1s2.1-.3 3-1"/></svg></div>
          <h3>ADA Accessibility</h3>
          <p>Built to be usable by everyone, and to reduce legal and compliance risk.</p>
        </div>
        <div class="feat-card">
          <div class="feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12h13M11 6l6 6-6 6M21 5v14"/></svg></div>
          <h3>Website Migration</h3>
          <p>For businesses moving off an outdated platform or host without losing rankings.</p>
        </div>
        <div class="feat-card">
          <div class="feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3M11 8v6M8 11h6"/></svg></div>
          <h3>Website Audit</h3>
          <p>A full technical and UX review for existing sites that need diagnosis before a rebuild.</p>
        </div>
        <div class="feat-card">
          <div class="feat-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 21h8M12 16v5"/></svg></div>
          <h3>Headless WordPress</h3>
          <p>For businesses that need enterprise-grade speed and flexibility beyond standard WordPress.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ WHY VENTIXORA ============ -->
  <section class="section" style="padding-top:0;">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Why UAE businesses choose Ventixora</div>
        <h2>Built for how the UAE actually browses and buys</h2>
      </div>
      <div class="why-list reveal">
        <div class="why-row">
          <span class="num mono">01</span>
          <div><h3>Mobile-first by default</h3><p>The majority of UAE web traffic is mobile; we design for that reality, not desktop first.</p></div>
        </div>
        <div class="why-row">
          <span class="num mono">02</span>
          <div><h3>Bilingual-ready</h3><p>Structured to support Arabic-English content when your business needs it.</p></div>
        </div>
        <div class="why-row">
          <span class="num mono">03</span>
          <div><h3>Local behavior built in</h3><p>WhatsApp click-to-chat, UAE phone formatting, and local payment gateway compatibility.</p></div>
        </div>
        <div class="why-row">
          <span class="num mono">04</span>
          <div><h3>One team, not a handoff</h3><p>The same team that designs your site can also handle its SEO, hosting, and ongoing maintenance.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ COMPARISON ============ -->
  <section class="section" style="padding-top:0;">
    <div class="wrap">
      <div class="section-head reveal">
        <h2>Custom build vs. a generic template</h2>
      </div>
      <div class="compare-wrap reveal">
        <table>
          <thead>
            <tr><th></th><th class="hl">Custom Build (Ventixora)</th><th>Generic Template</th></tr>
          </thead>
          <tbody>
            <tr><td>Design</td><td class="hl">Built around your brand and users</td><td>Recycled theme, edited slightly</td></tr>
            <tr><td>Speed</td><td class="hl">Optimized from the ground up</td><td>Often bloated with unused code</td></tr>
            <tr><td>Scalability</td><td class="hl">Built to grow with your business</td><td>Breaks or needs a rebuild at scale</td></tr>
            <tr><td>SEO foundation</td><td class="hl">Structured for search from day one</td><td>Frequently an afterthought</td></tr>
            <tr><td>Support</td><td class="hl">Ongoing maintenance available</td><td>Usually a one-time delivery</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ============ INDUSTRIES ============ -->
  <section class="section" style="padding-top:0;">
    <div class="wrap">
      <div class="section-head reveal">
        <h2>Websites built around what your industry actually needs</h2>
      </div>
      <div class="card-grid cols-5 reveal">
        <div class="feat-card"><div class="feat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="9" cy="21" r="1"/><circle cx="18" cy="21" r="1"/><path d="M2 3h2l2.4 12.2a2 2 0 0 0 2 1.6h8.2a2 2 0 0 0 2-1.6L22 7H6"/></svg></div><h3>Retail &amp; E-commerce</h3><p>Product-heavy, catalog-driven builds.</p></div>
        <div class="feat-card"><div class="feat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></div><h3>Corporate &amp; Professional</h3><p>Credibility-first, structured for multiple service lines.</p></div>
        <div class="feat-card"><div class="feat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 21s-7-4.35-9.5-8.5C.7 8.9 2.4 5 6 5c2 0 3.3 1 4 2.3C10.7 6 12 5 14 5c3.6 0 5.3 3.9 3.5 7.5C19 16.65 12 21 12 21z"/></svg></div><h3>Healthcare &amp; Clinics</h3><p>Booking-friendly, compliant with data handling expectations.</p></div>
        <div class="feat-card"><div class="feat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 3v18M4 8h3a2 2 0 0 0 2-2V3M11 3v18M15 3v9a3 3 0 0 0 3 3v6M18 3v6"/></svg></div><h3>F&amp;B &amp; Hospitality</h3><p>Visual-first, menu and location-driven.</p></div>
        <div class="feat-card"><div class="feat-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M13 2 3 14h7l-1 8 11-14h-7l1-6z"/></svg></div><h3>Startups</h3><p>Lean, fast-to-launch sites that can scale later.</p></div>
      </div>
    </div>
  </section>

  <!-- ============ CHECKLIST / ANNOTATED MOCKUP ============ -->
  <div class="checklist-section">
    <div class="wrap section checklist-inner">
      <div class="checklist-copy reveal">
        <div class="eyebrow">Beyond design</div>
        <h2 style="font-size:clamp(24px,3vw,32px);">What UAE customers expect from a business website</h2>
        <p style="color:var(--muted);font-size:14.5px;margin-top:14px;">A website that "looks nice" isn't the same as a website that performs. UAE customers — whether they're comparing clinics in Abu Dhabi or corporate service providers in Business Bay — move fast and expect a specific set of things before they trust a business enough to call or buy. We design every website against this checklist before it ever reaches a client for review.</p>
        <ul>
          <li><b>Phone &amp; WhatsApp above the fold</b> — not buried three clicks deep.</li>
          <li><b>Trust signals near the top</b> — certifications, years in business, client logos, or reviews.</li>
          <li><b>Fast load on mobile data</b> — not every visitor is on fast wifi.</li>
          <li><b>Clear service structure</b> — a confusing menu means a lost lead.</li>
          <li><b>Arabic-English readiness</b> — bilingual expansion without a rebuild.</li>
        </ul>
      </div>

      <div class="annot-mock-wrap" style="position:relative;padding:60px 70px;">
        <div class="annot-mock reveal">
          <div class="annot-inner">
            <div class="annot-topbar">
              <div class="annot-logo-dot"><span></span><span style="opacity:.5"></span><span style="opacity:.25"></span></div>
              <div class="annot-nav"><span>HOME</span><span>SERVICES</span><span>CONTACT</span></div>
              <div class="annot-lang">EN / AR</div>
            </div>
            <div class="annot-trustrow">
              <div class="annot-trustchip"></div><div class="annot-trustchip"></div><div class="annot-trustchip"></div><div class="annot-trustchip"></div>
            </div>
            <div class="annot-hero"></div>
            <div class="annot-linebar" style="width:80%;"></div>
            <div class="annot-linebar" style="width:60%;"></div>
            <div class="annot-whatsapp">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="#050510"><path d="M12 2a10 10 0 0 0-8.6 15L2 22l5.2-1.4A10 10 0 1 0 12 2z"/></svg>
            </div>
          </div>
          <div class="annot-badge b1">Phone / WhatsApp — top right</div>
          <div class="annot-badge b2">Language toggle</div>
          <div class="annot-badge b3">Clear nav, no clutter</div>
          <div class="annot-badge b4">Trust signals row</div>
          <div class="annot-badge b5">Fast-loading hero</div>
        </div>
      </div>
    </div>
  </div>

  <!-- ============ FAQ ============ -->
  <section class="section" id="faq">
    <div class="wrap" style="max-width:820px;">
      <div class="section-head reveal">
        <div class="eyebrow">FAQ</div>
        <h2>Web design &amp; development FAQs</h2>
      </div>
      <div class="reveal">
        <details class="faq-item" open>
          <summary>How long does a website take to build?</summary>
          <p>A landing page can launch in 1–2 weeks. A full corporate or e-commerce-ready site typically takes 4–8 weeks depending on scope.</p>
        </details>
        <details class="faq-item">
          <summary>Do you build on WordPress or custom code?</summary>
          <p>Both — we recommend WordPress for flexibility and ease of editing, or a custom/headless build for businesses that need maximum speed and scalability.</p>
        </details>
        <details class="faq-item">
          <summary>Will my website work well on mobile?</summary>
          <p>Yes. Every site is designed mobile-first and tested across devices before launch, since most UAE traffic comes from mobile.</p>
        </details>
        <details class="faq-item">
          <summary>Can you redesign my existing site without losing my Google rankings?</summary>
          <p>Yes — redesigns and migrations are planned with SEO preservation as a core requirement, not an afterthought.</p>
        </details>
        <details class="faq-item">
          <summary>Do you offer ongoing support after the site launches?</summary>
          <p>Yes, through our hosting, maintenance, and monthly IT support plans.</p>
        </details>
      </div>
    </div>
  </section>

</main>

@endsection