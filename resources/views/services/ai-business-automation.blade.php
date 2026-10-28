@extends('layouts.service')

@section('title', 'AI & Business Automation | UAE, USA, UK & Canada | Ventixora')
@section('description', 'AI chatbots, workflow automation, CRM automation and AI integrations for teams in the UAE, USA, UK and Canada — fewer manual hours, grounded answers, no invented prices.')

@section('content')
<main class="pg-ai" id="top">

  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner">
      <div>
        <div class="breadcrumb">
          <a href="{{ url('/') }}">Ventixora</a><span class="sep">/</span>
          <a href="{{ route('services.index') }}">Services</a><span class="sep">/</span>
          <span class="current">AI Automation</span>
        </div>
        <div class="eyebrow">AI &amp; Business Automation · UAE</div>
        <h1>Automate the work your team already hates — with <span class="grad-text">guardrails.</span></h1>
        <p class="hero-sub">AI chatbots, workflows, CRM and integrations that are useful on Monday, auditable, and not a bot that invents your prices.</p>
        <div class="hero-ctas">
          <a href="#audit" class="btn btn-primary">Name the Loop</a>
          <a href="#plan" class="btn btn-ghost">See the 90-day plan</a>
        </div>
        <div class="proof-strip">
          <span class="proof-chip">Grounded chatbots</span>
          <span class="proof-chip">CRM that assigns</span>
          <span class="proof-chip">WhatsApp handoff</span>
        </div>
      </div>
      <div class="hero-visual">
        <div class="flow-board">
          <div class="flow-row">
            <div class="flow-node"><small>IN</small><b>Lead</b></div>
            <span class="flow-arrow">→</span>
            <div class="flow-node"><small>RULE</small><b>Qualify</b></div>
            <span class="flow-arrow">→</span>
            <div class="flow-node"><small>HUMAN</small><b>Act</b></div>
            <span class="flow-arrow">→</span>
            <div class="flow-node"><small>SYSTEM</small><b>Close</b></div>
          </div>
          <div class="flow-log">
            <em>log</em> grounded FAQ · no invented VAT<br>
            <em>log</em> escalate WhatsApp · last 3 messages<br>
            <em>warn</em> Friday quiet hours · do not ping
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="marquee" aria-hidden="true">
    <div class="marquee-track">
      <span>AI chatbots</span><span>Workflows</span><span>CRM automation</span><span>WhatsApp handoff</span><span>Grounded answers</span><span>No invented VAT</span><span>Friday quiet hours</span><span>PDPL-minded</span>
      <span>AI chatbots</span><span>Workflows</span><span>CRM automation</span><span>WhatsApp handoff</span><span>Grounded answers</span><span>No invented VAT</span><span>Friday quiet hours</span><span>PDPL-minded</span>
    </div>
  </div>

  <section class="section">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">We do not sell “AI” as a personality</div>
        <h2>We sell hours back and fewer dropped leads</h2>
        <p>UAE businesses lose time on the same loops: Instagram DMs, Excel into the CRM, invoice chasing, “what are your hours in Ramadan?” at 1am. Engagements start with a process audit, not a model demo.</p>
      </div>
      <div class="lanes reveal" id="loops">
        <div class="lane"><b>CAPTURE</b><span>Lead in from web, ads, WhatsApp, Instagram — into one CRM with fields sales will fill.</span></div>
        <div class="lane"><b>DECIDE</b><span>Qualify and route by emirate, language, or offer. Not “Dubai” as a personality.</span></div>
        <div class="lane"><b>ACT</b><span>Human or bot follow-up with context. A bot that cannot hand to WhatsApp is a dead end.</span></div>
        <div class="lane"><b>CLOSE</b><span>Deal, ticket, or order in the system of record — the same customer POS will see.</span></div>
      </div>
    </div>
  </section>

  <section class="section tight" id="stack">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">The stack · scroll the stages</div>
        <h2>Chatbots, workflows, CRM — named, not buzzworded</h2>
        <p>Each layer is a different job. Scroll: the next stage pins, the way a real UAE loop actually runs at 1am.</p>
      </div>
      <div class="story-stage">
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 01 · CHATBOT</div>
            <h3>Grounded answers. WhatsApp with the last three messages.</h3>
            <p>FAQs, catalogues, policies. No invented VAT. Escalation to a desk with history. Measured on booked jobs, not “conversations”.</p>
          </div>
          <div class="story-visual">
            <div class="chat-sim">
              <div class="bubble in">Ramadan hours in JLT?</div>
              <div class="bubble out">Sat–Thu 10–4 · Fri closed. Want WhatsApp with a human?</div>
              <div class="bubble ok">✓ handoff · 3 messages attached · no price invented</div>
            </div>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 02 · WORKFLOW</div>
            <h3>When this form submits, do these six things</h3>
            <p>Approvals, packs, onboarding, offboarding that revokes Microsoft 365. We map the exception path. A happy-path Zap is not a UAE process.</p>
          </div>
          <div class="story-visual">
            <div class="csv-lines">
              <em>trigger:</em> form.submitted<br>
              1. create CRM record<br>
              2. assign · emirate<br>
              3. pack PDF<br>
              4. notify owner<br>
              <em>5. quiet hours? wait till Saturday</em><br>
              6. log · fail visible
            </div>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 03 · CRM</div>
            <h3>Clean first. Then assign.</h3>
            <p>Lead source integrity, emirate routing, death of duplicates. Automating a graveyard is faster mess.</p>
          </div>
          <div class="story-visual">
            <div class="live-ticker">
              <div class="live-item"><b>Lead · Instagram DM</b><em>DXB</em></div>
              <div class="live-item"><b>Assigned · Aisha</b><em>00:12</em></div>
              <div class="live-item"><b>Duplicate merged</b><em>AR name safe</em></div>
              <div class="live-item"><b>WhatsApp queued</b><em>not Friday 13:00</em></div>
            </div>
          </div>
        </article>
        <article class="story-panel">
          <div>
            <div class="story-kicker">STAGE 04 · INTEGRATIONS</div>
            <h3>The model can change. The process should not.</h3>
            <p>APIs, retrieval over your documents, logging. Conservative for healthcare and finance-adjacent. PDPL-minded: what leaves the tenant, what is deleted.</p>
          </div>
          <div class="story-visual">
            <div class="csv-lines">
              allow: your price list<br>
              allow: opening hours<br>
              <em>deny: invent AED / VAT</em><br>
              log: prompt + output<br>
              swap: model vendor ≠ rewrite company
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="plan">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">A calendar, not a demo</div>
        <h2>Ninety days we can actually staff</h2>
      </div>
      <div class="step-flow">
        <article class="step">
          <div class="n">01</div>
          <h3>Days 1–15</h3>
          <p>Map loops. Dump CRM duplicates. Write the FAQs the bot may use. Name the exception owner.</p>
        </article>
        <article class="step">
          <div class="n">02</div>
          <h3>Days 16–45</h3>
          <p>One CRM. Assignment by emirate. One grounded channel — site or WhatsApp, not both yet.</p>
        </article>
        <article class="step">
          <div class="n">03</div>
          <h3>Days 46–75</h3>
          <p>The packet in the shared inbox: quotes, onboarding, or offboarding that revokes M365.</p>
        </article>
        <article class="step">
          <div class="n">04</div>
          <h3>Days 76–90</h3>
          <p>Logs. Kill what nobody uses. Only then a second integration. We still answer week twelve.</p>
        </article>
        <article class="step">
          <div class="n">05</div>
          <h3>Named owner</h3>
          <p>Operations owns the rota. The vendor does not. Failures queue in the open.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="eyebrow">Why Ventixora</div>
        <h2>Automation beside the website, ads, and POS</h2>
      </div>
      <div class="why-list reveal">
        <div class="why-row"><span class="num mono">01</span><div><h3>Grounded bots</h3><p>Answers from your content. Escalation with history. No hallucinated prices.</p></div></div>
        <div class="why-row"><span class="num mono">02</span><div><h3>Exception maps</h3><p>We automate the messy middle, not only the slide-deck happy path.</p></div></div>
        <div class="why-row"><span class="num mono">03</span><div><h3>UAE constraints</h3><p>Bilingual names, Friday quiet hours, WhatsApp handoff with the last three messages.</p></div></div>
        <div class="why-row"><span class="num mono">04</span><div><h3>Fails visibly</h3><p>A queue and an alert — not a silent skip. Named owner in operations, not in the vendor.</p></div></div>
      </div>
    </div>
  </section>

  <section class="section tight">
    <div class="wrap">
      <div class="section-head reveal"><h2>A gadget bot vs. a system the Emirates will adopt</h2></div>
      <div class="compare-wrap reveal">
        <table>
          <thead>
            <tr><th></th><th class="hl">Ventixora automation</th><th>Chatbot plugin</th></tr>
          </thead>
          <tbody>
            <tr><td>Knowledge</td><td class="hl">Your FAQs, catalogue, policies</td><td>Invented AED figures</td></tr>
            <tr><td>Handoff</td><td class="hl">WhatsApp with context</td><td>Dead end at midnight</td></tr>
            <tr><td>CRM</td><td class="hl">Cleaned, then assigned</td><td>Faster duplicates</td></tr>
            <tr><td>Data</td><td class="hl">PDPL-minded, logged, swappable model</td><td>Whatever the SaaS defaulted to</td></tr>
            <tr><td>Success</td><td class="hl">Hours you can name</td><td>A board-pack demo</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="wrap" style="max-width:820px;">
      <div class="section-head reveal">
        <div class="eyebrow">FAQ</div>
        <h2>Automation FAQs</h2>
      </div>
      <div class="reveal">
        <details class="faq-item" open>
          <summary>Is every loop a chatbot candidate?</summary>
          <p>No. “Answer the same five questions at midnight” is. “Copy this spreadsheet into the CRM” is workflow. “Nobody owns Abu Dhabi leads” is CRM automation. Name which one you are.</p>
        </details>
        <details class="faq-item">
          <summary>Will you connect ChatGPT to everything?</summary>
          <p>No. We care what the model is allowed to say, what leaves the tenant, and whether you can swap vendors without rewriting the company.</p>
        </details>
        <details class="faq-item">
          <summary>Do you need Arabic on day one?</summary>
          <p>Routing in Arabic and English when you have the content to support it. A bot that cannot store Arabic names correctly will duplicate forever.</p>
        </details>
        <details class="faq-item">
          <summary>How fast until we see hours back?</summary>
          <p>If leadership wants a press release in week two, we are the wrong partner. If they want hours back by week eight, send the loop list.</p>
        </details>
        <details class="faq-item">
          <summary>What should we send to start?</summary>
          <p>The three loops that hurt this month. That is enough to start. It is not enough to “AI the company”.</p>
        </details>
      </div>
    </div>
  </section>

</main>
@endsection
