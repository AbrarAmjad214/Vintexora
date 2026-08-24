@php
  $idPrefix = $idPrefix ?? 'audit';
  $selected = old('service', $selected ?? null);
@endphp
<form class="audit-form" method="POST" action="{{ route('audit.store') }}" id="{{ $idPrefix }}-form">
  @csrf
  <input type="hidden" name="source" value="{{ $source ?? 'site' }}">

  @if (session('audit_sent'))
    <div class="form-flash ok">Received. We will reply on email or WhatsApp within 48 hours.</div>
  @endif

  @if ($errors->any())
    <div class="form-flash err">Please check the highlighted fields and try again.</div>
  @endif

  <div class="field">
    <label for="{{ $idPrefix }}-name">Name</label>
    <input id="{{ $idPrefix }}-name" name="name" type="text" value="{{ old('name') }}" placeholder="Your full name" required>
    @error('name')<span class="field-error">{{ $message }}</span>@enderror
  </div>
  <div class="field">
    <label for="{{ $idPrefix }}-email">Email</label>
    <input id="{{ $idPrefix }}-email" name="email" type="email" value="{{ old('email') }}" placeholder="you@company.ae" required>
    @error('email')<span class="field-error">{{ $message }}</span>@enderror
  </div>
  <div class="field">
    <label for="{{ $idPrefix }}-whatsapp">WhatsApp</label>
    <input id="{{ $idPrefix }}-whatsapp" name="whatsapp" type="tel" value="{{ old('whatsapp') }}" placeholder="+971 XX XXX XXXX">
    @error('whatsapp')<span class="field-error">{{ $message }}</span>@enderror
  </div>
  <div class="field">
    <label for="{{ $idPrefix }}-business">Business name</label>
    <input id="{{ $idPrefix }}-business" name="business" type="text" value="{{ old('business') }}" placeholder="Your company">
  </div>
  <div class="field">
    <label for="{{ $idPrefix }}-service">What do you need?</label>
    <select id="{{ $idPrefix }}-service" name="service">
      <option value="" {{ $selected ? '' : 'selected' }}>Select one</option>
      @foreach (config('vintexora.services') as $item)
        <option value="{{ $item['slug'] }}" @selected($selected === $item['slug'])>{{ $item['title'] }}</option>
      @endforeach
      <option value="growth-audit" @selected($selected === 'growth-audit')>Free growth audit</option>
      <option value="not-sure" @selected($selected === 'not-sure')>Not sure yet</option>
    </select>
  </div>
  <div class="field">
    <label for="{{ $idPrefix }}-message">Biggest challenge</label>
    <textarea id="{{ $idPrefix }}-message" name="message" rows="4" placeholder="What is leaking — leads, site, till, ads, or all of it?">{{ old('message') }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary btn-block">{{ $submit ?? 'Claim My Free Audit' }}</button>
</form>
