@php
  $whatsapp = config('seo.contact.whatsapp');
  $waText = rawurlencode('Hi Ventixora, I would like a free growth audit for my business.');
@endphp
<div class="cta-dock" id="ctaDock" aria-label="Quick contact">
  @if ($whatsapp)
    <a class="dock-wa" href="https://wa.me/{{ $whatsapp }}?text={{ $waText }}" target="_blank" rel="noopener">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .2-3.3-.7-2.8-1.1-4.6-4-4.7-4.2-.1-.2-1.1-1.5-1.1-2.9s.7-2.1 1-2.4c.3-.3.6-.3.8-.3h.6c.2 0 .4 0 .6.5l.9 2.1c.1.2.1.4 0 .6l-.4.6-.4.4c-.1.2-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.4 2.4 1.5.3.2.5.1.7-.1l.9-1.1c.2-.3.4-.2.7-.1l2 1c.3.1.5.2.5.3.1.2.1.7-.1 1.3z"/></svg>
      WhatsApp
    </a>
  @endif
  <a class="btn btn-primary dock-main" href="#audit">Get My Free Growth Audit</a>
</div>
