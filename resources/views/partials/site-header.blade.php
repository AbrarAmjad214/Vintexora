<header>
  <nav class="nav">
    <a href="{{ url('/') }}" class="brand">
      <img src="{{ asset(config('seo.mark')) }}" alt="Ventixora logo" width="34" height="34">
      <span class="brand-name">VENTIXORA</span>
    </a>
    <div class="nav-links" id="siteNav">
      <div class="has-drop">
        <button type="button" class="drop-trigger {{ request()->is('services*') ? 'is-on' : '' }}" aria-expanded="false" aria-haspopup="true" aria-controls="servicesDrop">
          Services
        </button>
        <div class="mobile-services">
          <a href="{{ route('services.index') }}" class="{{ request()->routeIs('services.index') ? 'is-on' : '' }}">All services</a>
          @foreach (config('vintexora.services') as $item)
            <a href="{{ route('services.show', $item['slug']) }}" class="{{ request()->is('services/'.$item['slug']) ? 'is-on' : '' }}">{{ $item['nav'] }}</a>
          @endforeach
        </div>
      </div>
      <a href="{{ url('/#engines') }}">How We Work</a>
      <a href="{{ url('/#pricing') }}">Packages</a>
      <a href="{{ route('markets') }}" class="{{ request()->routeIs('markets') ? 'is-on' : '' }}">Markets</a>
      <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'is-on' : '' }}">About</a>
      <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'is-on' : '' }}">Contact</a>
    </div>
    <div class="nav-cta">
      <span class="nav-status"><span class="status-dot"></span>Replies in 48h</span>
      <a href="#audit" class="btn btn-primary">Get My Free Growth Audit</a>
      <button class="menu-toggle" type="button" aria-label="Menu" aria-controls="siteNav" aria-expanded="false"><span></span><span></span><span></span></button>
    </div>
  </nav>
</header>
