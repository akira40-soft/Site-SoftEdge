<?php include 'components/header.php'; ?>

<!-- HERO PRINCIPAL COM PARALLAX E ANIMAÇÃO ÉPICA -->
<main class="relative min-h-screen flex items-center justify-center overflow-hidden">
  
  <!-- Fundo parallax com gradiente + noise -->
  <div class="absolute inset-0 -z-10">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-purple-950 to-slate-950"></div>
    <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-10 mix-blend-overlay"></div>
  </div>

  <!-- Conteúdo Hero -->
  <div class="relative text-center px-8 max-w-7xl mx-auto">
    
    <!-- Título principal com animação escalonada + gradiente animado -->
    <h1 class="hero-title text-6xl md:text-8xl lg:text-9xl font-black leading-tight mb-10 opacity-0">
      Seu <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 animate-gradient">software</span>,<br>
      nosso <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 animate-gradient">objetivo</span>.
    </h1>

    <p class="hero-subtitle text-xl md:text-3xl lg:text-4xl text-gray-300 mb-16 max-w-4xl mx-auto opacity-0 leading-relaxed">
      Soluções digitais sob medida com design impactante, código limpo e performance extrema.
    </p>

    <!-- Botão CTA com glow 3D + seta animada -->
    <div class="opacity-0 hero-cta">
      <a href="feedback.php" class="group relative inline-flex items-center gap-5 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold text-xl md:text-2xl px-16 py-8 rounded-full shadow-2xl hover:shadow-cyan-500/30 transform hover:-translate-y-3 transition-all duration-500">
        Começar Projeto Agora
        <i data-lucide="arrow-right" class="w-9 h-9 group-hover:translate-x-4 transition-transform duration-300"></i>
        
        <!-- Glow pulsante -->
        <span class="absolute inset-0 rounded-full bg-gradient-to-r from-cyan-500 to-blue-600 blur-2xl opacity-60 group-hover:opacity-80 animate-pulse"></span>
      </a>
    </div>

    <!-- Scroll indicator -->
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
// ANIMAÇÕES HERO + SCROLL LUXUOSO
document.addEventListener("DOMContentLoaded", () => {
  lucide.createIcons();

  // Scroll ultra suave (melhor que butter)
  const lenis = new Lenis({
    duration: 1.8,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smoothWheel: true,
    smoothTouch: true,
  });
  lenis.on('scroll', ScrollTrigger.update);
  gsap.ticker.add((time) => lenis.raf(time * 1000));

  // Sequência de animação perfeita
  const tl = gsap.timeline();

  tl.fromTo(".hero-title", 
    { y: 200, opacity: 0 },
    { y: 0, opacity: 1, duration: 1.8, ease: "power4.out" }
  )
  .fromTo(".hero-subtitle", 
    { y: 120, opacity: 0 },
    { y: 0, opacity: 1, duration: 1.4, ease: "power3.out" }, "-=1.2"
  )
  .fromTo(".hero-cta", 
    { y: 100, opacity: 0, scale: 0.8 },
    { y: 0, opacity: 1, scale: 1, duration: 1.4, ease: "elastic.out(1,0.5)" }, "-=1"
  )
  .fromTo("i[data-lucide='chevron-down']", 
    { y: -30, opacity: 0 },
    { y: 0, opacity: 0.4, duration: 1, repeat: -1, yoyo: true }, "-=0.8"
  );

  // Parallax suave no fundo
  gsap.to("main > div:first-child", {
    yPercent: -40,
    ease: "none",
    scrollTrigger: {
      trigger: "main",
      start: "top top",
      end: "bottom top",
      scrub: 1
    }
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
