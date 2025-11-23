<?php include 'components/header.php'; ?>

<!-- HERO PROJETOS -->
<section class="relative pt-32 pb-20 overflow-hidden">
  <div class="absolute inset-0 -z-10">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-purple-950/30 to-transparent"></div>
  </div>

  <div class="text-center px-8 max-w-7xl mx-auto">
    <h1 class="text-6xl md:text-8xl lg:text-9xl font-black mb-8 opacity-0 translate-y-32">
      Nossos <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 animate-gradient">Projetos</span>
    </h1>
    <p class="text-xl md:text-3xl text-gray-300 max-w-4xl mx-auto opacity-0 translate-y-32">
      Algumas das soluções que já transformaram negócios reais.
    </p>
  </div>
</section>

<main class="px-8 pb-32">
  <div class="max-w-7xl mx-auto">

    <!-- GRID DE PROJETOS -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">

      <!-- PROJETO 1 -->
      <div class="project-card group rounded-3xl overflow-hidden glass hover:-translate-y-6 transition-all duration-500 opacity-0 translate-y-40">
        <div class="relative h-80 bg-gradient-to-br from-cyan-600/30 to-blue-600/30">
          <div class="absolute inset-0 bg-black/40 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
            <div class="text-center">
              <h3 class="text-3xl font-black mb-4">Sistema de Gestão Empresarial</h3>
              <p class="text-lg text-gray-300 mb-8">ERP completo com controle financeiro, estoque e CRM</p>
              <div class="flex gap-4 justify-center">
                <span class="px-6 py-3 bg-cyan-500/20 rounded-full text-cyan-400 font-medium">Laravel</span>
                <span class="px-6 py-3 bg-blue-500/20 rounded-full text-blue-400 font-medium">Vue.js</span>
                <span class="px-6 py-3 bg-purple-500/20 rounded-full text-purple-400 font-medium">MySQL</span>
              </div>
            </div>
          </div>
          <div class="absolute bottom-6 left-6">
            <h3 class="text-3xl font-black">Gestão Total</h3>
            <p class="text-gray-300">ERP Sob Medida</p>
          </div>
        </div>
      </div>

      <!-- PROJETO 2 -->
      <div class="project-card group rounded-3xl overflow-hidden glass hover:-translate-y-6 transition-all duration-500 opacity-0 translate-y-40" style="animation-delay: 0.2s">
        <div class="relative h-80 bg-gradient-to-br from-purple-600/30 to-pink-600/30">
          <div class="absolute inset-0 bg-black/40 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
            <div class="text-center">
              <h3 class="text-3xl font-black mb-4">Plataforma E-commerce</h3>
              <p class="text-lg text-gray-300 mb-8">Loja virtual com checkout rápido e painel administrativo</p>
              <div class="flex gap-4 justify-center flex-wrap">
                <span class="px-6 py-3 bg-purple-500/20 rounded-full text-purple-400 font-medium">Next.js</span>
                <span class="px-6 py-3 bg-pink-500/20 rounded-full text-pink-400 font-medium">Stripe</span>
                <span class="px-6 py-3 bg-green-500/20 rounded-full text-green-400 font-medium">Prisma</span>
              </div>
            </div>
          </div>
          <div class="absolute bottom-6 left-6">
            <h3 class="text-3xl font-black">ShopFast</h3>
            <p class="text-gray-300">E-commerce Moderno</p>
          </div>
        </div>
      </div>

      <!-- PROJETO 3 -->
      <div class="project-card group rounded-3xl overflow-hidden glass hover:-translate-y-6 transition-all duration-500 opacity-0 translate-y-40" style="animation-delay: 0.4s">
        <div class="relative h-80 bg-gradient-to-br from-green-600/30 to-emerald-600/30">
          <div class="absolute inset-0 bg-black/40 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
            <div class="text-center">
              <h3 class="text-3xl font-black mb-4">Dashboard Analytics</h3>
              <p class="text-lg text-gray-300 mb-8">Painel em tempo real com IA e previsões</p>
              <div class="flex gap-4 justify-center flex-wrap">
                <span class="px-6 py-3 bg-green-500/20 rounded-full text-green-400 font-medium">React</span>
                <span class="px-6 py-3 bg-yellow-500/20 rounded-full text-yellow-400 font-medium">Python</span>
                <span class="px-6 py-3 bg-red-500/20 rounded-full text-red-400 font-medium">Redis</span>
              </div>
            </div>
          </div>
          <div class="absolute bottom-6 left-6">
            <h3 class="text-3xl font-black">DataMind</h3>
            <p class="text-gray-300">Business Intelligence</p>
          </div>
        </div>
      </div>

      <!-- MAIS PROJETOS (você pode duplicar quantos quiser) -->
      <div class="project-card group rounded-3xl overflow-hidden glass hover:-translate-y-6 transition-all duration-500 opacity-0 translate-y-40" style="animation-delay: 0.6s">
        <div class="relative h-80 bg-gradient-to-br from-orange-600/30 to-red-600/30">
          <div class="absolute inset-0 bg-black/40 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
            <div class="text-center">
              <h3 class="text-3xl font-black mb-4">App Mobile Híbrido</h3>
              <p class="text-lg text-gray-300 mb-8">Aplicativo para iOS e Android com sincronização em tempo real</p>
              <div class="flex gap-4 justify-center">
                <span class="px-6 py-3 bg-orange-500/20 rounded-full text-orange-400 font-medium">Flutter</span>
                <span class="px-6 py-3 bg-blue-500/20 rounded-full text-blue-400 font-medium">Firebase</span>
              </div>
            </div>
          </div>
          <div class="absolute bottom-6 left-6">
            <h3 class="text-3xl font-black">ConnectPro</h3>
            <p class="text-gray-300">Aplicativo Mobile</p>
          </div>
        </div>
      </div>

      <!-- Adicione mais projetos aqui quando tiver -->
      <div class="col-span-full text-center py-20 opacity-0 translate-y-40" style="animation-delay: 0.8s">
        <p class="text-3xl font-bold text-gray-400 mb-8">E muitos outros em andamento...</p>
        <a href="feedback.php" class="inline-flex items-center gap-5 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold text-2xl px-20 py-9 rounded-full shadow-2xl hover:-translate-y-3 transition-all duration-500 group">
          Quer o seu projeto aqui?
          <i data-lucide="arrow-right" class="w-9 h-9 group-hover:translate-x-5 transition"></i>
        </a>
      </div>

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

  const lenis = new Lenis({ duration: 1.8, easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)) });
  lenis.on('scroll', ScrollTrigger.update);
  gsap.ticker.add(time => lenis.raf(time * 1000));

  gsap.timeline({ defaults: { ease: "power4.out" } })
    .to("h1, p", { y: 0, opacity: 1, duration: 1.6, stagger: 0.2 })
    .to(".project-card", { y: 0, opacity: 1, duration: 1.4, stagger: 0.15 }, "-=1");
});
</script>

<style>
  @keyframes gradient { 0%,100% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } }
  .animate-gradient { background-size: 300% 300%; animation: gradient 12s ease infinite; }
</style>
