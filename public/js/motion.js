(function () {
  const steps = document.querySelectorAll('.step-flow .step');
  if (steps.length) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach((e) => {
        if (e.isIntersecting) {
          steps.forEach((s) => s.classList.remove('is-on'));
          e.target.classList.add('is-on');
        }
      });
    }, { threshold: 0.55 });
    steps.forEach((s) => io.observe(s));

    let i = 0;
    const cycle = () => {
      if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
      const anyInView = [...steps].some((s) => {
        const r = s.getBoundingClientRect();
        return r.top < window.innerHeight && r.bottom > 80;
      });
      if (!anyInView) return;
      steps.forEach((s) => s.classList.remove('is-on'));
      steps[i % steps.length].classList.add('is-on');
      i += 1;
    };
    setInterval(cycle, 2200);
    cycle();
  }

  document.querySelectorAll('[data-stagger] > *').forEach((el, idx) => {
    el.classList.add('reveal');
    el.style.setProperty('--i', String(idx));
    el.style.transitionDelay = Math.min(idx * 0.06, 0.4) + 's';
  });
})();
