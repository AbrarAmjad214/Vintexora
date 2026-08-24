// Scroll reveal
  const revealEls = document.querySelectorAll('.reveal');
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        e.target.classList.add('in');
        io.unobserve(e.target);
      }
    });
  },{threshold:0.12});
  revealEls.forEach(el=>io.observe(el));

  // Count-up numbers
  const counters = document.querySelectorAll('[data-count]');
  const countIO = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        const el = e.target;
        const target = parseInt(el.getAttribute('data-count'),10);
        const suffix = el.getAttribute('data-suffix') || '';
        let cur = 0;
        const step = Math.max(1, Math.round(target/40));
        const tick = ()=>{
          cur += step;
          if(cur >= target){ el.textContent = target + suffix; return; }
          el.textContent = cur + suffix;
          requestAnimationFrame(tick);
        };
        tick();
        countIO.unobserve(el);
      }
    });
  },{threshold:0.5});
  counters.forEach(el=>countIO.observe(el));

  document.querySelectorAll('.reveal').forEach((el, i) => {
    el.style.transitionDelay = `${Math.min(i * 0.04, 0.28)}s`;
  });

  const stage = document.getElementById('serviceStage');
  if(stage){
    const items = stage.querySelectorAll('.stage-item');
    const imgs = stage.querySelectorAll('.stage-shot img');
    const title = document.getElementById('stageTitle');
    const short = document.getElementById('stageShort');
    const code = document.getElementById('stageCode');
    const cta = document.getElementById('stageCta');
    items.forEach((btn, idx) => {
      const activate = () => {
        items.forEach(i => i.classList.remove('is-on'));
        btn.classList.add('is-on');
        imgs.forEach((img, j) => img.classList.toggle('is-on', j === idx));
        if(title) title.textContent = btn.dataset.title;
        if(short) short.textContent = btn.dataset.short;
        if(code) code.textContent = btn.querySelector('small').textContent;
        if(cta) cta.setAttribute('href', btn.dataset.href);
      };
      btn.addEventListener('mouseenter', activate);
      btn.addEventListener('focus', activate);
      btn.addEventListener('click', () => { window.location.href = btn.dataset.href; });
    });
  }

  const heroImg = document.querySelector('.cine-bg img');
  if(heroImg){
    window.addEventListener('scroll', () => {
      heroImg.style.transform = `scale(1.14) translate3d(0, ${Math.min(window.scrollY * 0.12, 80)}px, 0)`;
    }, {passive:true});
  }
