@extends('layouts.app')

@section('title', 'Ventixora | Digital Growth Agency — UAE, USA, UK & Canada')
@section('description', 'Ventixora builds websites, e-commerce, POS, SEO, ads, apps and AI automation for businesses in the UAE, USA, United Kingdom and Canada. Free growth audit.')

@section('content')

<main id="top">

  <!-- ============ HERO ============ -->
  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner">
      <div class="hero-copy">
        <div class="eyebrow">Digital Growth Agency · UAE · USA · UK · Canada</div>
        <h1>One team for your website, store, POS &amp; marketing — <span class="grad-text">accountable for revenue.</span></h1>
        <p class="hero-sub">Ventixora builds and runs the systems your business sells through, then fills them with customers. No juggling five vendors, no vanity reports.</p>
        <div class="hero-ctas">
          <a href="#audit" class="btn btn-primary btn-lg">Get My Free Growth Audit
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
          <a href="#services" class="btn btn-ghost btn-lg">Explore Services</a>
        </div>
        <ul class="hero-assure">
          <li>Free &amp; no obligation</li>
          <li>Reply within 48 hours</li>
          <li>Monthly, no lock-in</li>
        </ul>
        <div class="hero-stats">
          <div>
            <div class="hero-stat-num" data-count="9">0</div>
            <div class="hero-stat-label">Service divisions<br>under one roof</div>
          </div>
          <div>
            <div class="hero-stat-num" data-count="4">0</div>
            <div class="hero-stat-label">Markets: UAE, USA,<br>UK &amp; Canada</div>
          </div>
          <div>
            <div class="hero-stat-num" data-count="48" data-suffix="h">0h</div>
            <div class="hero-stat-label">Free audit<br>turnaround</div>
          </div>
        </div>
      </div>
      <div class="hero3d" data-scene aria-hidden="true">
        <div class="h3d-stage">
          <div class="h3d-floor"></div>
          <div class="h3d-orbit o1"></div>
          <div class="h3d-orbit o2"></div>
          <div class="h3d-core">
            <div class="h3d-cube">
              <span class="f front"><img src="{{ asset(config('seo.mark')) }}" alt=""></span>
              <span class="f back"></span>
              <span class="f right"></span>
              <span class="f left"></span>
              <span class="f top"></span>
              <span class="f bottom"></span>
            </div>
          </div>
          <div class="h3d-card c1">
            <small>WEBSITE</small>
            <b>Fast, mobile-first</b>
            <i class="bar"><em style="width:92%"></em></i>
          </div>
          <div class="h3d-card c2">
            <small>ADS &amp; SEO</small>
            <b>Leads → CRM</b>
            <span class="spark"><i></i><i></i><i></i><i></i><i></i><i></i></span>
          </div>
          <div class="h3d-card c3">
            <small>POS</small>
            <b>VAT-ready tills</b>
            <span class="ok">● Synced with store</span>
          </div>
          <div class="h3d-card c4">
            <small>AUTOMATION</small>
            <b>WhatsApp replies</b>
            <span class="ok">● Always on</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ TRUST BAR ============ -->
  <div class="trust">
    <div class="wrap trust-pills">
      <span class="pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="7" r="3"/><path d="M3 21v-1a6 6 0 0 1 12 0v1M16 3.5a3 3 0 0 1 0 7M21 21v-1a6 6 0 0 0-4-5.6"/></svg>One accountable team</span>
      <span class="pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 14l6-6M9.5 8.5h.01M14.5 13.5h.01"/><path d="M4 4h16v16l-3-2-3 2-2-2-2 2-3-2-3 2z"/></svg>VAT-ready builds</span>
      <span class="pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg>Reporting tied to leads &amp; sales</span>
      <span class="pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg>UAE · USA · UK · Canada</span>
      <span class="pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="11" width="16" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 7.5-2"/></svg>No long-term lock-in</span>
    </div>
  </div>

  <div class="marquee" aria-hidden="true">
    <div class="marquee-track">
      <span>Web Design</span><span>Shopify</span><span>VAT POS</span><span>Local SEO</span><span>Google Ads</span><span>Flutter</span><span>AI Chatbots</span><span>QA Gates</span><span>Microsoft 365</span><span>Brand Systems</span>
      <span>Web Design</span><span>Shopify</span><span>VAT POS</span><span>Local SEO</span><span>Google Ads</span><span>Flutter</span><span>AI Chatbots</span><span>QA Gates</span><span>Microsoft 365</span><span>Brand Systems</span>
    </div>
  </div>

  <!-- ============ WHO WE SERVE ============ -->
  <section class="section" id="who">
    <div class="wrap split">
      <div class="split-aside reveal">
        <div class="eyebrow">Who we serve</div>
        <h2>Built for the businesses that run the UAE economy</h2>
        <p>Retail counters, restaurant kitchens, clinic front desks and B2B sales teams don't need the same tools — so we don't sell them the same package.</p>
        <a href="#audit" class="btn btn-primary">Find my fit — free audit</a>
      </div>
      <div class="serve-grid">
        @php
          $industries = [
            ['Retail & E-Commerce', 'Stores that sell online and manage stock in-store, in sync.', 'ecommerce-solutions', 'Retail solutions', '<circle cx="9" cy="21" r="1"/><circle cx="18" cy="21" r="1"/><path d="M2 3h2l2.4 12.2a2 2 0 0 0 2 1.6h8.2a2 2 0 0 0 2-1.6L22 7H6"/>'],
            ['F&B & Hospitality', 'POS, kitchen displays and online ordering that survive a Friday night rush.', 'pos-solutions', 'F&B solutions', '<path d="M4 3v18M4 8h3a2 2 0 0 0 2-2V3M11 3v18M15 3v9a3 3 0 0 0 3 3v6M18 3v6"/>'],
            ['Healthcare & Pharmacy', 'Compliant, VAT-ready billing and booking systems for clinics and pharmacies.', 'pos-solutions', 'Healthcare solutions', '<path d="M12 21s-7-4.35-9.5-8.5C.7 8.9 2.4 5 6 5c2 0 3.3 1 4 2.3C10.7 6 12 5 14 5c3.6 0 5.3 3.9 3.5 7.5C19 16.65 12 21 12 21z"/>'],
            ['Corporate & Professional', 'Websites, branding and lead generation for firms selling to other businesses.', 'web-design-development', 'Corporate solutions', '<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>'],
          ];
        @endphp
        @foreach ($industries as $i => [$title, $text, $slug, $link, $icon])
          <a class="serve-card reveal" href="{{ route('services.show', $slug) }}">
            <span class="serve-no">0{{ $i + 1 }}</span>
            <div class="serve-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">{!! $icon !!}</svg></div>
            <h3>{{ $title }}</h3>
            <p>{{ $text }}</p>
            <span class="serve-link">{{ $link }} <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ============ SERVICES GRID ============ -->
  <section class="section" id="services" style="padding-top:0;">
    <div class="wrap">
      <div class="section-head center reveal">
        <div class="eyebrow">What we do</div>
        <h2>Nine service divisions. <span class="grad-text">One accountable partner.</span></h2>
        <p>Pick one to start, add the rest when growth asks for it. Same team, same reporting, same contract.</p>
      </div>
      @php
        $svcIcons = [
          'web-design-development' => '<rect x="3" y="4" width="18" height="14" rx="2"/><path d="M3 9h18M8 21h8"/>',
          'ecommerce-solutions' => '<path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><path d="M3 6h18M16 10a4 4 0 0 1-8 0"/>',
          'hosting-maintenance-it' => '<rect x="3" y="3" width="18" height="7" rx="1.5"/><rect x="3" y="14" width="18" height="7" rx="1.5"/><path d="M7 6.5h.01M7 17.5h.01"/>',
          'branding-visual-identity' => '<circle cx="13.5" cy="6.5" r="2.5"/><circle cx="6.5" cy="12" r="2.5"/><circle cx="17.5" cy="15.5" r="2.5"/><path d="M12 22a10 10 0 1 1 10-10c0 2-1.5 3-3 3h-2.5"/>',
          'digital-marketing' => '<path d="M3 11l18-8-8 18-2-8z"/>',
          'mobile-app-development' => '<rect x="6" y="2" width="12" height="20" rx="2.5"/><path d="M11 18h2"/>',
          'ai-business-automation' => '<rect x="5" y="8" width="14" height="11" rx="3"/><path d="M12 8V4M9 13h.01M15 13h.01M2 13h3M19 13h3"/>',
          'software-quality-assurance' => '<path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="M8.5 12l2.5 2.5 4.5-5"/>',
          'pos-solutions' => '<rect x="4" y="3" width="16" height="12" rx="2"/><path d="M8 19h8M12 15v4M8 7h8M8 10h5"/>',
        ];
      @endphp
      <div class="svc-grid">
        @foreach (config('vintexora.services') as $svc)
          <a class="svc-card reveal" href="{{ route('services.show', $svc['slug']) }}" data-tilt>
            <div class="svc-top">
              <span class="svc-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">{!! $svcIcons[$svc['slug']] ?? '' !!}</svg></span>
              <span class="svc-tag">{{ $svc['tag'] ?? $svc['code'] }}</span>
            </div>
            <h3>{{ $svc['title'] }}</h3>
            <p>{{ $svc['short'] }}</p>
            <span class="svc-more">Learn more <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </a>
        @endforeach
      </div>
      <div class="center-cta reveal">
        <a href="{{ route('services.index') }}" class="btn btn-ghost">View all services</a>
        <a href="#audit" class="btn btn-primary">Not sure? Get a free audit</a>
      </div>
    </div>
  </section>

  <!-- ============ THREE ENGINES ============ -->
  <section class="section" id="engines">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">How we grow your business</div>
        <h2>Three engines. Each one a live system — not a slide.</h2>
        <p>Build the place customers buy, bring the right people to it, and keep the back end running when it gets busy.</p>
      </div>
      <div class="story-stage">
        <article class="story-panel">
          <div>
            <div class="story-kicker">ENGINE 01 · BUILD</div>
            <h3>Websites, stores &amp; apps that take UAE money</h3>
            <p>Mobile-first, WhatsApp-ready, impatient with slow loads. WordPress, Shopify or custom — pointed at the same catalogue your POS will use.</p>
            <ul class="reveal" style="margin-top:16px;color:var(--muted);font-size:14px;">
              <li>Conversion-first UI, not a recycled theme</li>
              <li>UAE gateways and VAT on the invoice</li>
              <li>Hosting and speed in the same team</li>
            </ul>
          </div>
          <div class="story-visual">
            <div class="serp">
              <div class="serp-row win"><small>yourbusiness.ae · 0.8s</small><b>Book a visit · Dubai</b><span>WhatsApp + VAT-ready checkout above the fold.</span></div>
              <div class="serp-row"><small>template.site</small><b>Welcome to our website</b><span>Still loading. Visitor is gone.</span></div>
            </div>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">ENGINE 02 · GROW</div>
            <h3>SEO, ads &amp; social on one scoreboard</h3>
            <p>UAE search mixes English, neighbourhood names and “near me”. We buy and earn demand that sales can close — landing pages in the same sprint as the campaign.</p>
          </div>
          <div class="story-visual">
            <div class="ad-kpis">
              <div><small>SEARCH CPA</small><b>AED 42</b></div>
              <div><small>LOCAL PACK</small><b>3 / 3</b></div>
              <div><small>META HOOK</small><b>V3 win</b></div>
              <div><small>PIPELINE</small><b>On</b></div>
            </div>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">ENGINE 03 · OPERATE</div>
            <h3>POS, automation &amp; IT that survive Friday</h3>
            <p>VAT-compliant tills, grounded chatbots, backups you have restored on purpose. Growth means nothing if the back end drops the ball at 11pm.</p>
          </div>
          <div class="story-visual">
            <div class="chat-sim">
              <div class="bubble in">Hours in Ramadan? And do you have the size in Sharjah?</div>
              <div class="bubble out">Open 10–2 &amp; 8–12. Size M is in Al Majaz — I can hold it. WhatsApp the pin?</div>
              <div class="bubble ok">✓ Lead in CRM · assigned Sharjah · no invented stock</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ WHY US NUMBERS ============ -->
  <section class="section why-band">
    <div class="wrap">
      <div class="section-head center reveal">
        <div class="eyebrow">Why Ventixora</div>
        <h2>The full-stack advantage, in numbers</h2>
      </div>
      <div class="bento">
        <div class="bento-card big reveal" data-tilt>
          <div class="why-num" data-count="0">0</div>
          <h3>Vendors to coordinate</h3>
          <p>Your website, store, POS, ads and IT sit with one team. When something breaks, there is one number to call — and nobody can blame the other agency.</p>
        </div>
        <div class="bento-card reveal" data-tilt>
          <div class="why-num" data-count="9">0</div>
          <h3>Service divisions</h3>
          <p>Under a single contract and one monthly report.</p>
        </div>
        <div class="bento-card reveal" data-tilt>
          <div class="why-num mono">VAT</div>
          <h3>Compliant by default</h3>
          <p>POS and billing that finance can close the month with.</p>
        </div>
        <div class="bento-card wide reveal" data-tilt>
          <div class="why-num mono">Local-first</div>
          <h3>Built for how your market buys</h3>
          <p>Every campaign and build accounts for local search behaviour, payment habits and bilingual audiences across the UAE, USA, UK and Canada.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PROCESS ============ -->
  <section class="section" id="process">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">The Ventixora method</div>
        <h2>From audit to fully operational, in five steps</h2>
      </div>
      <div class="step-flow">
        <article class="step">
          <div class="n">01</div>
          <h3>Free Audit</h3>
          <p>Website, POS, marketing, and your top 3 local competitors.</p>
        </article>
        <article class="step">
          <div class="n">02</div>
          <h3>Roadmap</h3>
          <p>A prioritized 90-day plan scoped to budget and goals.</p>
        </article>
        <article class="step">
          <div class="n">03</div>
          <h3>Build &amp; Launch</h3>
          <p>Site, store, till, or campaigns go live — with a freeze before ads.</p>
        </article>
        <article class="step">
          <div class="n">04</div>
          <h3>Optimize</h3>
          <p>Weekly tuning of SEO, ads, and automation. One change you can read.</p>
        </article>
        <article class="step">
          <div class="n">05</div>
          <h3>Scale</h3>
          <p>Reporting tied to leads and sales — not likes.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ COMPARISON ============ -->
  <section class="section" style="padding-top:0;">
    <div class="wrap">
      <div class="section-head center reveal">
        <div class="eyebrow">The difference</div>
        <h2>Ventixora vs. a typical freelancer or single-service vendor</h2>
      </div>
      @php
        $compare = [
          ['Website + marketing + POS', 'One team, one strategy', 'Three vendors, no coordination'],
          ['VAT compliance', 'Built in by default', 'Often an afterthought'],
          ['Response time', 'Dedicated support plan', '"I\'ll get to it"'],
          ['Reporting', 'Tied to leads and sales', 'Likes and impressions'],
          ['Contracts', 'Monthly, no lock-in', 'Varies, often rigid'],
          ['Market knowledge', 'Built into every build', 'Learned on your budget'],
        ];
      @endphp
      <div class="vs-grid">
        <div class="vs-card win reveal">
          <div class="vs-head">
            <img src="{{ asset(config('seo.mark')) }}" alt="" width="28" height="28">
            <b>Ventixora</b>
            <span class="vs-badge">Recommended</span>
          </div>
          <ul>
            @foreach ($compare as [$label, $us])
              <li><span class="vs-ic yes">✓</span><div><small>{{ $label }}</small>{{ $us }}</div></li>
            @endforeach
          </ul>
          <a href="#audit" class="btn btn-primary btn-block">Start with a free audit</a>
        </div>
        <div class="vs-card reveal">
          <div class="vs-head"><b>Freelancer / single vendor</b></div>
          <ul>
            @foreach ($compare as [$label, , $them])
              <li><span class="vs-ic no">✕</span><div><small>{{ $label }}</small>{{ $them }}</div></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FREE AUDIT CONTENTS ============ -->
  <section class="section" id="results" style="padding-top:0;">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Your free growth audit</div>
        <h2>What you get in 48 hours — free</h2>
        <p>A short, prioritized fix list from the team that would do the work. Keep it, act on it yourself, or hand it to us.</p>
      </div>
      <div class="audit3d-grid">
        <article class="audit3d reveal" data-tilt>
          <div class="a3-num">01</div>
          <div class="a3-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M3 9h18M8 21h8"/></svg></div>
          <h3>Website &amp; conversion</h3>
          <p>Speed, mobile layout, and the exact spots where visitors drop before they call or buy.</p>
        </article>
        <article class="audit3d reveal" data-tilt>
          <div class="a3-num">02</div>
          <div class="a3-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg></div>
          <h3>Search &amp; ads visibility</h3>
          <p>Where you rank against your top three local competitors, and where ad spend is leaking.</p>
        </article>
        <article class="audit3d reveal" data-tilt>
          <div class="a3-num">03</div>
          <div class="a3-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 7h8M8 11h8M8 15h5"/></svg></div>
          <h3>Store, POS &amp; operations</h3>
          <p>Stock sync, VAT on the invoice, and the manual steps slowing your team down.</p>
        </article>
        <article class="audit3d reveal" data-tilt>
          <div class="a3-num">04</div>
          <div class="a3-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M5.6 18.4l2.1-2.1M16.3 7.7l2.1-2.1"/><circle cx="12" cy="12" r="3"/></svg></div>
          <h3>Automation quick wins</h3>
          <p>Enquiries, follow-ups and reports that can run themselves — with hours saved per week.</p>
        </article>
      </div>
      <div class="center-cta reveal">
        <a href="#audit" class="btn btn-primary btn-lg">Claim My Free Audit</a>
      </div>
    </div>
  </section>

  <!-- ============ PRICING ============ -->
  <section class="section" id="pricing">
    <div class="wrap">
      <div class="section-head center reveal" style="margin-left:auto;margin-right:auto;">
        <div class="eyebrow">Packages</div>
        <h2>Start where your business is today</h2>
        <p>Every package is scoped after your free audit, so you get a fixed quote before any work starts.</p>
      </div>
      <div class="pricing-grid reveal">
        <div class="price-card">
          <h3>Starter</h3>
          <p>For new or single-location businesses.</p>
          <ul>
            <li>Website or landing page</li>
            <li>Local SEO + Google Business Profile setup</li>
            <li>Basic monthly support</li>
          </ul>
          <a href="#audit" class="btn btn-ghost btn-block">Get a Custom Quote</a>
        </div>
        <div class="price-card feat">
          <span class="price-badge">MOST POPULAR</span>
          <h3>Growth</h3>
          <p>For businesses ready to scale acquisition.</p>
          <ul>
            <li>Everything in Starter</li>
            <li>Google &amp; Meta Ads management</li>
            <li>SEO content and social media management</li>
          </ul>
          <a href="#audit" class="btn btn-primary btn-block">Get a Custom Quote</a>
        </div>
        <div class="price-card">
          <h3>Full-Stack</h3>
          <p>For multi-branch or established operations.</p>
          <ul>
            <li>Everything in Growth</li>
            <li>POS system + multi-branch inventory</li>
            <li>AI automation and dedicated IT support</li>
          </ul>
          <a href="#audit" class="btn btn-ghost btn-block">Get a Custom Quote</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ LOCATIONS ============ -->
  <section class="section">
    <div class="wrap">
      <div class="section-head center reveal">
        <div class="eyebrow">Where we work</div>
        <h2>Serving the UAE, USA, UK and Canada</h2>
        <p>Local tax, currency, payments and search behaviour in every brief — wherever your customers are.</p>
      </div>
      <div class="loc-grid">
        @foreach (config('seo.markets') as $m)
          <a class="loc-card reveal" href="{{ route('markets') }}">
            <span class="loc-code">{{ $m['code'] }}</span>
            <h3>{{ $m['name'] }}</h3>
            <p>{{ $m['cities'] }}</p>
            <span class="serve-link">Explore {{ $m['short'] }} <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ============ FAQ ============ -->
  <section class="section" id="faq" style="padding-top:0;">
    <div class="wrap split">
      <div class="split-aside reveal">
        <div class="eyebrow">FAQ</div>
        <h2>Questions, answered</h2>
        <p>Straight answers before you commit to anything.</p>
        <div class="ask-card">
          <b>Still have a question?</b>
          <p>Send it with the audit form — a real person replies within 48 hours.</p>
          <a href="#audit" class="btn btn-primary btn-block">Ask us directly</a>
        </div>
      </div>
      <div class="faq-list reveal">
        <details class="faq-item" open>
          <summary>How long before I see results?</summary>
          <p>Website and ad-driven leads typically start within 2–4 weeks. SEO compounds over 3–6 months and becomes your lowest-cost channel long term.</p>
        </details>
        <details class="faq-item">
          <summary>Do I need all nine services, or can I start with one?</summary>
          <p>Start with whatever your business needs most — a website, a POS system, or a marketing engine. Most clients add services as growth demands it.</p>
        </details>
        <details class="faq-item">
          <summary>Is your POS system VAT-compliant?</summary>
          <p>Yes, every POS deployment meets current UAE VAT and e-invoicing requirements.</p>
        </details>
        <details class="faq-item">
          <summary>Do you offer support after launch?</summary>
          <p>Yes — monthly IT support, maintenance, and monitoring plans are available for every service line.</p>
        </details>
        <details class="faq-item">
          <summary>Do you work outside the UAE?</summary>
          <p>Yes. Ventixora serves businesses in the UAE, USA, United Kingdom and Canada, with local tax, payments and search behaviour in the brief.</p>
        </details>
        <details class="faq-item">
          <summary>Are there long-term contracts?</summary>
          <p>No lock-in contracts. We work month to month and earn renewal through results.</p>
        </details>
      </div>
    </div>
  </section>

</main>

@push('schema')
@php
  $faq = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
      ['@type' => 'Question', 'name' => 'How long before I see results?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Website and ad-driven leads typically start within 2–4 weeks. SEO compounds over 3–6 months and becomes your lowest-cost channel long term.']],
      ['@type' => 'Question', 'name' => 'Do I need all services, or can I start with one?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Start with whatever your business needs most — a website, a POS system, or a marketing engine. Most clients add services as growth demands it.']],
      ['@type' => 'Question', 'name' => 'Do you work outside the UAE?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. Ventixora serves businesses in the UAE, USA, United Kingdom and Canada, with local tax, payments and search behaviour in the brief.']],
      ['@type' => 'Question', 'name' => 'Are there long-term contracts?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'No lock-in contracts. We work month to month and earn renewal through results.']],
    ],
  ];
@endphp
<script type="application/ld+json">{!! json_encode($faq, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@endsection
