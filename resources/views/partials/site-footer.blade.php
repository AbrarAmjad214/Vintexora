<footer>
  <div class="wrap">
    <div class="footer-top">
      <div>
        <div class="footer-brand">
          <img src="{{ asset(config('seo.mark')) }}" alt="Ventixora logo" width="34" height="34">
          <span>VENTIXORA</span>
        </div>
        <p class="footer-tagline">Full-stack digital growth for businesses in the UAE, USA, UK and Canada — web, e-commerce, POS, marketing and automation.</p>
        <a href="#audit" class="btn btn-primary" style="margin-top:18px;">Get a Free Growth Audit</a>
      </div>
      <div class="footer-col footer-services">
        <h4>Services</h4>
        <ul>
          @foreach (config('vintexora.services') as $item)
            <li><a href="{{ route('services.show', $item['slug']) }}">{{ $item['nav'] }}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="footer-col">
        <h4>Industries</h4>
        <ul>
          <li><a href="{{ url('/#who') }}">Retail &amp; E-Commerce</a></li>
          <li><a href="{{ url('/#who') }}">F&amp;B &amp; Hospitality</a></li>
          <li><a href="{{ url('/#who') }}">Healthcare &amp; Pharmacy</a></li>
          <li><a href="{{ url('/#who') }}">Corporate Services</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('markets') }}">UAE · USA · UK · Canada</a></li>
          <li><a href="{{ route('services.index') }}">All Services</a></li>
          <li><a href="{{ url('/#pricing') }}">Packages</a></li>
          <li><a href="{{ url('/#results') }}">Results</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
          <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© {{ date('Y') }} VENTIXORA · ventixora.com</p>
      <p>UAE · USA · UK · CANADA · <a href="{{ route('privacy') }}">Privacy</a></p>
    </div>
  </div>
</footer>
