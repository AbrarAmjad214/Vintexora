<section class="cine-hero">
  <div class="cine-bg">
    <img src="{{ asset('images/services/'.($image ?? $service['image'] ?? 'services-hero.png')) }}" alt="">
  </div>
  <div class="cine-veil"></div>
  <div class="cine-scan"></div>
  <div class="wrap cine-inner">
    <p class="sp-kicker">{{ $kicker ?? (($service['code'] ?? 'SYS') . ' · ' . ($service['title'] ?? 'Services')) }}</p>
    <h1>{!! $title !!}</h1>
    <p class="sp-lede">{{ $lede }}</p>
    @if (!empty($chips))
      <div class="sp-meta">
        @foreach ($chips as $chip)
          <span class="chip">{{ $chip }}</span>
        @endforeach
      </div>
    @endif
    @if (!empty($stats))
      <div class="cine-stats">
        @foreach ($stats as $stat)
          <div class="glass">
            <b>{{ $stat['value'] }}</b>
            <span>{{ $stat['label'] }}</span>
          </div>
        @endforeach
      </div>
    @endif
  </div>
</section>
