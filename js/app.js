// js/app.js
document.addEventListener("DOMContentLoaded", () => {
  // Cria ícones Lucide
  lucide.createIcons();

  // SCROLL SUAVE COM LENIS (o melhor do mundo)
  const lenis = new Lenis({
    duration: 1.6,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smoothWheel: true,
    smoothTouch: true,
  });

  lenis.on("scroll", ScrollTrigger.update);
  gsap.ticker.add((time) => lenis.raf(time * 1000));
  gsap.ticker.lagSmoothing(1000, 33);

  // ANIMAÇÕES DE ENTRADA (para elementos com classe .fade-in)
  gsap.utils.toArray(".fade-in").forEach((el, i) => {
    gsap.fromTo(
      el,
      { y: 120, opacity: 0 },
      {
        y: 0,
        opacity: 1,
        duration: 1.4,
        ease: "power4.out",
        delay: i * 0.1,
        scrollTrigger: {
          trigger: el,
          start: "top 88%",
          toggleActions: "play none none reverse",
        },
      }
    );
  });

  // MICRO-INTERAÇÕES NOS BOTÕES GRADIENTE
  gsap.utils.toArray("a[href='feedback.php']").forEach((btn) => {
    btn.addEventListener("mouseenter", () => {
      gsap.to(btn, { scale: 1.05, duration: 0.4, ease: "power2.out" });
    });
    btn.addEventListener("mouseleave", () => {
      gsap.to(btn, { scale: 1, duration: 0.4, ease: "power2.out" });
    });
  });

  // DARK MODE TOGGLE (opcional, bonito e funcional)
  const darkToggle = document.createElement("button");
  darkToggle.innerHTML = '<i data-lucide="moon" class="w-7 h-7"></i>';
  darkToggle.className =
    "fixed bottom-8 right-8 z-50 glass p-5 rounded-full shadow-2xl hover:scale-110 transition-all duration-300 border border-white/20 backdrop-blur-xl";
  darkToggle.setAttribute("aria-label", "Alternar modo escuro");
  document.body.appendChild(darkToggle);

  darkToggle.addEventListener("click", () => {
    document.documentElement.classList.toggle("dark");
    const isDark = document.documentElement.classList.contains("dark");
    darkToggle.innerHTML = isDark
      ? '<i data-lucide="sun" class="w-7 h-7"></i>'
      : '<i data-lucide="moon" class="w-7 h-7"></i>';
    lucide.createIcons();
  });

  // Verifica preferência salva
  if (localStorage.getItem("theme") === "dark" || 
     (!localStorage.getItem("theme") && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
    document.documentElement.classList.add("dark");
    darkToggle.innerHTML = '<i data-lucide="sun" class="w-7 h-7"></i>';
    lucide.createIcons();
  }
});
