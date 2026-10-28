@extends('layouts.service')

@section('title', 'Branding & Visual Identity | UAE, USA, UK & Canada | Vintexora')
@section('description', 'Brand strategy, logo, identity, guidelines, company profiles and decks for firms in the UAE, USA, UK and Canada — marks that survive web, ads and print.')

@section('content')
<main class="pg-brand" id="top">

  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner">
      <div>
        <div class="breadcrumb">
          <a href="{{ url('/') }}">Vintexora</a><span class="sep">/</span>
          <a href="{{ route('services.index') }}">Services</a><span class="sep">/</span>
          <span class="current">Branding</span>
        </div>
        <div class="eyebrow">Branding &amp; Visual Identity · UAE</div>
        <h1>Look like the company you are trying to become — in the <span class="grad-text">rooms that decide.</span></h1>
        <p class="hero-sub">Brand strategy, logo, identity, guidelines, company profiles and decks for firms judged in three seconds on Instagram and thirty seconds in a lobby.</p>
        <div class="hero-ctas">
          <a href="#audit" class="btn btn-primary">Review My Identity</a>
          <a href="#surfaces" class="btn btn-ghost">See Surfaces</a>
        </div>
        <div class="proof-strip">
          <span class="proof-chip">Bilingual lockups</span>
          <span class="proof-chip">Receipt-tested marks</span>
          <span class="proof-chip">Tender-ready profiles</span>
        </div>
      </div>
      <div class="hero-visual">
        <div class="brand-board">
          <div class="bb-mark">VX</div>
          <div class="bb-row">
            <div class="bb-cell"><small>TYPE</small><div class="bb-type">Chakra / Inter</div></div>
            <div class="bb-cell"><small>PALETTE</small><div class="swatches"><i></i><i></i><i></i><i></i></div></div>
          </div>
          <div class="bb-row">
            <div class="bb-cell"><small>EN LOCKUP</small><div class="bb-type" style="font-size:16px;">VINTEXORA</div></div>
            <div class="bb-cell"><small>AR READY</small><div class="bb-type" style="font-size:16px;">AR / EN</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="marquee" aria-hidden="true">
    <div class="marquee-track">
      <span>Logo</span><span>Guidelines</span><span>EN / AR lockups</span><span>Receipt-tested</span><span>Tender PDF</span><span>Dark UI</span><span>Company profile</span>
      <span>Logo</span><span>Guidelines</span><span>EN / AR lockups</span><span>Receipt-tested</span><span>Tender PDF</span><span>Dark UI</span><span>Company profile</span>
    </div>
  </div>

  <section class="section" id="system">
    <div class="wrap mag-split">
      <div class="prose reveal">
        <div class="eyebrow">Identity as infrastructure</div>
        <h2 style="font-size:clamp(24px,3vw,32px);margin-bottom:18px;">A logo is a mark. A brand is a system your website, POS, ads and decks can all obey.</h2>
        <p>UAE markets are visually loud. Malls, LinkedIn, and tender portals compete for the same attention. Brand strategy is how we decide what you will never look like — after listening to how customers describe you (it is rarely how you describe yourself).</p>
        <p>Logo design earns its keep at favicon size, on a delivery sticker, and on a 6-metre banner in Media City. Corporate identity extends the mark into colour, type, photography and motion. Brand guidelines are the enforcement layer so the next intern cannot invent a seventh purple.</p>
      </div>
      <div class="stack-cards reveal">
        <article><h3>Company profile</h3><p>Procurement-skimmable: capabilities, licenses, footprint, proof. Print and PDF share one grid. Arabic versions are designed, not squeezed.</p></article>
        <article><h3>Presentation design</h3><p>Masters your team can edit. One idea per slide. A cover that looks like your website — because it should. No 2008 clipart.</p></article>
        <article><h3>Graphic design</h3><p>Social templates, event walls, campaign lockups. Instagram should not look like a different company from the tender PDF.</p></article>
      </div>
    </div>
  </section>

  <section class="section tight" id="surfaces">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Surface testing</div>
        <h2>If it fails on a receipt, it is not ready</h2>
        <p>We stress-test the winner on a website header, a POS receipt, a Meta ad, and a dark-mode UI — because Vintexora will likely build those surfaces next.</p>
      </div>
      <div class="surface-grid reveal">
        <div class="surface-card"><div class="surface-preview">WEB HEADER</div><h3>Website</h3><p>Favicon to hero. Dark UI contrast included.</p></div>
        <div class="surface-card"><div class="surface-preview">THERMAL</div><h3>POS receipt</h3><p>A mark that dies on thermal paper dies as a brand.</p></div>
        <div class="surface-card"><div class="surface-preview">1:1 / 9:16</div><h3>Meta ads</h3><p>Same lockup the landing page will inherit.</p></div>
        <div class="surface-card"><div class="surface-preview">A4 / PDF</div><h3>Tender deck</h3><p>Looks as expensive as the bid — or the bid loses.</p></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="lockup reveal">
        <div>
          <small>ENGLISH</small>
          <strong>VINTEXORA</strong>
          <p style="color:var(--muted);margin-top:12px;font-size:14px;">Clear space, weight, and a wordmark that holds next to Arabic without shrinking into a caption.</p>
        </div>
        <div>
          <small>العربية</small>
          <strong>عربي / EN</strong>
          <p style="color:var(--muted);margin-top:12px;font-size:14px;">Bilingual lockups designed as a pair — not an export afterthought when the first tender in Abu Dhabi asks.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">How we work a brand in this country</div>
        <h2>From workshop to a live surface — not a moodboard that never leaves Figma</h2>
      </div>
      <div class="process-track reveal">
        <div class="process-step"><div class="process-num">01</div><h3>Workshop</h3><p>Territory, audience, and the competitor you will never copy. Verbal tone a sales lead in Abu Dhabi can actually say.</p></div>
        <div class="process-step"><div class="process-num">02</div><h3>Mark</h3><p>A tight range, not 40 directions. Industry clichés avoided. Trademark sense-check. Arabic wordmark pairing.</p></div>
        <div class="process-step"><div class="process-num">03</div><h3>Identity</h3><p>Colour (including contrast), type licensing, photography direction: real operations, not a licence pack of laptops.</p></div>
        <div class="process-step"><div class="process-num">04</div><h3>Guidelines</h3><p>Working PDF + simple Figma library. Do-nots. Living file when you add a sub-brand or a new emirate office.</p></div>
        <div class="process-step"><div class="process-num">05</div><h3>First production</h3><p>Usually the company profile or the website header — so the system is proven before campaigns drift.</p></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Why Vintexora</div>
        <h2>Branding that survives contact with ads, the till, and a tender portal</h2>
      </div>
      <div class="why-list reveal">
        <div class="why-row"><span class="num mono">01</span><div><h3>Surface testing</h3><p>Marks must survive web, ads, POS paper and a dark UI — or they come back to the bench.</p></div></div>
        <div class="why-row"><span class="num mono">02</span><div><h3>Bilingual lockups</h3><p>Arabic and English are designed as a pair, not an export afterthought.</p></div></div>
        <div class="why-row"><span class="num mono">03</span><div><h3>Sales-room honesty</h3><p>Profiles and decks built for how UAE buyers actually skim, not for design awards.</p></div></div>
        <div class="why-row"><span class="num mono">04</span><div><h3>Group marks</h3><p>If the parent has locked the logo, we build the local system around it instead of picking a fight you cannot win.</p></div></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal"><h2>A logo project vs. a system those rooms can share</h2></div>
      <div class="compare-wrap reveal">
        <table>
          <thead>
            <tr><th></th><th class="hl">Brand system (Vintexora)</th><th>Logo-only freelancer</th></tr>
          </thead>
          <tbody>
            <tr><td>Deliverable</td><td class="hl">Strategy, mark, identity, guidelines, first live surface</td><td>A PNG and a disappearing Inbox</td></tr>
            <tr><td>Receipt / favicon</td><td class="hl">Pass/fail before we ship</td><td>Looks fine on a Dribbble shot</td></tr>
            <tr><td>Decks &amp; profile</td><td class="hl">Editable masters procurement can skim</td><td>Someone rebuilds in a panic at 7am</td></tr>
            <tr><td>Web &amp; ads</td><td class="hl">Same library as the site and campaigns</td><td>Instagram becomes a second company</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="wrap" style="max-width:820px;">
      <div class="section-head reveal">
        <div class="eyebrow">FAQ</div>
        <h2>Branding FAQs</h2>
      </div>
      <div class="reveal">
        <details class="faq-item" open>
          <summary>We only need a logo. Can you just do that?</summary>
          <p>Yes — and we will say so. We will not invent a six-month brand opera. If three emirates now look like three companies, that is infrastructure, with dates.</p>
        </details>
        <details class="faq-item">
          <summary>What if the group has locked the mark?</summary>
          <p>We design the local identity around it: colour, type, bilingual rules, profile and decks. We do not pick a fight you cannot win.</p>
        </details>
        <details class="faq-item">
          <summary>Do you design Arabic versions?</summary>
          <p>Arabic lockups are designed as a pair with English — not squeezed into a leftover box when procurement asks.</p>
        </details>
        <details class="faq-item">
          <summary>Will this work on our website and POS?</summary>
          <p>That is the test. If the mark fails on a thermal receipt or a dark UI header, it comes back to the bench.</p>
        </details>
        <details class="faq-item">
          <summary>What should we bring?</summary>
          <p>The current logo and the last deck that lost. We will be specific about what in that file is costing you the room.</p>
        </details>
      </div>
    </div>
  </section>

</main>
@endsection
