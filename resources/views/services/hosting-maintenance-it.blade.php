@extends('layouts.service')

@section('title', 'Hosting, Maintenance & IT Support | UAE, USA, UK & Canada | Vintexora')
@section('description', 'Web hosting, cloud, Microsoft 365, backups, monitoring and security updates for businesses in the UAE, USA, UK and Canada — restores that have been drilled.')

@section('content')
<main class="pg-host" id="top">

  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner">
      <div>
        <div class="breadcrumb">
          <a href="{{ url('/') }}">Vintexora</a><span class="sep">/</span>
          <a href="{{ route('services.index') }}">Services</a><span class="sep">/</span>
          <span class="current">Hosting &amp; IT</span>
        </div>
        <div class="eyebrow">Hosting, Maintenance &amp; IT · UAE</div>
        <h1>Keep the site up, the mail flowing, and the backup <span class="grad-text">actually restorable.</span></h1>
        <p class="hero-sub">Hosting, cloud, Microsoft 365, maintenance and monthly IT support for UAE teams who cannot discover downtime on a customer WhatsApp.</p>
        <div class="hero-ctas">
          <a href="#audit" class="btn btn-primary">Take Over Hosting</a>
          <a href="#takeover" class="btn btn-ghost">First 30 days</a>
        </div>
        <div class="proof-strip">
          <span class="proof-chip">Staging included</span>
          <span class="proof-chip">Restore drills</span>
          <span class="proof-chip">Same team that built it</span>
        </div>
      </div>
      <div class="hero-visual">
        <div class="status-dash">
          <div class="status-row">
            <div class="stat-cell"><small>UPTIME</small><b>99.9%</b><div class="uptime-bar"><i></i></div></div>
            <div class="stat-cell"><small>SSL</small><b>Auto</b><p class="pulse-ok" style="margin-top:8px;">renews</p></div>
            <div class="stat-cell"><small>LAST RESTORE</small><b>Drilled</b><span style="color:var(--muted);font-size:12px;">Not hoped for</span></div>
            <div class="stat-cell"><small>M365 MFA</small><b>On</b><span style="color:var(--muted);font-size:12px;">Offboarded users gone</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="marquee" aria-hidden="true">
    <div class="marquee-track">
      <span>Uptime</span><span>Restore drills</span><span>Microsoft 365</span><span>Staging</span><span>SPF / DKIM / DMARC</span><span>Campaign freeze</span><span>Same team on the pager</span>
      <span>Uptime</span><span>Restore drills</span><span>Microsoft 365</span><span>Staging</span><span>SPF / DKIM / DMARC</span><span>Campaign freeze</span><span>Same team on the pager</span>
    </div>
  </div>

  <section class="section">
    <div class="wrap prose reveal" style="max-width:720px;">
      <div class="eyebrow">The quiet revenue killer</div>
      <h2 style="font-size:clamp(24px,3vw,32px);margin-bottom:16px;">A beautiful site that is down, hacked, or sending mail to spam is not a marketing problem. It is operations.</h2>
      <p>Dubai campaigns do not wait for a “we will look on Sunday” ticket. Friday brunch traffic, 11pm COD confirmations, and Monday RFPs all hit the same origin. We host and manage clouds for WordPress, Laravel, and commerce stacks we also build — so the people who wrote the code keep it alive.</p>
    </div>
  </section>

  <section class="section tight" id="sla">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">The retainer</div>
        <h2>Web, cloud, mail, and the website that depends on all three</h2>
      </div>
      <div class="sla-grid reveal">
        <article class="sla-card"><h3>Web hosting</h3><p>Chosen for the workload: corporate, WooCommerce spikes, Laravel APIs behind POS. Staging included. SPF, DKIM, DMARC and HTTPS are part of “hosted”, not extras after Gmail rejects invoices.</p></article>
        <article class="sla-card"><h3>Cloud &amp; servers</h3><p>Hardening, firewall, versions, queues, disk before it fills. Runbooks short enough that a second engineer can ship without a séance.</p></article>
        <article class="sla-card"><h3>Microsoft 365</h3><p>Identity, mailbox hygiene, SharePoint sprawl, MFA executives will complete. Ex-employees do not keep the CRM. Mail and website domain look like one company.</p></article>
        <article class="sla-card"><h3>Website maintenance</h3><p>Core, plugin, theme updates with a rollback path. Staging first. We do not click “update all” on a Thursday before a launch.</p></article>
        <article class="sla-card"><h3>Monitoring</h3><p>Uptime, SSL, and the URLs that equal money — home, product, checkout, lead form. Alerts to people who can act. A graph without a playbook is just anxiety.</p></article>
        <article class="sla-card"><h3>Security, backup, speed</h3><p>Patches on a calendar. Offsite copies and a restore you have seen succeed. Caching and CDN that do not break checkout cookies.</p></article>
      </div>
    </div>
  </section>

  <section class="section" id="takeover">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">First thirty days</div>
        <h2>What we take over before we talk about a prettier dashboard</h2>
      </div>
      <div class="takeover reveal">
        <div class="take-item"><div class="take-num">01</div><div><h3>Inventory the logins</h3><p>Domains, DNS, registrars, host, SSL, Microsoft 365 admins, backup destinations, who currently gets the panic call.</p></div></div>
        <div class="take-item"><div class="take-num">02</div><div><h3>Monitor money URLs</h3><p>Not only the homepage. Checkout, form, booking — whatever equals revenue this month.</p></div></div>
        <div class="take-item"><div class="take-num">03</div><div><h3>Restore once, on purpose</h3><p>A real WordPress with a real plugin list, restored to staging, so you have seen the movie.</p></div></div>
        <div class="take-item"><div class="take-num">04</div><div><h3>Patch what is dangerous</h3><p>Not what is fashionable. Align mail auth so invoices stop dying in Gmail. Write a one-page runbook.</p></div></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Why Vintexora</div>
        <h2>Boring is how UAE operators sleep</h2>
      </div>
      <div class="why-list reveal">
        <div class="why-row"><span class="num mono">01</span><div><h3>Restore, not ritual</h3><p>Backups are proven with drills. A file you have never opened is not a strategy.</p></div></div>
        <div class="why-row"><span class="num mono">02</span><div><h3>Same-team ops</h3><p>When a plugin fights a custom block, the people who made both are in the same stand-up.</p></div></div>
        <div class="why-row"><span class="num mono">03</span><div><h3>Campaign calendar</h3><p>No reckless updates on the eve of a Dubai sale or a board demo.</p></div></div>
        <div class="why-row"><span class="num mono">04</span><div><h3>Honest ceiling</h3><p>If you need 24/7 global follow-the-sun, we will help you buy that rather than pretend a boutique agency is AWS.</p></div></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal"><h2>Luck vs. a checklist</h2></div>
      <div class="compare-wrap reveal">
        <table>
          <thead>
            <tr><th></th><th class="hl">Vintexora hosting</th><th>Four vendors, four inboxes</th></tr>
          </thead>
          <tbody>
            <tr><td>Restore</td><td class="hl">You have watched it succeed</td><td>A zip file from 2019</td></tr>
            <tr><td>Mail + site</td><td class="hl">Same DNS, SPF/DKIM/DMARC</td><td>Invoices in spam, site on another registrar</td></tr>
            <tr><td>Updates</td><td class="hl">Staging, freeze calendar</td><td>Live plugin roulette</td></tr>
            <tr><td>Incident</td><td class="hl">Sentences, rollback, named channel</td><td>Personal WhatsApp that left with an employee</td></tr>
            <tr><td>Ceiling</td><td class="hl">We say when you have outgrown us</td><td>“Please open a ticket with our US NOC”</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="wrap" style="max-width:820px;">
      <div class="section-head reveal">
        <div class="eyebrow">FAQ</div>
        <h2>Hosting &amp; IT FAQs</h2>
      </div>
      <div class="reveal">
        <details class="faq-item" open>
          <summary>Do you host stacks you did not build?</summary>
          <p>Yes — with an inventory first. If the last restore is unknown, that is the fire. We will tell you what is on fire before we talk about dashboards.</p>
        </details>
        <details class="faq-item">
          <summary>Is this a full helpdesk / NOC?</summary>
          <p>No. We are not a 200-seat helpdesk pretending to be an agency. We keep digital properties and Microsoft 365 coherent. If you need a full NOC, we will say so.</p>
        </details>
        <details class="faq-item">
          <summary>Will you cache everything for speed?</summary>
          <p>Performance sits behind safety. We will not cache a checkout into a corner or a nonce into a 403.</p>
        </details>
        <details class="faq-item">
          <summary>What about Microsoft 365?</summary>
          <p>Identity, MFA, offboarding, mailbox hygiene, and mail authentication aligned with the website domain so you look like one company in UAE B2B.</p>
        </details>
        <details class="faq-item">
          <summary>How do we start?</summary>
          <p>Send the domain list. If your current vendor cannot name the last restore, you are the customer this division was built for.</p>
        </details>
      </div>
    </div>
  </section>

</main>
@endsection
