@extends('layouts.service')

@section('title', 'E-Commerce Solutions in the UAE | Shopify, WooCommerce & B2B | Vintexora')
@section('description', 'Shopify development, WooCommerce, payment gateways, catalog setup, conversion optimization, subscriptions and B2B commerce for UAE stores.')

@section('content')
<main class="pg-ecom" id="top">

  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner">
      <div>
        <div class="breadcrumb">
          <a href="{{ url('/') }}">Vintexora</a><span class="sep">/</span>
          <a href="{{ route('services.index') }}">Services</a><span class="sep">/</span>
          <span class="current">E-Commerce</span>
        </div>
        <div class="eyebrow">E-Commerce Solutions · UAE</div>
        <h1>Stores that take UAE money, UAE delivery, and <span class="grad-text">UAE patience.</span></h1>
        <p class="hero-sub">Shopify, WooCommerce, and WordPress commerce for brands selling across Dubai, Abu Dhabi and Sharjah — cards, Apple Pay, instalments, COD decisions, and VAT on the invoice.</p>
        <div class="hero-ctas">
          <a href="#audit" class="btn btn-primary">Audit My Store</a>
          <a href="#funnel" class="btn btn-ghost">See the Funnel</a>
        </div>
        <div class="proof-strip">
          <span class="proof-chip">Shopify &amp; WooCommerce</span>
          <span class="proof-chip">UAE payment mix</span>
          <span class="proof-chip">POS handshake</span>
        </div>
      </div>
      <div class="hero-visual">
        <div class="cart-frame">
          <div class="cart-top"><span>CHECKOUT · yourstore.ae</span><span class="mono">AED</span></div>
          <div class="cart-body">
            <div class="cart-row"><span>Linen set · Size M</span><span>AED 189.00</span></div>
            <div class="cart-row"><span>Delivery · Dubai Marina</span><span>AED 15.00</span></div>
            <div class="cart-row vat"><span>VAT 5%</span><span>AED 10.20</span></div>
            <div class="cart-total"><span>Total</span><span>AED 214.20</span></div>
            <div class="pay-row">
              <span class="pay-pill">Apple Pay</span>
              <span class="pay-pill">Cards</span>
              <span class="pay-pill">Tabby / Tamara</span>
              <span class="pay-pill">COD · optional</span>
            </div>
          </div>
          <div class="metric-chip mc-1"><span class="dot"></span>VAT ON INVOICE</div>
          <div class="metric-chip mc-2"><span class="dot"></span>APPLE PAY READY</div>
        </div>
      </div>
    </div>
  </section>

  <div class="marquee" aria-hidden="true">
    <div class="marquee-track">
      <span>Shopify</span><span>WooCommerce</span><span>Apple Pay</span><span>VAT on invoice</span><span>COD decisions</span><span>Noon / Amazon.ae</span><span>POS handshake</span><span>B2B login catalogues</span>
      <span>Shopify</span><span>WooCommerce</span><span>Apple Pay</span><span>VAT on invoice</span><span>COD decisions</span><span>Noon / Amazon.ae</span><span>POS handshake</span><span>B2B login catalogues</span>
    </div>
  </div>

  <div class="drop-band" id="funnel">
    <div class="wrap section drop-inner">
      <div class="prose reveal">
        <div class="eyebrow">Why this matters</div>
        <h2 style="font-size:clamp(24px,3vw,32px);margin-bottom:20px;">If the cart cannot talk to stock, ads, and finance, you do not have a store. You have a gallery.</h2>
        <p>UAE shoppers compare on Noon, Amazon.ae, Instagram and your site in the same hour. They abandon when shipping appears at the last step, when VAT is a surprise, or when the size chart was written for another market.</p>
        <p>Our e-commerce work starts with catalogue truth: SKUs, variants, Arabic titles, warehouse location, and which gateway your bank will actually approve. Then we fix the leak between PDP, payment, and the warehouse WhatsApp group that still runs too many operations.</p>
      </div>
      <div class="drop-bars reveal">
        <div class="drop-bar"><span>PDP views</span><div class="drop-fill"><i style="width:100%"></i></div><b>100%</b></div>
        <div class="drop-bar"><span>Add to cart</span><div class="drop-fill"><i style="width:54%"></i></div><b>54%</b></div>
        <div class="drop-bar"><span>Shipping shown</span><div class="drop-fill"><i style="width:31%"></i></div><b>31%</b></div>
        <div class="drop-bar"><span>Paid</span><div class="drop-fill"><i style="width:12%"></i></div><b>12%</b></div>
      </div>
    </div>
  </div>

  <section class="section" id="leaks">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">The leak · scroll the stages</div>
        <h2>From PDP to paid — where UAE carts actually die</h2>
      </div>
      <div class="story-stage">
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 01 · PDP</div>
            <h3>Proof before the ad click cools</h3>
            <p>Reviews, delivery cut-offs, size charts for this market. Arabic fields. Titles ads and Noon can reuse.</p>
          </div>
          <div class="story-visual">
            <div class="live-ticker">
              <div class="live-item"><b>Size M · in warehouse DXB</b><em>LIVE</em></div>
              <div class="live-item"><b>Delivery · Marina tonight</b><em>CUT-OFF 6PM</em></div>
              <div class="live-item"><b>VAT 5% shown on PDP</b><em>NO SURPRISE</em></div>
            </div>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 02 · SHIPPING</div>
            <h3>Fees before the last step — or they bounce</h3>
            <p>Dubai vs Sharjah rules, COD policy, returns that are a warehouse process not a WhatsApp argument.</p>
          </div>
          <div class="story-visual">
            <div class="stock-rows">
              <div class="stock-row"><span>PDP</span><div class="stock-bar"><i style="width:100%"></i></div><b>100</b></div>
              <div class="stock-row"><span>Cart</span><div class="stock-bar"><i style="width:54%"></i></div><b>54</b></div>
              <div class="stock-row"><span>Ship shown</span><div class="stock-bar"><i style="width:31%"></i></div><b>31</b></div>
              <div class="stock-row"><span>Paid</span><div class="stock-bar"><i style="width:12%"></i></div><b>12</b></div>
            </div>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 03 · PAY</div>
            <h3>The gateway your bank actually approved</h3>
            <p>Apple Pay, cards, instalments, COD as a policy. Failed payments that speak human — not a silent DSF miss.</p>
          </div>
          <div class="story-visual">
            <div class="ad-kpis">
              <div><small>MIX</small><b>Apple Pay</b></div>
              <div><small>VAT</small><b>On invoice</b></div>
              <div><small>FAIL STATE</small><b>Human</b></div>
              <div><small>POS</small><b>Same SKU</b></div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="what-we-build">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">What we build</div>
        <h2>Commerce platforms that match how you actually sell</h2>
      </div>
      <div class="bento-shop reveal">
        <article class="span-2">
          <span class="sid">BUILD.01</span>
          <h3>Shopify Development</h3>
          <p>Default for brands that need speed to market, a serious theme, and checkout that supports the UAE payment mix. Custom sections — not 40 stacked apps. Collections for how Dubai searches: neighbourhood, occasion, gift. Shopify Plus when volume, B2B, or multi-store complexity justifies it.</p>
        </article>
        <article>
          <span class="sid">BUILD.02</span>
          <h3>WooCommerce</h3>
          <p>For catalogues that already live in WordPress or need deep custom logic. We harden checkout, strip plugin bloat, and connect UAE VAT rules. WooCommerce is easy to make slow. Our skill is saying no to the seventh plugin.</p>
        </article>
        <article>
          <span class="sid">BUILD.03</span>
          <h3>WordPress Commerce</h3>
          <p>When content and cart must share one CMS: shoppable editorial, B2B resources, hybrid magazine-store. Editorial and checkout stay on the same design system.</p>
        </article>
        <article>
          <span class="sid">BUILD.04</span>
          <h3>Catalog &amp; Store Design</h3>
          <p>Proof-heavy PDPs: reviews, payment badges, delivery cut-offs, photography that matches the unboxing. Variants, metafields, Arabic fields, feed-ready titles.</p>
        </article>
        <article>
          <span class="sid">BUILD.05</span>
          <h3>Payment Gateways</h3>
          <p>Network International, PayTabs, Stripe where available, Apple Pay, instalments. We map the approved stack and make failed payments human. A silent fail during DSF is not an edge case.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">After it exists</div>
        <h2>Grow the store once it can take money cleanly</h2>
      </div>
      <div class="card-grid reveal">
        <div class="feat-card"><h3>Store &amp; conversion optimization</h3><p>Sequential tests: shipping clarity, payment trust, PDP proof, then upsells. One change you can attribute — not twelve popups.</p></div>
        <div class="feat-card"><h3>Shopify migration &amp; maintenance</h3><p>URL, redirect, customer and order hygiene. Monthly theme/app audits. No reckless updates the Thursday before a campaign.</p></div>
        <div class="feat-card"><h3>Marketplace integration</h3><p>Noon, Amazon.ae — inventory diplomacy. One source of truth so you do not oversell across channels.</p></div>
        <div class="feat-card"><h3>Subscription stores</h3><p>Honest billing, pause logic, delivery that survives summer and travel. Chargebacks find trapped customers.</p></div>
        <div class="feat-card"><h3>B2B commerce</h3><p>Quote, tier, credit, catalogue privacy. Jebel Ali trade buyers want availability, MOQ and a PDF — not a lifestyle hero.</p></div>
        <div class="feat-card"><h3>Ecommerce SEO</h3><p>Collection architecture and crawlable filters designed with the store, not bolted on after the theme is “done”.</p></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">How we work</div>
        <h2>A UAE store brief, in the order we actually work</h2>
      </div>
      <div class="week-rail reveal">
        <div class="week-cell"><div class="week-dot">W1</div><h3>Archaeology</h3><p>Export the catalogue. List payments you think you have vs. what the bank approved. Watch three mobile checkouts on a mid-range Android.</p></div>
        <div class="week-cell"><div class="week-dot">W2</div><h3>Architecture</h3><p>Collection taxonomy, PDP modules, cart that does not hide fees. Gateway workstream with whoever owns merchant IDs.</p></div>
        <div class="week-cell"><div class="week-dot">W3</div><h3>Launch freeze</h3><p>Redirects, tracking, 301s. Customer password realities on a migration. Then a freeze while ads already bought traffic.</p></div>
        <div class="week-cell"><div class="week-dot">W4</div><h3>One test</h3><p>Conversion work earns the right to exist: one hypothesis, one change, one read. Marketplaces last — a second channel on a leaking cart is a bigger leak.</p></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Why Vintexora</div>
        <h2>The store, the till, and the ads share a catalogue</h2>
      </div>
      <div class="why-list reveal">
        <div class="why-row"><span class="num mono">01</span><div><h3>Catalogue as media</h3><p>Titles, variants and images structured for Google, Meta and Noon — not just the theme.</p></div></div>
        <div class="why-row"><span class="num mono">02</span><div><h3>Checkout politics</h3><p>We plan the gateway you can actually get approved, then design the UX around it.</p></div></div>
        <div class="why-row"><span class="num mono">03</span><div><h3>POS handshake</h3><p>Stock and orders can meet the counter. That is the difference between a store and a headache.</p></div></div>
        <div class="why-row"><span class="num mono">04</span><div><h3>Campaign calendar</h3><p>We do not ship breaking theme updates the week your Google Ads already bought DSF traffic.</p></div></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal"><h2>Platform choice, without the romance</h2></div>
      <div class="compare-wrap reveal">
        <table>
          <thead>
            <tr><th></th><th class="hl">Shopify</th><th>WooCommerce</th><th>Headless</th></tr>
          </thead>
          <tbody>
            <tr><td>Best when</td><td class="hl">Speed + UAE apps + checkout mix</td><td>WordPress already owns content</td><td>Rare — we will say why</td></tr>
            <tr><td>VAT &amp; invoices</td><td class="hl">Configured, not assumed</td><td>Hardened checkout + tax rules</td><td>You own the entire tax UX</td></tr>
            <tr><td>Ops join</td><td class="hl">POS and ads feeds planned in</td><td>Deep custom logic possible</td><td>Only if the team can maintain it</td></tr>
            <tr><td>Risk</td><td class="hl">App bloat if we do not say no</td><td>Speed death by plugins</td><td>Budget and staffing</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="wrap" style="max-width:820px;">
      <div class="section-head reveal">
        <div class="eyebrow">FAQ</div>
        <h2>E-commerce FAQs</h2>
      </div>
      <div class="reveal">
        <details class="faq-item" open>
          <summary>Shopify or WooCommerce for a UAE brand?</summary>
          <p>Shopify if you need speed and a serious checkout mix. WooCommerce if WordPress already owns the content or you need deep custom logic. We choose in week one, not in a brand workshop.</p>
        </details>
        <details class="faq-item">
          <summary>Can you migrate without killing SEO?</summary>
          <p>Yes — redirects, collection URLs, and customer/order hygiene are part of the plan. Ghost rankings are usually a missing 301 list, not “Google being unfair”.</p>
        </details>
        <details class="faq-item">
          <summary>Do you handle Apple Pay, COD and instalments?</summary>
          <p>We map what your bank and processor will actually approve, then design the checkout around that mix. COD is a policy decision, not a plugin toggle.</p>
        </details>
        <details class="faq-item">
          <summary>Will the store talk to our POS?</summary>
          <p>That is the point of hiring this stack. One catalogue truth so the website cannot sell a size the warehouse does not have.</p>
        </details>
        <details class="faq-item">
          <summary>Do you build B2B and subscriptions?</summary>
          <p>Yes, with their own UX and billing rules — a retail theme is not a wholesale desk, and a trapped subscriber will find chargebacks.</p>
        </details>
      </div>
    </div>
  </section>

</main>
@endsection
