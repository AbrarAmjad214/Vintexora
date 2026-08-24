<nav class="sp-switch reveal" aria-label="Service pages">
  @foreach (config('vintexora.services') as $item)
    <a href="{{ route('services.show', $item['slug']) }}" class="{{ ($current ?? '') === $item['slug'] ? 'is-on' : '' }}">{{ $item['nav'] }}</a>
  @endforeach
</nav>
