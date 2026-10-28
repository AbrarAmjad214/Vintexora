(function () {
  const toggle = document.querySelector('.menu-toggle');
  const navLinks = document.querySelector('.nav-links');
  const dropWrap = document.querySelector('.has-drop');
  const dropTrigger = document.querySelector('.drop-trigger');
  const drop = document.getElementById('servicesDrop');
  const mobile = () => window.matchMedia('(max-width:980px)').matches;

  const setMenuOpen = (open) => {
    if (!toggle || !navLinks) return;
    navLinks.classList.toggle('is-open', open);
    toggle.classList.toggle('is-open', open);
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    document.body.classList.toggle('nav-open', open);
    // Closing the menu must also close the services accordion, or body keeps drop-open (no scroll)
    if (!open) setDropOpen(false);
  };

  const placeDrop = () => {
    if (!drop || !dropTrigger || mobile()) {
      if (drop) drop.removeAttribute('style');
      return;
    }
    const r = dropTrigger.getBoundingClientRect();
    drop.style.position = 'fixed';
    drop.style.top = Math.round(r.bottom + 8) + 'px';
    drop.style.left = Math.round(r.left + r.width / 2) + 'px';
    drop.style.right = 'auto';
    drop.style.transform = 'translateX(-50%)';
  };

  const setDropOpen = (open) => {
    if (!dropWrap || !dropTrigger || !drop) return;
    dropWrap.classList.toggle('is-open', open);
    drop.classList.toggle('is-open', open);
    dropTrigger.setAttribute('aria-expanded', open ? 'true' : 'false');
    document.body.classList.toggle('drop-open', open);
    if (open) placeDrop();
    else drop.removeAttribute('style');
  };

  if (toggle && navLinks) {
    toggle.addEventListener('click', (e) => {
      e.stopPropagation();
      setDropOpen(false);
      setMenuOpen(!navLinks.classList.contains('is-open'));
    });
    navLinks.querySelectorAll('a').forEach((a) => {
      a.addEventListener('click', () => {
        if (mobile()) setMenuOpen(false);
      });
    });
  }

  if (dropTrigger && dropWrap && drop) {
    dropTrigger.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      setDropOpen(!drop.classList.contains('is-open'));
    });

    document.addEventListener('click', (e) => {
      if (drop.contains(e.target) || dropTrigger.contains(e.target)) return;
      setDropOpen(false);
    });

    window.addEventListener('resize', () => {
      if (drop.classList.contains('is-open')) placeDrop();
    });
    window.addEventListener('scroll', () => {
      if (drop.classList.contains('is-open') && !mobile()) placeDrop();
    }, { passive: true });
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      setDropOpen(false);
      setMenuOpen(false);
    }
  });
})();
