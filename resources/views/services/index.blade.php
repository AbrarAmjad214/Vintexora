@extends('layouts.app')

@section('title', 'Ventixora Services | Web, E-Commerce, POS, Marketing — UAE, USA, UK, Canada')
@section('description', 'Explore Ventixora services for the UAE, USA, UK and Canada: web design, e-commerce, hosting, branding, digital marketing, apps, AI automation, QA and POS.')

@section('content')
<main class="sp">
  <section class="cine-hero">
    <div class="cine-bg">
      <img src="{{ asset('images/services/services-hero.png') }}" alt="Dubai night skyline — Ventixora services">
    </div>
    <div class="cine-veil"></div>
    <div class="cine-scan"></div>
    <div class="wrap cine-inner">
      <div class="eyebrow">Service systems · UAE</div>
      <h1>Nine divisions. <span class="grad-text">One skyline</span> of work.</h1>
      <p class="sp-lede">Pick the leak. Hover a system. Open the brief. Web, store, till, ads, apps, AI, QA and hosting — shot for operators in Dubai, Abu Dhabi and Sharjah who buy with their eyes first.</p>
      <div class="cine-stats">
        <div class="glass"><b>9</b><span>live service systems</span></div>
        <div class="glass"><b>UAE</b><span>built for this market</span></div>
        <div class="glass"><b>VAT</b><span>aware by default</span></div>
      </div>
    </div>
  </section>

  <div class="marquee" aria-hidden="true">
    <div class="marquee-track">
      <span>Web Design</span><span>Shopify</span><span>VAT POS</span><span>Local SEO</span><span>Flutter</span><span>AI Chatbots</span><span>QA Gates</span><span>Microsoft 365</span><span>Brand Systems</span>
      <span>Web Design</span><span>Shopify</span><span>VAT POS</span><span>Local SEO</span><span>Flutter</span><span>AI Chatbots</span><span>QA Gates</span><span>Microsoft 365</span><span>Brand Systems</span>
    </div>
  </div>

  <section class="section">
    <div class="wrap">
      <div class="section-head reveal">
        <div>
          <div class="eyebrow">Live stage</div>
          <h2>Hover a division. Watch the room change.</h2>
        </div>
        <p>An interactive preview of the nine systems — then the full brief, with the same colors as home and a layout that is not a text wall.</p>
      </div>
      <div class="stage reveal" id="serviceStage">
        <div class="stage-list">
          @foreach ($services as $i => $item)
            <button type="button" class="stage-item {{ $i === 0 ? 'is-on' : '' }}"
              data-img="{{ asset('images/services/'.$item['image']) }}"
              data-href="{{ route('services.show', $item['slug']) }}"
              data-title="{{ $item['title'] }}"
              data-short="{{ $item['short'] }}">
              <span>{{ $item['title'] }}</span>
              <small>{{ $item['code'] }}</small>
            </button>
          @endforeach
        </div>
        <div class="stage-shot">
          @foreach ($services as $i => $item)
            <img src="{{ asset('images/services/'.$item['image']) }}" alt="{{ $item['title'] }}" class="{{ $i === 0 ? 'is-on' : '' }}" data-slug="{{ $item['slug'] }}">
          @endforeach
          <div class="stage-cap">
            <p class="sp-kicker" id="stageCode">{{ $services[0]['code'] }}</p>
            <h3 id="stageTitle">{{ $services[0]['title'] }}</h3>
            <p id="stageShort" style="color:var(--muted);margin:8px 0 14px;">{{ $services[0]['short'] }}</p>
            <a id="stageCta" class="btn btn-primary" href="{{ route('services.show', $services[0]['slug']) }}">Open the full brief</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top:0;">
    <div class="wrap">
      <div class="eyebrow reveal">Enter a system</div>
      <h2 class="reveal" style="margin-bottom:22px;">Image-led briefs. Not nine identical cards.</h2>
      <div class="shot-grid">
        @foreach ($services as $i => $item)
          <a class="shot-card magnet reveal {{ $i === 0 ? 'span-2' : '' }}" href="{{ route('services.show', $item['slug']) }}">
            <img src="{{ asset('images/services/'.$item['image']) }}" alt="{{ $item['title'] }}">
            <div class="shot-veil"></div>
            <div class="shot-body">
              <span class="tag">{{ $item['tag'] }}</span>
              <h3>{{ $item['title'] }}</h3>
              <p>{{ $item['short'] }}</p>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="split-shot reveal">
        <div class="split-img">
          <img src="{{ asset('images/services/svc-pos.png') }}" alt="UAE retail counter">
        </div>
        <div class="split-copy sp-copy">
          <div class="eyebrow">UAE-first</div>
          <h2>Built for how this country actually buys.</h2>
          <p>Mobile thumbs. VAT on the invoice. WhatsApp as a sales desk. Neighbourhood search. Friday traffic that does not wait for a European sprint. Every brief below is written for the person who gets blamed if it fails.</p>
          <p>Pick the leak. We will not pitch nine retainers until the sequence is mapped.</p>
          <a class="btn btn-ghost" href="{{ url('/#audit') }}">Get the free growth audit</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top:0;">
    <div class="wrap sp-copy">
      <h2 class="reveal">How to use this</h2>
      <p class="reveal">Every card is a full brief, not a brochure paragraph. People look up “Shopify development Dubai”, “VAT POS for restaurant”, “local SEO Abu Dhabi”, and “WordPress maintenance Sharjah” because those are the jobs they need done this quarter. If you only need one, start there. If you need the whole engine, start with the audit.</p>
      <p class="reveal">What is unique is not a longer menu. Web design, e-commerce, hosting, branding, digital marketing, mobile apps, AI, QA and POS sit in one operating rhythm. Tracking, VAT, bilingual UX and payment methods are decided once, then reused.</p>
      <h2 class="reveal">The keywords UAE businesses hire against</h2>
      <div class="kw-grid reveal">
        <span>Custom Business Website Development</span><span>Corporate Website Development</span><span>Landing Page Design</span><span>WordPress Development</span><span>Website Redesign</span><span>Responsive Web Design</span><span>UI/UX Design</span><span>Wireframing</span><span>Website Strategy &amp; Consulting</span><span>Website Speed Optimization</span><span>Website Migration</span><span>Website Security</span><span>Website Audit</span><span>ADA Accessibility</span><span>Headless WordPress</span>
        <span>Shopify Development</span><span>WooCommerce Development</span><span>WordPress E-Commerce</span><span>Store Design</span><span>Payment Gateway Integration</span><span>Product Catalog Setup</span><span>Store Optimization</span><span>Shopify Migration</span><span>Shopify Maintenance</span><span>Conversion Optimization</span><span>Marketplace Integration</span><span>Subscription Stores</span><span>B2B Commerce</span>
        <span>Web Hosting</span><span>Cloud &amp; Server Management</span><span>Microsoft 365 Management</span><span>Website Maintenance</span><span>Monthly IT Support</span><span>Website Monitoring</span><span>Security Updates</span><span>Backup Services</span><span>Performance Optimization</span>
        <span>Brand Strategy</span><span>Logo Design</span><span>Corporate Identity</span><span>Brand Guidelines</span><span>Company Profile</span><span>Presentation Design</span><span>Graphic Design</span>
        <span>SEO</span><span>Local SEO</span><span>Technical SEO</span><span>Enterprise SEO</span><span>Ecommerce SEO</span><span>Social Media Marketing</span><span>Social Media Management</span><span>Social Media Design</span><span>Content Calendar</span><span>Content Writing</span><span>Google Ads</span><span>Meta Ads</span><span>Email Marketing</span><span>Lead Generation</span><span>Reputation Management</span><span>Video Marketing</span><span>LinkedIn Marketing</span><span>Marketing Automation</span>
        <span>Flutter Development</span><span>Android Apps</span><span>iOS Apps</span><span>App UI Design</span><span>App UX Design</span><span>App Prototyping</span>
        <span>AI Chatbots</span><span>Workflow Automation</span><span>CRM Automation</span><span>Business Automation</span><span>AI Integrations</span>
        <span>Manual Testing</span><span>Automation Testing</span><span>Functional Testing</span><span>Performance Testing</span><span>Regression Testing</span><span>Cross-Browser Testing</span><span>Website &amp; App QA</span><span>Bug Tracking</span><span>Load &amp; Stress Testing</span><span>Quality Engineering Consulting</span>
        <span>Custom POS Software</span><span>Retail POS</span><span>Restaurant &amp; Café POS</span><span>Pharmacy POS</span><span>Grocery POS</span><span>Supermarket POS</span><span>Salon POS</span><span>Laundry POS</span><span>Fashion POS</span><span>Inventory Management</span><span>Sales &amp; Billing</span><span>Barcode &amp; Receipts</span><span>Multi-Branch POS</span><span>Cloud POS</span><span>VAT-Compliant POS</span><span>Kitchen Display System</span><span>Online Ordering</span><span>Loyalty Programs</span><span>Warehouse Management</span><span>Accounting Integration</span><span>POS Hardware</span>
      </div>
      <p class="reveal">If you are unsure which page to open, send the URL of what you have today. The audit will point to the leak, not the trend. A typical UAE brief is never “make a website”. It is “make the site load in Business Bay on a 4G phone, take a local gateway, show VAT correctly, rank for the neighbourhood query, and pass the same stock file the POS uses on Friday night”.</p>
      <p class="reveal">UAE-first is not a flag in the footer. It is defaults: bilingual planned even if English ships first, mobile thumbs, tax conversations in month one, Maps language, Friday traffic, WhatsApp handoffs. We will not build ten city pages you do not serve, promise page-one in 14 days, install a till that cannot explain VAT, or launch a chatbot that invents prices.</p>
      <p class="reveal">Read the division that matches this quarter’s pain. Then send the leak. We answer with a sequence — diagnose, architect, ship, compound — owned by one team from Deira to Downtown to the Corniche.</p>
    </div>
  </section>

</main>
@endsection
