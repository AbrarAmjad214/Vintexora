@extends('layouts.service')

@section('title', 'Mobile App Design & Development in the UAE | Flutter, iOS, Android | Vintexora')
@section('description', 'Flutter development, Android apps, iOS apps, UI design, UX design and app prototyping for UAE customer apps and internal tools.')

@section('content')
<main class="pg-app" id="top">

  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner">
      <div>
        <div class="breadcrumb">
          <a href="{{ url('/') }}">Vintexora</a><span class="sep">/</span>
          <a href="{{ route('services.index') }}">Services</a><span class="sep">/</span>
          <span class="current">Mobile Apps</span>
        </div>
        <div class="eyebrow">Mobile App Design &amp; Development · UAE</div>
        <h1>Apps people will keep on the home screen — not a brochure you <span class="grad-text">cannot update.</span></h1>
        <p class="hero-sub">Flutter, iOS, Android, UI/UX and prototyping for a customer channel or an internal tool that works in the van, the clinic, and the warehouse.</p>
        <div class="hero-ctas">
          <a href="#audit" class="btn btn-primary">Prototype the Job</a>
          <a href="#gate" class="btn btn-ghost">When to build</a>
        </div>
        <div class="proof-strip">
          <span class="proof-chip">Flutter by default</span>
          <span class="proof-chip">Mid-range Android tested</span>
          <span class="proof-chip">Prototype before production</span>
        </div>
      </div>
      <div class="hero-visual">
        <div class="phone-pair">
          <div class="phone a"><div class="phone-screen"></div></div>
          <div class="phone b"><div class="phone-screen"></div></div>
          <div class="metric-chip mc-1"><span class="dot"></span>iOS + ANDROID</div>
          <div class="metric-chip mc-2"><span class="dot"></span>RTL READY</div>
        </div>
      </div>
    </div>
  </section>

  <div class="marquee" aria-hidden="true">
    <div class="marquee-track">
      <span>Flutter</span><span>iOS</span><span>Android</span><span>Prototype first</span><span>Mid-range phones</span><span>RTL / Arabic</span><span>Offline in a basement</span>
      <span>Flutter</span><span>iOS</span><span>Android</span><span>Prototype first</span><span>Mid-range phones</span><span>RTL / Arabic</span><span>Offline in a basement</span>
    </div>
  </div>

  <section class="section" id="gate">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">The honest split</div>
        <h2>Most UAE “app ideas” should be a website. We will tell you.</h2>
        <p>When it should be an app, we build it properly. App prototyping is the first product — on real device sizes, including the mid-range Android that dominates local usage.</p>
      </div>
      <div class="job-gate reveal">
        <div class="job-col yes">
          <h3>Build the app</h3>
          <ul>
            <li>The job is repeated, logged-in, camera-aware, or offline-tolerant</li>
            <li>Field service, loyalty barcode, driver tools, clinic follow-up, B2B reorder</li>
            <li>Someone will own the backlog after v1</li>
            <li>Identity can inherit Microsoft 365 or the same catalogue as web/POS</li>
          </ul>
        </div>
        <div class="job-col no">
          <h3>Do not build it</h3>
          <ul>
            <li>Because a competitor has one</li>
            <li>A vendor said “the future is mobile” while quoting a native rebuild of your website</li>
            <li>The answer to “who maintains this” is nobody</li>
            <li>You actually need a super-app in ninety days (that is a demo, not a product)</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">What we ship</div>
        <h2>Flutter when it fits. Native when the platform demands it.</h2>
      </div>
      <div class="card-grid reveal">
        <div class="feat-card"><h3>Flutter development</h3><p>One product to both stores, shared design language, clean architecture, TestFlight and Play internal tracks. Performance on low-end Android is a requirement, not a hope.</p></div>
        <div class="feat-card"><h3>iOS &amp; Android native</h3><p>Deep platform APIs, existing native teams, or store-specific quality bars. Feature parity is a decision: maybe iOS gets wallet first. We document it.</p></div>
        <div class="feat-card"><h3>UI design</h3><p>Large tap targets, high contrast in sunlight, forms that do not fight RTL. A system that can go bilingual without a rebuild.</p></div>
        <div class="feat-card"><h3>UX design</h3><p>Empty states, offline, thumb zone. Unhappy paths: failed payment, no coverage, driver late, stock mismatch with the website.</p></div>
        <div class="feat-card"><h3>App prototyping</h3><p>Figma and sometimes Flutter previews. Playback sessions with stakeholders in Dubai and Abu Dhabi before engineering invoices land.</p></div>
        <div class="feat-card"><h3>Store launch</h3><p>Listings, privacy nutrition labels, Arabic screenshots — launch work, not a surprise from legal the night before.</p></div>
      </div>
    </div>
  </section>

  <section class="section" id="ninety">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Ninety days</div>
        <h2>To a store listing you can defend — not a launch party</h2>
      </div>
      <div class="day-blocks reveal">
        <div class="day-block"><small>DAYS 1–20</small><h3>Prototype the job</h3><p>Real phones: mid-range Android and the iPhone your executive owns. Kill features that cannot survive the test. Lock bilingual rules.</p></div>
        <div class="day-block"><small>DAYS 21–50</small><h3>Build in slices</h3><p>Weekly TestFlight / internal Play. UI locks. UX still changes empty states. Core job first — authenticate and complete it.</p></div>
        <div class="day-block"><small>DAYS 51–75</small><h3>QA the matrix</h3><p>Website and app QA, store screenshots, privacy text, Arabic expansion. Device matrix from our testing practice — not “the intern has an iPhone”.</p></div>
        <div class="day-block"><small>DAYS 76–90</small><h3>Review buffer</h3><p>Store review, crash monitor, v1.1 backlog that is not a fantasy. Maintenance is a line item: OS versions, policy, regression.</p></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Why Vintexora</div>
        <h2>Mobile is a surface of the same system — not a startup inside your startup</h2>
      </div>
      <div class="why-list reveal">
        <div class="why-row"><span class="num mono">01</span><div><h3>Prototype gate</h3><p>No production sprint until a real user can finish the core job on a phone.</p></div></div>
        <div class="why-row"><span class="num mono">02</span><div><h3>Device honesty</h3><p>We test the Androids your customers have, not only the latest iPhone.</p></div></div>
        <div class="why-row"><span class="num mono">03</span><div><h3>System surface</h3><p>Apps inherit identity, catalogue and POS logic. They do not invent a parallel company.</p></div></div>
        <div class="why-row"><span class="num mono">04</span><div><h3>Continuity</h3><p>The Emirates is full of apps whose vendor left. We document APIs so you can hire another Flutter developer without archaeology.</p></div></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal"><h2>Website companion vs. a monument on the store</h2></div>
      <div class="compare-wrap reveal">
        <table>
          <thead>
            <tr><th></th><th class="hl">Vintexora mobile</th><th>Brochure app</th></tr>
          </thead>
          <tbody>
            <tr><td>First slice</td><td class="hl">One job completed</td><td>Forty features in Figma</td></tr>
            <tr><td>Identity</td><td class="hl">Same emails Microsoft 365 already knows</td><td>Fourth password</td></tr>
            <tr><td>Stock / loyalty</td><td class="hl">Reads POS or Shopify</td><td>A toy that cannot see the ticket</td></tr>
            <tr><td>Arabic</td><td class="hl">Layouts that expand</td><td>Broken when the string grows</td></tr>
            <tr><td>After launch</td><td class="hl">Regression + store policy</td><td>Abandoned listing after Ramadan</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="wrap" style="max-width:820px;">
      <div class="section-head reveal">
        <div class="eyebrow">FAQ</div>
        <h2>Mobile app FAQs</h2>
      </div>
      <div class="reveal">
        <details class="faq-item" open>
          <summary>Flutter or native?</summary>
          <p>Flutter is our default for iOS and Android without two political codebases. Native when you need deep platform APIs, an existing native team, or store-specific bars.</p>
        </details>
        <details class="faq-item">
          <summary>How long to a store listing?</summary>
          <p>A defensible v1 of one job is a ninety-day shape: prototype, slices, QA, review buffer. Super-apps do not fit that calendar.</p>
        </details>
        <details class="faq-item">
          <summary>Will it work in Arabic?</summary>
          <p>Bilingual rules are agreed in the prototype. Layouts that break when Arabic expands do not ship.</p>
        </details>
        <details class="faq-item">
          <summary>Can it talk to our website and POS?</summary>
          <p>Yes — that is the uniqueness. A loyalty app that cannot see the in-store ticket is a toy. We do not invent a fourth stock file.</p>
        </details>
        <details class="faq-item">
          <summary>What if we only have budget for “development”?</summary>
          <p>That does not cover an app. Prototyping, QA, store listings and maintenance are part of the product. We will say that in the proposal so procurement cannot pretend later.</p>
        </details>
      </div>
    </div>
  </section>

</main>
@endsection
