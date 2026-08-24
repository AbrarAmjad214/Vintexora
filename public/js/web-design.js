const revealEls = document.querySelectorAll('.reveal');
const io = new IntersectionObserver((entries)=>{
  entries.forEach(e=>{
    if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target);}
  });
},{threshold:0.12});
revealEls.forEach(el=>io.observe(el));

document.querySelectorAll('[data-stagger]').forEach((parent)=>{
  [...parent.children].forEach((child, i)=>{
    child.style.setProperty('--i', i);
    child.classList.add('reveal');
    io.observe(child);
  });
});

const steps = document.querySelectorAll('.step-flow .step');
if (steps.length) {
  const flow = steps[0].parentElement;
  let i = 0;
  const tick = () => {
    steps.forEach((s) => s.classList.remove('is-on'));
    steps[i].classList.add('is-on');
    i = (i + 1) % steps.length;
  };
  tick();
  const flowIo = new IntersectionObserver((entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        if (!flow.dataset.playing) {
          flow.dataset.playing = '1';
          flow._timer = setInterval(tick, 1200);
        }
      } else {
        clearInterval(flow._timer);
        flow.dataset.playing = '';
      }
    });
  }, { threshold: 0.25 });
  flowIo.observe(flow);
}
