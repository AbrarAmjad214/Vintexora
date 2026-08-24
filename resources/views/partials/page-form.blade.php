@php
  $currentSlug = request()->route('slug');
  $currentService = collect(config('vintexora.services'))->firstWhere('slug', $currentSlug);
  $formSelected = $selected ?? $currentSlug;
  $formSource = $source ?? (request()->route()?->getName() ?? 'site');
@endphp
<section class="audit-section" id="audit">
  <div class="wrap audit-pad">
    <div class="audit-inner">
      <div class="audit-copy">
        <div class="eyebrow">Free Growth Audit · 48 hours</div>
        <h2>
          @if ($headline ?? false)
            {{ $headline }}
          @elseif ($currentService)
            Ready to talk {{ $currentService['nav'] }}? Send the brief.
          @elseif (request()->routeIs('contact'))
            Send the brief. We will reply within 48 hours.
          @elseif (request()->routeIs('about'))
            If the leak is public, send it.
          @else
            See what's costing you customers
          @endif
        </h2>
        <p>{{ $lede ?? 'Fill this form. We reply on email or WhatsApp with what to keep, kill, and rebuild — not a 20-slide deck.' }}</p>
        <ol class="audit-steps">
          <li><span>01</span><div><b>Send the leak</b><p>URL, till, ads, or the loop that burns three hours a day.</p></div></li>
          <li><span>02</span><div><b>We diagnose</b><p>Site, store, POS, demand — whichever actually applies.</p></div></li>
          <li><span>03</span><div><b>48-hour reply</b><p>A prioritized fix list you can staff this quarter.</p></div></li>
        </ol>
      </div>
      <div>
        @include('partials.audit-form', [
          'source' => $formSource,
          'selected' => $formSelected,
          'submit' => $submit ?? 'Claim My Free Audit',
          'idPrefix' => 'audit',
        ])
      </div>
    </div>
  </div>
</section>
