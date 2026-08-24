<div class="drop" id="servicesDrop">
  <div class="drop-panel">
    <a href="{{ route('services.index') }}">All services</a>
    @foreach (config('vintexora.services') as $item)
      <a href="{{ route('services.show', $item['slug']) }}" class="{{ request()->is('services/'.$item['slug']) ? 'is-on' : '' }}">{{ $item['nav'] }}</a>
    @endforeach
  </div>
</div>
