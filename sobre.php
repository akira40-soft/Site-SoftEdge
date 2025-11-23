<?php include 'components/header.php'; ?>

<!-- HERO SOBRE -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
  <div class="absolute inset-0 -z-10">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900/50 to-slate-900"></div>
    <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-10"></div>
  </div>

  <div class="relative text-center px-8 max-w-7xl mx-auto">
    <h1 class="text-7xl md:text-9xl font-black leading-tight mb-8 opacity-0 translate-y-20">
      Do sonho<br>
      <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600">
        à realidade lógica
      </span>
    </h1>
    <p class="text-2xl md:text-4xl text-gray-300 max-w-4xl mx-auto opacity-0 translate-y-16">
      Nos começamos com uma ideia simples.<br>Hj criamos softwares que as pessoas amam usar.
    </p>
  </div>
</section>

<!-- CONTEÚDO PRINCIPAL -->
<main class="relative -mt-32 px-8 pb-32">
  <div class="max-w-7xl mx-auto">

    <!-- HISTÓRIA -->
    <div class="grid lg:grid-cols-2 gap-20 items-center mb-32">
      <div class="space-y-8 text-xl md:text-2xl leading-relaxed text-gray-200">
        <p class="opacity-0 translate-y-20" style="animation-delay: 0.2s">
          Tudo começou em <strong class="text-cyan-400">2023</strong>, quando quatro amigos decidiram que o mundo precisava de softwares mais <strong>humanos</strong>.
        </p>
        <p class="opacity-0 translate-y-20" style="animation-delay: 0.4s">
          <strong class="text-3xl font-bold text-white">Isaac Quarenta</strong> (CEO) uniu forças com os co-fundadores 
          <strong class="text-cyan-300">José Lopes</strong>, 
          <strong class="text-blue-300">Stefâncio Costa</strong> e 
          <strong class="text-purple-300">Tiago Rodrigues</strong>.
        </p>
        <p class="opacity-0 translate-y-20" style="animation-delay: 0.6s">
          Juntos, criaram a <strong class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600 text-4xl font-black">SoftEdge</strong> — uma empresa que transforma ideias em experiências digitais inesquecíveis.
        </p>
        <p class="text-3xl font-bold text-cyan-400 mt-10 opacity-0 translate-y-20" style="animation-delay: 0.8s">
          Nos começamos com um sonho.<br>
          Hoje desenvolvemos realidades lógicas e softwares mais amáveis.
        </p>
      </div>

      <!-- FOTO DA EQUIPE (opcional - substitua pela sua) -->
      <div class="opacity-0 translate-y-20" style="animation-delay: 0.5s">
        <div class="glass p-8 rounded-3xl shadow-2xl backdrop-blur-xl border border-white/10">
          <div class="bg-gray-800 border-2 border-dashed border-gray-600 rounded-2xl w-full h-96 flex items-center justify-center">
            <p class="text-gray-500 text-center">
              <i data-lucide="users" class="w-20 h-20 mx-auto mb-4"></i><br>
              Foto da equipe em breve :)
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- NÚMEROS IMPACTANTES -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-32">
      <div class="text-center glass p-10 rounded-3xl opacity-0 translate-y-20" style="animation-delay: 0.3s">
        <div class="text-6xl md:text-7xl font-black text-cyan-400 mb-4">70+</div>
        <p class="text-xl text-gray-300">Projetos entregues</p>
      </div>
      <div class="text-center glass p-10 rounded-3xl opacity-0 translate-y-20" style="animation-delay: 0.4s">
        <div class="text-6xl md:text-7xl font-black text-blue-400 mb-4">4.9★</div>
        <p class="text-xl text-gray-300">Satisfação média</p>
      </div>
      <div class="text-center glass p-10 rounded-3xl opacity-0 translate-y-20" style="animation-delay: 0.5s">
        <div class="text-6xl md:text-7xl font-black text-purple-400 mb-4">24/7</div>
        <p class="text-xl text-gray-300">Suporte dedicado</p>
      </div>
      <div class="text-center glass p-10 rounded-3xl opacity-0 translate-y-20" style="animation-delay: 0.6s">
        <div class="text-6xl md:text-7xl font-black text-green-400 mb-4">100%</div>
        <p class="text-xl text-gray-300">Código limpo</p>
      </div>
    </div>

    <!-- CALL TO ACTION FINAL -->
    <div class="text-center opacity-0 translate-y-20" style="animation-delay: 0.8s">
      <h2 class="text-5xl md:text-7xl font-black mb-10">
        Pronto para criar algo incrível juntos?
      </h2>
      <a href="feedback.php" class="inline-flex items-center gap-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold text-2xl px-16 py-8 rounded-full shadow-2xl hover:shadow-cyan-500/50 transform hover:-translate-y-2 transition-all duration-500 group">
        Falar com a gente
        <i data-lucide="arrow-right" class="w-8 h-8 group-hover:translate-x-4 transition"></i>
      </a>
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

  // Scroll suave
  const lenis = new Lenis({ duration: 1.6, easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)) });
  lenis.on('scroll', ScrollTrigger.update);
  gsap.ticker.add((time) => lenis.raf(time * 1000));

  // Animações de entrada com stagger
  gsap.utils.toArray("[class*='opacity-0']").forEach((el, i) => {
    gsap.to(el, {
      opacity: 1,
      y: 0,
      duration: 1.4,
      ease: "power4.out",
      delay: el.style.animationDelay ? parseFloat(el.style.animationDelay) : i * 0.15,
      scrollTrigger: {
        trigger: el,
        start: "top 85%",
      }
    });
  });

  // Parallax no hero
  gsap.to("section > div:first-child", {
    yPercent: -40,
    ease: "none",
    scrollTrigger: { trigger: "section", start: "top top", end: "bottom top", scrub: true }
  });
});
</script>
