@extends('layouts.service')

@section('title', 'Digital Marketing | SEO, Google Ads, Meta Ads — UAE, USA, UK, Canada | Ventixora')
@section('description', 'SEO, local SEO, Google Ads, Meta Ads, social, content and marketing automation for brands in the UAE, USA, UK and Canada — one scoreboard, not orphaned retainers.')

@section('content')
<main class="pg-mkt" id="top">

  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner">
      <div>
        <div class="breadcrumb">
          <a href="{{ url('/') }}">Ventixora</a><span class="sep">/</span>
          <a href="{{ route('services.index') }}">Services</a><span class="sep">/</span>
          <span class="current">Digital Marketing</span>
        </div>
        <div class="eyebrow">Digital Marketing · UAE</div>
        <h1>Demand systems for how the UAE actually <span class="grad-text">searches, scrolls, and buys.</span></h1>
        <p class="hero-sub">SEO, Google Ads, Meta Ads, social, content and automation on one scoreboard — not retainers that never read each other’s reports.</p>
        <div class="hero-ctas">
          <a href="#audit" class="btn btn-primary">Review My Accounts</a>
          <a href="#channels" class="btn btn-ghost">See Channels</a>
        </div>
        <div class="proof-strip">
          <span class="proof-chip">SEO &amp; local pack</span>
          <span class="proof-chip">Google + Meta Ads</span>
          <span class="proof-chip">Landing pages in the same sprint</span>
        </div>
      </div>
      <div class="hero-visual">
        <div class="dash-frame">
          <div class="dash-top">
            <span class="status-dot"></span>
            <em>DEMAND · LIVE · UAE</em>
          </div>
          <div class="dash-body">
            <div class="kpi"><small>SEARCH CPA</small><b>AED 42</b><span>Qualified form, not a vanity click</span><div class="spark"></div></div>
            <div class="kpi"><small>LOCAL PACK</small><b>3 / 3</b><span>Dubai · Abu Dhabi · Sharjah you serve</span></div>
            <div class="kpi"><small>META HOOK</small><b>V3 win</b><span>Same offer as the landing page</span></div>
            <div class="kpi"><small>PIPELINE</small><b>On</b><span>CRM fields sales will actually fill</span></div>
          </div>
          <div class="metric-chip mc-1"><span class="dot"></span>NEGATIVES ON</div>
        </div>
      </div>
    </div>
  </section>

  <div class="marquee" aria-hidden="true">
    <div class="marquee-track">
      <span>SEO</span><span>Local pack</span><span>Google Ads</span><span>Meta Ads</span><span>Landing in the same sprint</span><span>WhatsApp SLA</span><span>Emirate honesty</span><span>Pipeline not rankings</span>
      <span>SEO</span><span>Local pack</span><span>Google Ads</span><span>Meta Ads</span><span>Landing in the same sprint</span><span>WhatsApp SLA</span><span>Emirate honesty</span><span>Pipeline not rankings</span>
    </div>
  </div>

  <section class="section" id="channels">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Channels with jobs</div>
        <h2>Traffic is cheap to brag about and expensive to waste</h2>
        <p>UAE search mixes English, transliterated Arabic, neighbourhood names, and “near me” intent that sits on Maps. We buy and earn demand that sales can close.</p>
      </div>
      <div class="mosaic reveal">
        <article><h3>SEO</h3><p>Commercial pages, not random blogs. Queries that imply budget: service + emirate, problem + industry, comparison language. Content writing supports those pages with proof and FAQs people actually type.</p></article>
        <article><h3>Local SEO</h3><p>Google Business Profile, categories, photos, reviews, and city pages only for emirates you truly serve. Fake locations get you punished. We only build pages you can defend.</p></article>
        <article><h3>Technical SEO</h3><p>Crawl, index, speed, canonicals, structured data. Silent killers: parameter chaos, duplicate AR/EN, blocked assets.</p></article>
        <article><h3>Ecommerce SEO</h3><p>Collection architecture, facet rules, feeds that match on-site titles so Shopping and organic are not two dialects.</p></article>
        <article><h3>Google Ads</h3><p>Intent capture with ruthless negatives. Structured around profit, not impression share. Performance Max when feed and creative are ready — not as a black-box apology.</p></article>
        <article><h3>Meta Ads</h3><p>Creative volume and honest offers. Hooks for Gulf audiences, landing continuity, retargeting in the same brand system. Not a side freelancer’s teal-and-gold template.</p></article>
      </div>
    </div>
  </section>

  <section class="section tight" id="scoreboard">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">One scoreboard · scroll the stages</div>
        <h2>SEO, ads, and the page — in the same month</h2>
      </div>
      <div class="story-stage">
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 01 · SEARCH</div>
            <h3>The result they tap on a commute in Dubai</h3>
            <p>Commercial pages. Local pack only for emirates you serve. Fake locations get you punished.</p>
          </div>
          <div class="story-visual">
            <div class="serp">
              <div class="serp-row win"><small>yourbrand.ae</small><b>Service + Dubai — a page they can close</b><span>Maps · call · form · WhatsApp</span></div>
              <div class="serp-row"><small>competitor.ae</small><b>Homepage for every query</b><span>Where they stay if you are slow</span></div>
            </div>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 02 · ADS</div>
            <h3>Intent with ruthless negatives</h3>
            <p>Google and Meta take pages that exist. If they do not, we brief the web team — we do not “make ads work harder”.</p>
          </div>
          <div class="story-visual">
            <div class="ad-kpis">
              <div><small>SEARCH CPA</small><b>AED 42</b></div>
              <div><small>NEGATIVES</small><b>On</b></div>
              <div><small>META HOOK</small><b>V3 win</b></div>
              <div><small>URL</small><b>Same offer</b></div>
            </div>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 03 · CLOSE</div>
            <h3>Pipeline, not a ranking trophy</h3>
            <p>If sales cannot answer in an hour, we will tell you to staff that before we buy more clicks.</p>
          </div>
          <div class="story-visual">
            <div class="live-ticker">
              <div class="live-item"><b>Qualified form</b><em>CRM field filled</em></div>
              <div class="live-item"><b>WhatsApp under 60m</b><em>SLA</em></div>
              <div class="live-item"><b>Abu Dhabi page</b><em>you actually serve</em></div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="orbit-wrap">
        <div class="orbit reveal" aria-hidden="true">
          <div class="orbit-core">Demand</div>
          <span>SEO</span><span>Ads</span><span>Social</span><span>CRM</span>
        </div>
        <div class="prose reveal">
          <div class="eyebrow">The rest of the system</div>
          <h2 style="font-size:clamp(24px,3vw,32px);margin-bottom:16px;">Social, email, reputation and video — only if they have a job</h2>
          <p>Social media marketing is strategy; management is cadence; design is the system; the calendar is the contract. We plan around National Day, Ramadan, DSF — without posting for the algorithm’s entertainment.</p>
          <p>Email and marketing automation start when the CRM is not a junk drawer. Lead generation is forms and WhatsApp routing that sales will answer. Reputation is a weekly habit. Video is short proof, not a drone reel of the skyline. LinkedIn is ICP and voice for DIFC / ADGM — not 30 hashtags.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="sequence">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">How we sequence</div>
        <h2>So SEO, ads, and social stop arguing</h2>
      </div>
      <div class="process-track cols-4 reveal">
        <div class="process-step"><div class="process-num">01</div><h3>Pause the fire</h3><p>Cut search terms that should have been negatives in week one. Stop ads pointing at the homepage.</p></div>
        <div class="process-step"><div class="process-num">02</div><h3>Fix tracking</h3><p>If analytics are fiction, we do not scale spend. Pipeline and CPA need a scoreboard that is true.</p></div>
        <div class="process-step"><div class="process-num">03</div><h3>Map pages</h3><p>SEO and local SEO: queries vs. emirates vs. pages. If the page does not exist, ads do not “work harder” — we brief the web team.</p></div>
        <div class="process-step"><div class="process-num">04</div><h3>Then buy</h3><p>Google and Meta take pages that exist. One profitable search campaign plus an honest GBP has saved more SMEs than a 12-channel fantasy.</p></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Why Ventixora</div>
        <h2>The landing page, the POS offer, and the ad account share a strategist</h2>
      </div>
      <div class="why-list reveal">
        <div class="why-row"><span class="num mono">01</span><div><h3>Shared scoreboard</h3><p>SEO, ads and pages in one plan. No orphaned rankings, no orphaned spend.</p></div></div>
        <div class="why-row"><span class="num mono">02</span><div><h3>Emirate honesty</h3><p>Local SEO only for areas you can serve. Maps trust is expensive to rebuild.</p></div></div>
        <div class="why-row"><span class="num mono">03</span><div><h3>Creative + URL</h3><p>Ad teams do not wait three weeks for a landing page. We ship them together.</p></div></div>
        <div class="why-row"><span class="num mono">04</span><div><h3>Staff the leak</h3><p>If your team cannot answer leads in an hour, we will tell you to staff that before we buy more clicks.</p></div></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal"><h2>Separate vendors vs. one scoreboard</h2></div>
      <div class="compare-wrap reveal">
        <table>
          <thead>
            <tr><th></th><th class="hl">Ventixora demand system</th><th>SEO shop + ads freelancer</th></tr>
          </thead>
          <tbody>
            <tr><td>Landing pages</td><td class="hl">Same sprint as the campaign</td><td>Homepage, three weeks later</td></tr>
            <tr><td>Reporting</td><td class="hl">Pipeline, CPA, qualified leads</td><td>Rankings and impressions</td></tr>
            <tr><td>Local SEO</td><td class="hl">Only cities you can serve</td><td>Seven fake location pages</td></tr>
            <tr><td>Arabic</td><td class="hl">When quality exists</td><td>Machine-translated blogs</td></tr>
            <tr><td>Ops</td><td class="hl">WhatsApp SLA before more spend</td><td>Hose into a bucket with a hole</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="wrap" style="max-width:820px;">
      <div class="section-head reveal">
        <div class="eyebrow">FAQ</div>
        <h2>Questions UAE marketing leads actually ask</h2>
      </div>
      <div class="reveal">
        <details class="faq-item" open>
          <summary>Do we need Arabic SEO on day one?</summary>
          <p>Only if you have Arabic content quality and a market that searches that way. A machine-translated blog will not help local SEO and can hurt trust.</p>
        </details>
        <details class="faq-item">
          <summary>Should we pause Google Ads while we fix the site?</summary>
          <p>Usually we cut waste and keep a thin intent campaign rather than going dark — unless tracking is fiction.</p>
        </details>
        <details class="faq-item">
          <summary>Can social replace ads for a new clinic in Sharjah?</summary>
          <p>Rarely in the first six months. Social can support reputation and proof. Paid still carries demand.</p>
        </details>
        <details class="faq-item">
          <summary>Will enterprise SEO help a 12-page site?</summary>
          <p>No. You need pages and local SEO first. Enterprise SEO is governance for template-heavy properties.</p>
        </details>
        <details class="faq-item">
          <summary>How do Meta Ads and landing pages connect?</summary>
          <p>Same offer, same proof, same form — shipped in one sprint with our web team. That is the operating system.</p>
        </details>
      </div>
    </div>
  </section>

</main>
@endsection
