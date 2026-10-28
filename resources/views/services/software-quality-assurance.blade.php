@extends('layouts.service')

@section('title', 'Software Quality Assurance | Testing & QA — UAE, USA, UK, Canada | Ventixora')
@section('description', 'Manual, automation, performance, regression, cross-browser, load and stress testing for digital products in the UAE, USA, UK and Canada. Launch is a gate.')

@section('content')
<main class="pg-qa" id="top">

  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner">
      <div>
        <div class="breadcrumb">
          <a href="{{ url('/') }}">Ventixora</a><span class="sep">/</span>
          <a href="{{ route('services.index') }}">Services</a><span class="sep">/</span>
          <span class="current">QA Testing</span>
        </div>
        <div class="eyebrow">Software Quality Assurance · UAE</div>
        <h1>Find the bug before a customer in Dubai does — on the <span class="grad-text">phone they own.</span></h1>
        <p class="hero-sub">Manual, automation, performance, regression, cross-browser, load and stress testing. Launch is not a vibe. It is a gate.</p>
        <div class="hero-ctas">
          <a href="#audit" class="btn btn-primary">Size a Release Gate</a>
          <a href="#gate" class="btn btn-ghost">See the gate</a>
        </div>
        <div class="proof-strip">
          <span class="proof-chip">Revenue journeys first</span>
          <span class="proof-chip">In-app browsers</span>
          <span class="proof-chip">VAT &amp; Arabic cases</span>
        </div>
      </div>
      <div class="hero-visual">
        <div class="pipe-visual">
          <div class="pipe-steps">
            <div class="pipe-step"><div class="dot">01</div><span>Scope</span></div>
            <span class="pipe-line"></span>
            <div class="pipe-step"><div class="dot">02</div><span>Cases</span></div>
            <span class="pipe-line"></span>
            <div class="pipe-step"><div class="dot">03</div><span>Execute</span></div>
            <span class="pipe-line"></span>
            <div class="pipe-step"><div class="dot">04</div><span>Report</span></div>
            <span class="pipe-line"></span>
            <div class="pipe-step"><div class="dot">05</div><span>Regress</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="marquee" aria-hidden="true">
    <div class="marquee-track">
      <span>Manual QA</span><span>Automation</span><span>Instagram webview</span><span>VAT cases</span><span>Arabic wrap</span><span>Load tests</span><span>Release gate</span>
      <span>Manual QA</span><span>Automation</span><span>Instagram webview</span><span>VAT cases</span><span>Arabic wrap</span><span>Load tests</span><span>Release gate</span>
    </div>
  </div>

  <section class="section">
    <div class="wrap prose reveal" style="max-width:720px;">
      <h2 style="font-size:clamp(24px,3vw,32px);margin-bottom:16px;">UAE launches fail in public. QA is how you keep Friday traffic from discovering your checkout math.</h2>
      <p>A campaign goes live, COD spikes, the theme breaks on an older Samsung, VAT displays wrong in Arabic, and the board sees it on Twitter. We test the journeys that make money: enquiry, pay, book, refund, login. Bug tracking is how engineering knows what to fix without a 40-message WhatsApp thread.</p>
    </div>
  </section>

  <section class="section tight" id="matrix">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">How we test</div>
        <h2>Not “click around”. Cases, devices, evidence.</h2>
      </div>
      <div class="matrix reveal">
        <article>
          <h3>Manual &amp; functional</h3>
          <p>Still catches what automation misses: copy that offends, a tap target under a sticky bar, an Arabic wrap that hides the CTA. Cases from requirements, not memory. Exploratory sessions scheduled, not accidental. English and Arabic where shipped.</p>
        </article>
        <article>
          <h3>Automation &amp; regression</h3>
          <p>Stable high-value paths: login, add-to-cart, form submit. Lean suites. A thousand flaky tests are theatre. Repeated after every hotfix and every campaign — because clients ask twice, and they should.</p>
        </article>
        <article>
          <h3>Performance, load &amp; stress</h3>
          <p>Mid-range phone on a busy UAE network. What happens when a sale or a viral reel hits. Realistic datasets, not empty staging. If the origin melts, we would rather know on Tuesday.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="gate">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">A gate you can explain to a founder</div>
        <h2>Must-pass journeys before a UAE campaign</h2>
      </div>
      <div class="gate-list reveal">
        <div class="gate-row"><span class="ok">✓</span><b>Home → service or PDP</b><em>PASS</em></div>
        <div class="gate-row"><span class="ok">✓</span><b>Cart or form → payment or WhatsApp</b><em>PASS</em></div>
        <div class="gate-row"><span class="ok">✓</span><b>Thank-you + CRM field</b><em>PASS</em></div>
        <div class="gate-row"><span class="ok">✓</span><b>Safari, Chrome, Instagram in-app</b><em>PASS</em></div>
        <div class="gate-row"><span class="ok">✓</span><b>VAT line + Arabic wrap</b><em>PASS</em></div>
        <div class="gate-row"><span class="ok">!</span><b>Load test (if you paid for a spike)</b><em>IF SPIKE</em></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Device honesty</div>
        <h2>The phones in your analytics, not a wall of flagships</h2>
      </div>
      <div class="device-row reveal">
        <div class="device"><div class="ph"></div><small>iPhone · Safari</small></div>
        <div class="device mid"><div class="ph"></div><small>Mid-range Android</small></div>
        <div class="device web"><div class="ph"></div><small>Instagram webview</small></div>
        <div class="device"><div class="ph"></div><small>Desktop ops tools</small></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Staffing the window</div>
        <h2>We size to the blast radius — not a federal audit you did not ask for</h2>
      </div>
      <div class="card-grid cols-5 reveal" style="grid-template-columns:repeat(4,1fr);">
        <div class="feat-card"><h3>Brochure site</h3><p>Functional pass, mobile pass, monitoring hook.</p></div>
        <div class="feat-card"><h3>Lead-gen campaign</h3><p>Form, thank-you, CRM field, in-app browser.</p></div>
        <div class="feat-card"><h3>Checkout</h3><p>Payment failures, VAT, Arabic, load test if you bought traffic.</p></div>
        <div class="feat-card"><h3>App</h3><p>Device matrix and regression on the core job.</p></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Why Ventixora</div>
        <h2>QA that understands VAT, POS-adjacent orders, and Meta in-app cookies</h2>
      </div>
      <div class="why-list reveal">
        <div class="why-row"><span class="num mono">01</span><div><h3>Revenue cases</h3><p>We test the path that makes money first. Decorative pages wait their turn.</p></div></div>
        <div class="why-row"><span class="num mono">02</span><div><h3>Real devices</h3><p>Instagram webviews and mid-range Android are first-class, not footnotes.</p></div></div>
        <div class="why-row"><span class="num mono">03</span><div><h3>Release gates</h3><p>Consulting that names who can ship — and when they must not (Thursday 6pm payment changes).</p></div></div>
        <div class="why-row"><span class="num mono">04</span><div><h3>Twelve defects that matter</h3><p>Not 200 “pass” rows from a click farm that missed the tax line.</p></div></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal"><h2>Click farm vs. a gate next to the builders</h2></div>
      <div class="compare-wrap reveal">
        <table>
          <thead>
            <tr><th></th><th class="hl">Ventixora QA</th><th>Offshore click farm</th></tr>
          </thead>
          <tbody>
            <tr><td>Cases</td><td class="hl">Mapped to money journeys</td><td>Generic ISO binder</td></tr>
            <tr><td>VAT / Arabic</td><td class="hl">First-class</td><td>Missed — testers never saw a tax invoice</td></tr>
            <tr><td>In-app browsers</td><td class="hl">Instagram / Facebook included</td><td>Passed on desktop Chrome</td></tr>
            <tr><td>Report</td><td class="hl">Repro, environment, suggested fix</td><td>Screenshot: “not working”</td></tr>
            <tr><td>Short window</td><td class="hl">Written list of what we did not prove</td><td>Fake green spreadsheet</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="wrap" style="max-width:820px;">
      <div class="section-head reveal">
        <div class="eyebrow">FAQ</div>
        <h2>QA FAQs</h2>
      </div>
      <div class="reveal">
        <details class="faq-item" open>
          <summary>Do we need a three-month automation programme?</summary>
          <p>A five-page corporate site does not. A checkout plus POS-adjacent portal might. We will size down. Flaky automation that everyone ignores gets deleted or fixed.</p>
        </details>
        <details class="faq-item">
          <summary>Can you just quickly test production on Thursday evening?</summary>
          <p>We refuse to “just quickly test” a payment change on production at 6pm on Thursday. That is how UAE brands get famous for the wrong reason.</p>
        </details>
        <details class="faq-item">
          <summary>What if we only have four days?</summary>
          <p>You get the money path and a written list of what we did not have time to prove. That list is more valuable than a fake “pass”.</p>
        </details>
        <details class="faq-item">
          <summary>Do you test apps as well as websites?</summary>
          <p>Yes — store listing, webview, desktop ops tools, device matrix. Website and app QA sit in the same plan when they share a release.</p>
        </details>
        <details class="faq-item">
          <summary>What do you need from us?</summary>
          <p>Staging, credentials, and the date you must not slip. We will tell you what can be proven in that window without pretending.</p>
        </details>
      </div>
    </div>
  </section>

</main>
@endsection
