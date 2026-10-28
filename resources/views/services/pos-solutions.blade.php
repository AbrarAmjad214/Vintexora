@extends('layouts.service')

@section('title', 'POS Solutions | UAE VAT, USA, UK & Canada | Ventixora')
@section('description', 'Retail, restaurant, pharmacy and multi-store POS with tax-ready invoices, inventory, KDS, loyalty and accounting for operators in the UAE, USA, UK and Canada.')

@section('content')
<main class="pg-pos" id="top">

  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner">
      <div>
        <div class="breadcrumb">
          <a href="{{ url('/') }}">Ventixora</a><span class="sep">/</span>
          <a href="{{ route('services.index') }}">Services</a><span class="sep">/</span>
          <span class="current">POS Solutions</span>
        </div>
        <div class="eyebrow">POS Solutions · UAE</div>
        <h1>Point of sale that survives a Friday rush — and an <span class="grad-text">FTA-minded invoice.</span></h1>
        <p class="hero-sub">Retail, F&amp;B, pharmacy, grocery, salon, multi-store and cloud POS — with VAT-compliant POS at the centre, not as a checkbox on a demo laptop.</p>
        <div class="hero-ctas">
          <a href="#audit" class="btn btn-primary">Scope My Till</a>
          <a href="#verticals" class="btn btn-ghost">See Verticals</a>
        </div>
        <div class="proof-strip">
          <span class="proof-chip">VAT-compliant POS</span>
          <span class="proof-chip">Multi-store</span>
          <span class="proof-chip">KDS &amp; hardware</span>
        </div>
      </div>
      <div class="hero-visual">
        <div class="till-stage">
          <div class="till-screen">
            <div class="till-bar"><i class="on"></i><i class="on"></i><i></i><i></i></div>
            <div class="till-sku"></div>
            <div class="till-sku" style="width:78%"></div>
            <div class="till-sku" style="width:54%"></div>
            <p class="mono" style="font-size:11px;color:var(--muted);margin-top:12px;">LANE 02 · DUBAI MALL · LIVE</p>
          </div>
          <div class="receipt">
            <div class="r-brand">TAX INVOICE</div>
            <div>TRN · 100XXXXXXX</div>
            <hr>
            <div>Espresso × 2&nbsp;&nbsp;&nbsp;AED 28.00</div>
            <div>Croissant × 1&nbsp;&nbsp;AED 14.00</div>
            <hr>
            <div class="vat-line">VAT 5%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AED 2.10</div>
            <div class="total"><span>TOTAL</span><span>AED 44.10</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="marquee" aria-hidden="true">
    <div class="marquee-track">
      <span>Retail POS</span><span>Restaurant &amp; Café</span><span>Pharmacy</span><span>Grocery</span><span>Supermarket</span><span>Salon</span><span>Fashion</span><span>Laundry</span><span>VAT invoices</span><span>KDS</span><span>Multi-store</span>
      <span>Retail POS</span><span>Restaurant &amp; Café</span><span>Pharmacy</span><span>Grocery</span><span>Supermarket</span><span>Salon</span><span>Fashion</span><span>Laundry</span><span>VAT invoices</span><span>KDS</span><span>Multi-store</span>
    </div>
  </div>

  <section class="section" id="vat">
    <div class="wrap">
      <div class="vat-strip reveal">
        <div class="vat-mark">VAT</div>
        <div>
          <h3>VAT-compliant POS (UAE)</h3>
          <p>Tax invoices, credit notes, and totals that match how UAE finance teams close the month. If your current till cannot explain a number to accounting, it is not done — even if the demo looked fast on a quiet Tuesday.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section tight" id="verticals">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">The counter is the business</div>
        <h2>Choose a till for how you actually sell in the Emirates</h2>
        <p>Start with the vertical, not the vendor logo. Custom POS software development is when the generics lie about your flow.</p>
      </div>
      <div class="vert-grid" data-stagger>
        <article class="vert-card"><h3>Retail POS</h3><p>Barcode, receipts, and multi-store management with one catalogue truth.</p></article>
        <article class="vert-card"><h3>Restaurant &amp; Café</h3><p>KDS, modifiers, and Friday night that does not queue in the app and the till separately.</p></article>
        <article class="vert-card"><h3>Pharmacy POS</h3><p>Batch, expiry, controlled flows. A wrong SKU is not “just a return”.</p></article>
        <article class="vert-card"><h3>Grocery POS</h3><p>Weighted items, fast barcode, rush hours, promotions finance can audit.</p></article>
        <article class="vert-card"><h3>Supermarket POS</h3><p>Multi-lane, scale integration, warehouse that keeps shelves honest.</p></article>
        <article class="vert-card"><h3>Salon POS</h3><p>Staff, packages, appointments that must match the chair — not a retail stencil.</p></article>
        <article class="vert-card"><h3>Fashion POS</h3><p>Size/colour variants, season, loyalty without slowing the fitting-room return.</p></article>
        <article class="vert-card"><h3>Laundry POS</h3><p>Tickets, turnaround, and customer SMS that survive humidity and volume.</p></article>
      </div>
    </div>
  </section>

  <section class="section" id="spine">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">The spine · scroll the stages</div>
        <h2>Inventory, kitchen, loyalty — connected to the same ticket</h2>
        <p>Each layer is its own system. Scroll: the next stage pins over the last, the way a Friday rush actually hits the counter.</p>
      </div>
      <div class="story-stage">
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 01 · INVENTORY</div>
            <h3>Warehouse truth before the lane moves</h3>
            <p>Receiving, transfers, counts, and the fight against “the stock is in Ahmed’s head”. Multi-branch so Dubai and Sharjah do not sell the last unit twice.</p>
          </div>
          <div class="story-visual">
            <div class="stock-rows">
              <div class="stock-row"><span>SKU · ESP</span><div class="stock-bar"><i style="width:82%"></i></div><b>82</b></div>
              <div class="stock-row"><span>SKU · CRS</span><div class="stock-bar"><i style="width:41%"></i></div><b>41</b></div>
              <div class="stock-row"><span>DXB → SHJ</span><div class="stock-bar"><i style="width:64%"></i></div><b>XFER</b></div>
              <div class="stock-row"><span>Count due</span><div class="stock-bar"><i style="width:18%"></i></div><b>NOW</b></div>
            </div>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 02 · BILLING</div>
            <h3>A receipt the guest accepts. An invoice finance accepts.</h3>
            <p>Same ticket, two documents. VAT is not a theme setting. If the till cannot explain a number at month-end, it is not done.</p>
          </div>
          <div class="story-visual">
            <div class="csv-lines">
              TICKET 4410 · LANE 02<br>
              Espresso × 2&nbsp;&nbsp;&nbsp;&nbsp;AED 28.00<br>
              Croissant × 1&nbsp;&nbsp;&nbsp;AED 14.00<br>
              <em>VAT 5%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AED 2.10</em><br>
              TOTAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AED 44.10<br>
              <em>TAX INVOICE · TRN MATCHED</em>
            </div>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 03 · KITCHEN</div>
            <h3>Bump logic — not a second iPad with a browser tab</h3>
            <p>Online ordering must not create a parallel menu the pass never saw. Friday night queues in one place: the KDS.</p>
          </div>
          <div class="story-visual">
            <div class="kds-board">
              <div class="kds-ticket"><strong>T-12</strong>Espresso ×2<br>Croissant<br><em style="color:var(--cyan-soft);">02:14</em></div>
              <div class="kds-ticket"><strong>T-08</strong>Karak ×3<br>Hold sugar<br><em style="color:var(--cyan-soft);">BUMP</em></div>
              <div class="kds-ticket"><strong>APP</strong>Same menu<br>No ghost SKU<br><em style="color:var(--cyan-soft);">SYNC</em></div>
            </div>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 04 · LOYALTY</div>
            <h3>Points on the same ticket as VAT</h3>
            <p>Loyalty that ignores tax math becomes an accounting problem. Accrue on the ticket finance already signed off.</p>
          </div>
          <div class="story-visual">
            <div class="points-ring"><span>720</span></div>
            <p class="mono" style="text-align:center;font-size:11px;color:var(--muted);">PTS · TICKET 4410 · VAT-SAFE</p>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 05 · ACCOUNTS</div>
            <h3>A daily close your accountant does not retype</h3>
            <p>Exports or APIs. We would rather a clean close than a dashboard that lies by 3%.</p>
          </div>
          <div class="story-visual">
            <div class="csv-lines">
              <em>export.vat.csv</em><br>
              date,trn,net,vat,gross<br>
              24-08,4410,42.00,2.10,44.10<br>
              24-08,4411,90.00,4.50,94.50<br>
              <em>status: matched · FTA-minded</em>
            </div>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 06 · CLOUD + FALLBACK</div>
            <h3>Live on the road. Alive in a basement.</h3>
            <p>Owners between emirates get live views — and a plan when the line drops in a car park or industrial park.</p>
          </div>
          <div class="story-visual">
            <div class="signal">
              <div class="signal-bars"><i></i><i></i><i></i><i></i></div>
              <span class="offline">OFFLINE QUEUE · 14 TICKETS HELD</span>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section tight" id="golive">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">From counter to close · 5 steps</div>
        <h2>The till is a physical object. We treat it like one.</h2>
      </div>
      <div class="step-flow">
        <article class="step">
          <div class="n">01</div>
          <h3>Scope the vertical</h3>
          <p>Retail, F&amp;B, pharmacy — the flow first, not the vendor logo.</p>
        </article>
        <article class="step">
          <div class="n">02</div>
          <h3>Hardware map</h3>
          <p>Printers, scanners, drawers, scales the software already expects.</p>
        </article>
        <article class="step">
          <div class="n">03</div>
          <h3>Install window</h3>
          <p>Cabling and go-live that is not Friday at 7pm unless you insist.</p>
        </article>
        <article class="step">
          <div class="n">04</div>
          <h3>Floor training</h3>
          <p>In the language cashiers use. New hire in Deira, before lunch peak.</p>
        </article>
        <article class="step">
          <div class="n">05</div>
          <h3>Keep it alive</h3>
          <p>Fiscal changes, new lanes, scheduled upgrades — not a brick.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Why Ventixora</div>
        <h2>POS as part of the growth stack — not a hardware catalogue</h2>
      </div>
      <div class="why-list reveal">
        <div class="why-row"><span class="num mono">01</span><div><h3>Tax-first till</h3><p>VAT is a first-class object. Receipts and invoices must tell the same story.</p></div></div>
        <div class="why-row"><span class="num mono">02</span><div><h3>Floor speed</h3><p>Designed for the cashier under pressure, not the demo laptop in a quiet office.</p></div></div>
        <div class="why-row"><span class="num mono">03</span><div><h3>One catalogue</h3><p>Web, ads and POS share SKU truth. Overselling is a systems failure, not a busy day.</p></div></div>
        <div class="why-row"><span class="num mono">04</span><div><h3>Configure vs custom</h3><p>If a mature UAE POS product fits, we say so. We are not here to rewrite software for sport.</p></div></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal"><h2>A cheap till vs. a till that can close the month</h2></div>
      <div class="compare-wrap reveal">
        <table>
          <thead>
            <tr><th></th><th class="hl">Ventixora POS practice</th><th>Generic till + leftover plugins</th></tr>
          </thead>
          <tbody>
            <tr><td>VAT</td><td class="hl">Invoice + receipt tell the same story</td><td>Theme setting, hoped for</td></tr>
            <tr><td>Catalogue</td><td class="hl">Shared with web and ads</td><td>Second stock file in a spreadsheet</td></tr>
            <tr><td>KDS / online</td><td class="hl">One menu the pass can cook</td><td>Parallel menus, Friday chaos</td></tr>
            <tr><td>Go-live</td><td class="hl">Floor training, scheduled window</td><td>Heroic all-nighter</td></tr>
            <tr><td>After</td><td class="hl">Maintenance, tax changes, new lanes</td><td>Vendor disappeared</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="wrap" style="max-width:820px;">
      <div class="section-head reveal">
        <div class="eyebrow">FAQ</div>
        <h2>POS FAQs</h2>
      </div>
      <div class="reveal">
        <details class="faq-item" open>
          <summary>Do you always build custom POS?</summary>
          <p>No. If a mature UAE product fits your vertical, VAT and multi-store logic, we will say configure. Custom POS software development is the honest path when those generics lie about your flow.</p>
        </details>
        <details class="faq-item">
          <summary>Can one system cover Dubai and Sharjah branches?</summary>
          <p>Yes — multi-branch / multi-store POS with one catalogue truth so you do not oversell. Cloud views for owners on the road, with a fallback when Wi-Fi dies in a basement.</p>
        </details>
        <details class="faq-item">
          <summary>Will it talk to the website and ads?</summary>
          <p>That is why this page sits next to e-commerce and marketing. When marketing wants a BOGO, the till must know. When e-commerce sells the last unit, the lane must know.</p>
        </details>
        <details class="faq-item">
          <summary>What should we bring to a scoping call?</summary>
          <p>A video of a real transaction, a sample tax invoice, hardware already on the counter, branch count, Arabic receipt needs, and whether online ordering is a promise already made on Instagram.</p>
        </details>
        <details class="faq-item">
          <summary>Is VAT really non-negotiable?</summary>
          <p>Yes. If finance cannot close, the till is not done — even if cashiers liked the demo.</p>
        </details>
      </div>
    </div>
  </section>

</main>
@endsection
