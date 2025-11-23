<?php include 'components/header.php'; ?>

<!-- HERO SERVIÇOS -->
<section class="relative pt-32 pb-20 overflow-hidden">
  <div class="absolute inset-0 -z-10">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-purple-950/30 to-transparent"></div>
  </div>

  <div class="text-center px-8 max-w-7xl mx-auto">
    <h1 class="text-6xl md:text-8xl lg:text-9xl font-black mb-8 opacity-0 translate-y-32">
      Nossos <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 animate-gradient">Serviços</span>
    </h1>
    <p class="text-xl md:text-3xl text-gray-300 max-w-4xl mx-auto opacity-0 translate-y-32">
      Tudo o que você precisa para transformar sua ideia em um software de sucesso.
    </p>
  </div>
</section>

<!-- GRID DE SERVIÇOS -->
<main class="px-8 pb-32">
  <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-12">

    <!-- SERVIÇO 1 – DESENVOLVIMENTO FULL STACK -->
    <div class="service-card group glass rounded-3xl p-10 hover:-translate-y-6 transition-all duration-500 opacity-0 translate-y-40">
      <div class="w-20 h-20 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl flex items-center justify-center mb-8 shadow-xl group-hover:scale-110 transition">
        <i data-lucide="code-2" class="w-10 h-10 text-white"></i>
      </div>
      <h3 class="text-3xl font-black mb-6">Desenvolvimento Full Stack</h3>
      <p class="text-gray-300 text-lg leading-relaxed mb-8">
        Aplicações web, mobile e desktop com as tecnologias mais modernas: React, Next.js, Node.js, Laravel, Flutter, PHP 8+, bancos SQL/NoSQL e muito mais.
      </p>
      <ul class="space-y-4 text-gray-400">
        <li class="flex items-center gap-3"><i data-lucide="check" class="w-5 h-5 text-cyan-400"></i> APIs REST & GraphQL</li>
        <li class="flex items-center gap-3"><i data-lucide="check" class="w-5 h-5 text-cyan-400"></i> Progressive Web Apps (PWA)</li>
        <li class="flex items-center gap-3"><i data-lucide="check" class="w-5 h-5 text-cyan-400"></i> Integração com IA e automação</li>
        <li class="flex items-center gap-3"><i data-lucide="check" class="w-5 h-5 text-cyan-400"></i> Deploy automático e escalável</li>
      </ul>
    </div>

    <!-- SERVIÇO 2 – SISTEMAS SOB MEDIDA -->
    <div class="service-card group glass rounded-3xl p-10 hover:-translate-y-6 transition-all duration-500 opacity-0 translate-y-40" style="animation-delay: 0.2s">
      <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-8 shadow-xl group-hover:scale-110 transition">
        <i data-lucide="layout-dashboard" class="w-10 h-10 text-white"></i>
      </div>
      <h3 class="text-3xl font-black mb-6">Sistemas Sob Medida</h3>
      <p class="text-gray-300 text-lg leading-relaxed mb-8">
        ERP, CRM, gestão financeira, controle de estoque, portais internos, dashboards analíticos — tudo 100% personalizado para o seu negócio.
      </p>
      <ul class="space-y-4 text-gray-400">
        <li class="flex items-center gap-3"><i data-lucide="check" class="w-5 h-5 text-purple-400"></i> Totalmente escalável</li>
        <li class="flex items-center gap-3"><i data-lucide="check" class="w-5 h-5 text-purple-400"></i> Multiplataforma (web + mobile)</li>
        <li class="flex items-center gap-3"><i data-lucide="check" class="w-5 h-5 text-purple-400"></i> Integrações com ferramentas que você já usa</li>
        <li class="flex items-center gap-3"><i data-lucide="check" class="w-5 h-5 text-purple-400"></i> Suporte 24/7 incluso</li>
      </ul>
    </div>

    <!-- SERVIÇO 3 – CONSULTORIA & PERFORMANCE -->
    <div class="service-card group glass rounded-3xl p-10 hover:-translate-y-6 transition-all duration-500 opacity-0 translate-y-40" style="animation-delay: 0.4s">
      <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-8 shadow-xl group-hover:scale-110 transition">
        <i data-lucide="rocket" class="w-10 h-10 text-white"></i>
      </div>
      <h3 class="text-3xl font-black mb-6">Consultoria & Performance</h3>
      <p class="text-gray-300 text-lg leading-relaxed mb-8">
        Auditoria técnica, otimização de velocidade (Core Web Vitals 100), SEO técnico, migração para cloud e modernização de sistemas legados.
      </p>
      <ul class="space-y-4 text-gray-400">
        <li class="flex items-center gap-3"><i data-lucide="check" class="w-5 h-5 text-green-400"></i> +95 no Google Lighthouse</li>
        <li class="flex items-center gap-3"><i data-lucide="check" class="w-5 h-5 text-green-400"></i> Redução de custos de servidor</li>
        <li class="flex items-center gap-3"><i data-lucide="check" class="w-5 h-5 text-green-400"></i> Estratégia digital completa</li>
        <li class="flex items-center gap-3"><i data-lucide="check" class="w-5 h-5 text-green-400"></i> Treinamento da sua equipe</li>
      </ul>
    </div>

  </div>

  <!-- CALL TO ACTION FINAL -->
  <div class="text-center mt-32">
    <h2 class="text-5xl md:text-7xl font-black mb-12 opacity-0 translate-y-32">
      Pronto para o próximo nível?
    </h2>
    <a href="feedback.php" class="inline-flex items-center gap-5 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold text-2xl px-20 py-9 rounded-full shadow-2xl hover:shadow-cyan-500/50 hover:-translate-y-3 transition-all duration-500 group opacity-0 translate-y-32">
      Iniciar Projeto Agora
      <i data-lucide="arrow-right" class="w-9 h-9 group-hover:translate-x-5 transition"></i>
    </a>
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
  const lenis = new Lenis({ duration: 1.8, easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)) });
  lenis.on('scroll', ScrollTrigger.update);
  gsap.ticker.add(time => lenis.raf(time * 1000));

  // Animações de entrada
  gsap.timeline({ defaults: { ease: "power4.out" } })
    .to("h1, p", { y: 0, opacity: 1, duration: 1.6, stagger: 0.2 })
    .to(".service-card", { y: 0, opacity: 1, duration: 1.4, stagger: 0.2 }, "-=1")
    .to("h2, a", { y: 0, opacity: 1, duration: 1.4, stagger: 0.2 }, "-=0.8");
});
</script>

<style>
  @keyframes gradient { 0%,100% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } }
  .animate-gradient { background-size: 300% 300%; animation: gradient 12s ease infinite; }
</style>
