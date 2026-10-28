(function () {
  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const finePointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

  // 3D tilt on cards (desktop pointers only)
  if (finePointer && !reduce) {
    document.querySelectorAll('[data-tilt], .serve-card, .price-card, .loc-card').forEach((el) => {
      const max = el.classList.contains('price-card') ? 5 : 9;
      el.addEventListener('pointermove', (e) => {
        const r = el.getBoundingClientRect();
        const x = (e.clientX - r.left) / r.width;
        const y = (e.clientY - r.top) / r.height;
        el.style.transition = 'transform .12s ease-out';
        el.style.transitionDelay = '0s';
        el.style.transform = `perspective(900px) rotateX(${(0.5 - y) * max}deg) rotateY(${(x - 0.5) * max}deg) translateZ(6px)`;
        el.style.setProperty('--mx', `${x * 100}%`);
        el.style.setProperty('--my', `${y * 100}%`);
        el.classList.add('is-tilting');
      });
      el.addEventListener('pointerleave', () => {
        el.style.transition = 'transform .5s cubic-bezier(.2,.7,.2,1)';
        el.style.transform = '';
        el.classList.remove('is-tilting');
      });
    });
  }

  // Hero scene follows the pointer
  const scene = document.querySelector('[data-scene]');
  if (scene && finePointer && !reduce) {
    const stage = scene.querySelector('.h3d-stage');
    const hero = scene.closest('section') || scene;
    hero.addEventListener('pointermove', (e) => {
      const r = hero.getBoundingClientRect();
      const x = (e.clientX - r.left) / r.width - 0.5;
      const y = (e.clientY - r.top) / r.height - 0.5;
      stage.style.setProperty('--ry', `${-16 + x * 22}deg`);
      stage.style.setProperty('--rx', `${10 - y * 14}deg`);
    });
    hero.addEventListener('pointerleave', () => {
      stage.style.removeProperty('--ry');
      stage.style.removeProperty('--rx');
    });
  }

  // Sticky CTA dock: show after the hero, hide while the form is on screen
  const dock = document.getElementById('ctaDock');
  if (dock) {
    const form = document.getElementById('audit');
    let formVisible = false;
    if (form && 'IntersectionObserver' in window) {
      new IntersectionObserver((entries) => {
        formVisible = entries[0].isIntersecting;
        update();
      }, { threshold: 0.15 }).observe(form);
    }
    function update() {
      dock.classList.toggle('is-on', window.scrollY > 520 && !formVisible);
    }
    window.addEventListener('scroll', update, { passive: true });
    update();
  }
})();
