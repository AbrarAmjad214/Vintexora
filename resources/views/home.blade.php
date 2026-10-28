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
    <div class="wrap trust-row">
      <span class="trust-item">One accountable team</span>
      <span class="trust-item">VAT-ready builds</span>
      <span class="trust-item">Reporting tied to leads &amp; sales</span>
      <span class="trust-item">UAE · USA · UK · Canada</span>
      <span class="trust-item">No long-term lock-in</span>
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
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Who we serve</div>
        <h2>Built for the businesses that run the UAE economy</h2>
        <p>Retail counters, restaurant kitchens, clinic front desks, and B2B sales teams don't need the same tools — so we don't sell them the same package.</p>
      </div>
      <div class="serve-grid">
        <div class="serve-card reveal">
          <div class="serve-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="9" cy="21" r="1"/><circle cx="18" cy="21" r="1"/><path d="M2 3h2l2.4 12.2a2 2 0 0 0 2 1.6h8.2a2 2 0 0 0 2-1.6L22 7H6"/></svg>
          </div>
          <h3>Retail &amp; E-Commerce</h3>
          <p>Stores that need to sell online and manage stock in-store, in sync.</p>
          <span class="serve-link">Retail solutions <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
        <div class="serve-card reveal">
          <div class="serve-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 3v18M4 8h3a2 2 0 0 0 2-2V3M11 3v18M15 3v9a3 3 0 0 0 3 3v6M18 3v6"/></svg>
          </div>
          <h3>F&amp;B &amp; Hospitality</h3>
          <p>POS, kitchen displays, and online ordering that survive a Friday night rush.</p>
          <span class="serve-link">F&amp;B solutions <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
        <div class="serve-card reveal">
          <div class="serve-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 21s-7-4.35-9.5-8.5C.7 8.9 2.4 5 6 5c2 0 3.3 1 4 2.3C10.7 6 12 5 14 5c3.6 0 5.3 3.9 3.5 7.5C19 16.65 12 21 12 21z"/><path d="M9 11h2v-2h2v2h2v2h-2v2h-2v-2H9z"/></svg>
          </div>
          <h3>Healthcare &amp; Pharmacy</h3>
          <p>Compliant, VAT-ready billing and booking systems for clinics and pharmacies.</p>
          <span class="serve-link">Healthcare solutions <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
        <div class="serve-card reveal">
          <div class="serve-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
          </div>
          <h3>Corporate &amp; Professional Services</h3>
          <p>Websites, branding, and lead generation for firms selling to other businesses.</p>
          <span class="serve-link">Corporate solutions <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ SERVICES GRID ============ -->
  <section class="section" id="services" style="padding-top:0;">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">What we do</div>
        <h2>Nine service divisions. One accountable partner.</h2>
      </div>
      <div class="services-grid reveal">
        <a class="service-tile" href="{{ route('services.show', 'web-design-development') }}"><span class="service-id">SYS.01</span><h3>Web Design &amp; Development</h3><p>Custom, corporate and e-commerce-ready websites built to convert, not just look good.</p></a>
        <a class="service-tile" href="{{ route('services.show', 'ecommerce-solutions') }}"><span class="service-id">SYS.02</span><h3>E-Commerce Solutions</h3><p>Shopify, WooCommerce, and full store builds with payment gateways ready for the UAE market.</p></a>
        <a class="service-tile" href="{{ route('services.show', 'hosting-maintenance-it') }}"><span class="service-id">SYS.03</span><h3>Hosting, Maintenance &amp; IT Support</h3><p>Hosting, backups, security, and monthly support so nothing breaks unnoticed.</p></a>
        <a class="service-tile" href="{{ route('services.show', 'branding-visual-identity') }}"><span class="service-id">SYS.04</span><h3>Branding &amp; Visual Identity</h3><p>Logos, brand systems, and company profiles that make you look as good as you are.</p></a>
        <a class="service-tile" href="{{ route('services.show', 'digital-marketing') }}"><span class="service-id">SYS.05</span><h3>Digital Marketing</h3><p>SEO, Google Ads, Meta Ads, and social media built around UAE search behavior.</p></a>
        <a class="service-tile" href="{{ route('services.show', 'mobile-app-development') }}"><span class="service-id">SYS.06</span><h3>Mobile App Development</h3><p>Flutter, iOS, and Android apps for customer-facing and internal tools.</p></a>
        <a class="service-tile" href="{{ route('services.show', 'ai-business-automation') }}"><span class="service-id">SYS.07</span><h3>AI &amp; Business Automation</h3><p>Chatbots, CRM automation, and workflow tools that save hours every week.</p></a>
        <a class="service-tile" href="{{ route('services.show', 'software-quality-assurance') }}"><span class="service-id">SYS.08</span><h3>Software Quality Assurance</h3><p>Manual, automation, and performance testing so launches do not leak revenue.</p></a>
        <a class="service-tile" href="{{ route('services.show', 'pos-solutions') }}"><span class="service-id">SYS.09</span><h3>POS Solutions</h3><p>VAT-compliant point-of-sale for retail, F&amp;B, pharmacy, and multi-branch operations.</p></a>
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
  <div class="why-band">
    <div class="wrap" style="padding:90px 28px 0;">
      <div class="section-head center reveal" style="margin-left:auto;margin-right:auto;">
        <div class="eyebrow">Why Ventixora</div>
        <h2>The full-stack advantage, in numbers</h2>
      </div>
    </div>
    <div class="why-grid reveal">
      <div class="why-item"><div class="why-num" data-count="0">0</div><p>Vendors to coordinate between — one team owns the whole stack</p></div>
      <div class="why-item"><div class="why-num" data-count="9">0</div><p>Service divisions under a single contract</p></div>
      <div class="why-item"><div class="why-num mono">VAT</div><p>Compliant POS and billing by default, every build</p></div>
      <div class="why-item"><div class="why-num mono">UAE</div><p>First — every campaign and build accounts for local search behavior, payment habits, and bilingual audiences</p></div>
    </div>
    <div style="height:90px;"></div>
  </div>

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
      <div class="section-head reveal">
        <h2>Ventixora vs. a typical freelancer or single-service vendor</h2>
      </div>
      <div class="compare-wrap reveal">
        <table>
          <thead>
            <tr><th></th><th class="hl">Ventixora</th><th>Freelancer / single vendor</th></tr>
          </thead>
          <tbody>
            <tr><td>Website + marketing + POS</td><td class="hl">One team, one strategy</td><td>Three separate vendors, no coordination</td></tr>
            <tr><td>VAT compliance</td><td class="hl">Built in by default</td><td>Often an afterthought</td></tr>
            <tr><td>Response time</td><td class="hl">Dedicated support plan</td><td>"I'll get to it"</td></tr>
            <tr><td>Reporting</td><td class="hl">Tied to leads/sales</td><td>Vanity metrics (likes, impressions)</td></tr>
            <tr><td>Contracts</td><td class="hl">Monthly, no lock-in</td><td>Varies, often rigid</td></tr>
            <tr><td>UAE market knowledge</td><td class="hl">Built into every build</td><td>Learned on your budget</td></tr>
          </tbody>
        </table>
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
      <div class="section-head reveal">
        <h2>Serving the UAE, USA, UK and Canada</h2>
      </div>
      <div class="loc-grid reveal">
        <div class="loc-card"><h3>UAE</h3><p>Dubai, Abu Dhabi, Sharjah, Northern Emirates</p></div>
        <div class="loc-card"><h3>USA</h3><p>English-first, cards, remote across states</p></div>
        <div class="loc-card"><h3>UK</h3><p>London and UK-wide — VAT, GBP, UK search</p></div>
        <div class="loc-card"><h3>CANADA</h3><p>Toronto to Vancouver — CAD, bilingual-ready</p></div>
      </div>
    </div>
  </section>

  <!-- ============ FAQ ============ -->
  <section class="section" id="faq" style="padding-top:0;">
    <div class="wrap" style="max-width:820px;">
      <div class="section-head reveal">
        <h2>Frequently asked questions</h2>
      </div>
      <div class="reveal">
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
