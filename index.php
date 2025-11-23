<?php include 'components/header.php'; ?>

<!-- HERO PRINCIPAL – 100% SOFTEDGE, 100% LIMPO -->
<main class="relative min-h-screen flex items-center justify-center overflow-hidden">

  <!-- Fundo parallax + noise sutil -->
  <div class="absolute inset-0 -z-10">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-purple-950 to-slate-950"></div>
    <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-10 mix-blend-overlay"></div>
  </div>

  <div class="relative text-center px-8 max-w-7xl mx-auto">

    <!-- TÍTULO PRINCIPAL -->
    <h1 class="text-6xl md:text-8xl lg:text-9xl font-black leading-tight mb-10 opacity-0 translate-y-32">
      Seu <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 animate-gradient">software</span>,<br>
      nosso <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 animate-gradient">objetivo</span>.
    </h1>

    <!-- SUBTÍTULO -->
    <p class="text-xl md:text-3xl lg:text-4xl text-gray-300 mb-16 max-w-5xl mx-auto opacity-0 translate-y-32 leading-relaxed">
      Soluções digitais sob medida com design impactante, código limpo e performance extrema.
    </p>

    <!-- BOTÃO CTA ÉPICO -->
    <div class="opacity-0 translate-y-32">
      <a href="feedback.php" class="group relative inline-flex items-center gap-5 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold text-xl md:text-2xl px-20 py-9 rounded-full shadow-2xl hover:shadow-cyan-500/40 transform hover:-translate-y-3 transition-all duration-500">
        Começar Projeto Agora
        <i data-lucide="arrow-right" class="w-9 h-9 group-hover:translate-x-5 transition-transform duration-300"></i>
        <span class="absolute inset-0 rounded-full bg-gradient-to-r from-cyan-500 to-blue-600 blur-2xl opacity-60 group-hover:opacity-80 animate-pulse"></span>
      </a>
    </div>

    <!-- SCROLL INDICATOR -->
    <div class="absolute bottom-12 left-1/2 -translate-x-1/2 opacity-0">
      <i data-lucide="chevron-down" class="w-10 h-10 text-white/40 animate-bounce"></i>
    </div>
  </div>
</main>

<?php include 'components/footer.php'; ?>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
<script src="https://unpkg.com/lucide@latest"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {
  lucide.createIcons();

  // Scroll ultra suave
  const lenis = new Lenis({
    duration: 1.8,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smoothWheel: true,
    smoothTouch: true,
  });
  lenis.on('scroll', ScrollTrigger.update);
  gsap.ticker.add((time) => lenis.raf(time * 1000));

  // Animação de entrada perfeita
  gsap.timeline()
    .to("h1", { y: 0, opacity: 1, duration: 1.8, ease: "power4.out" })
    .to("p", { y: 0, opacity: 1, duration: 1.4, ease: "power3.out" }, "-=1.2")
    .to("a", { y: 0, opacity: 1, duration: 1.4, ease: "elastic.out(1,0.5)" }, "-=1")
    .to("i[data-lucide='chevron-down']", { opacity: 0.4, duration: 1, repeat: -1, yoyo: true });

  // Parallax fundo
  gsap.to("main > div:first-child", {
    yPercent: -40,
    ease: "none",
    scrollTrigger: { trigger: "main", start: "top top", end: "bottom top", scrub: 1 }
  });
});
</script>

<style>
  @keyframes gradient {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
  }
  .animate-gradient {
    background-size: 300% 300%;
    animation: gradient 12s ease infinite;
  }
</style>
