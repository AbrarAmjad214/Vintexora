@extends('layouts.service')

@section('title', 'Privacy Policy | Vintexora')
@section('description', 'How Vintexora collects, uses and stores enquiry data for UAE clients. PDPL-minded practice, no sale of personal data, contact details for requests.')

@section('content')
<main class="pg-legal" id="top">

  <section class="hero">
    <div class="hero-grid"></div>
    <div class="wrap hero-inner" style="grid-template-columns:1fr;">
      <div>
        <div class="breadcrumb">
          <a href="{{ url('/') }}">Vintexora</a><span class="sep">/</span>
          <span class="current">Privacy</span>
        </div>
        <div class="eyebrow">Legal</div>
        <h1>Privacy policy</h1>
        <p class="hero-sub">How we handle information you send us — enquiries, audits, and project work in the UAE. Last updated {{ date('F j, Y') }}.</p>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top:0;">
    <div class="wrap legal-split">
      <nav class="legal-nav reveal">
        <a href="#who">Who we are</a>
        <a href="#collect">What we collect</a>
        <a href="#use">How we use it</a>
        <a href="#share">Sharing</a>
        <a href="#keep">Retention</a>
        <a href="#rights">Your rights</a>
        <a href="#cookies">Cookies</a>
        <a href="#contact">Contact</a>
      </nav>
      <div class="legal-prose reveal">
        <h2 id="who">Who we are</h2>
        <p>Vintexora is a UAE digital growth practice offering web design, e-commerce, POS, marketing, apps, automation, QA and hosting. This policy covers vintexora.com (and this site while it is in preview) and the enquiry forms on it.</p>

        <h2 id="collect">What we collect</h2>
        <p>When you request a growth audit or otherwise contact us, we collect the details you submit: name, email, WhatsApp number, business name, service interest, and your message. Server logs may include IP address, browser type and pages visited for security and diagnostics.</p>
        <ul>
          <li>Enquiry data you type into forms</li>
          <li>Technical logs required to keep the site available</li>
          <li>Project files and credentials you later share under a statement of work (handled as client confidential information, not marketing lists)</li>
        </ul>

        <h2 id="use">How we use it</h2>
        <p>We use enquiry data to reply, scope work, and follow up on the channel you gave us. We do not sell personal data. We do not use your message to train public AI models. If a project later needs a processor (hosting, email, analytics), we keep that to what the work requires and will say so in the engagement.</p>

        <h2 id="share">Sharing</h2>
        <p>We share data only with people who need it to deliver the work (our team, or a named specialist we have briefed), or when UAE law requires it. We do not pass enquiry lists to unrelated advertisers.</p>

        <h2 id="keep">Retention</h2>
        <p>Unsuccessful enquiries are kept only as long as needed to complete the conversation and any legal record-keeping, then deleted or archived with access limited. Active client records follow the contract and ordinary accounting retention in the UAE.</p>

        <h2 id="rights">Your rights</h2>
        <p>UAE PDPL-minded practice: you may ask what we hold about you from an enquiry, ask us to correct it, or ask us to delete it where we are not required to keep it. Send the request from the same email you used on the form so we can match the record.</p>

        <h2 id="cookies">Cookies</h2>
        <p>This site uses only what is needed to run pages and remember a session (for example, a form success message). We do not run a third-party advertising pixel on this policy page. If marketing pages later add analytics, we will update this section.</p>

        <h2 id="contact">Contact</h2>
        <p>Privacy questions and data requests: use the <a href="{{ route('contact') }}" style="color:var(--cyan-soft);">contact form</a> and write “Privacy” in the message. We will not ask you to send passwords through that form.</p>
        <p>This page is a working policy for a studio site, not a substitute for counsel on a specific engagement. Client contracts can add stricter terms.</p>
      </div>
    </div>
  </section>

</main>
@endsection
