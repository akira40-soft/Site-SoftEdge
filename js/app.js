// js/app.js
document.addEventListener("DOMContentLoaded", () => {
  lucide.createIcons();

  // Dark mode toggle
  const toggle = document.createElement("button");
  toggle.innerHTML = '<i data-lucide="moon" class="w-6 h-6"></i>';
  toggle.className = "fixed bottom-8 right-8 z-50 glass p-4 rounded-full shadow-2xl hover:scale-110 transition";
  document.body.appendChild(toggle);
  toggle.addEventListener("click", () => {
    document.documentElement.classList.toggle("dark");
  });

  // Smooth scroll
  const lenis = new Lenis({ duration: 1.4 });
  lenis.on('scroll', ScrollTrigger.update);
  gsap.ticker.add((time) => lenis.raf(time * 1000));

  // Animações GSAP
  gsap.registerPlugin(ScrollTrigger);
  gsap.utils.toArray('.fade-in').forEach(el => {
    gsap.from(el, { y: 100, opacity: 0, duration: 1.2, ease: "elastic.out(1,0.3)", scrollTrigger: { trigger: el, start: "top 85%" } });
  });
});
