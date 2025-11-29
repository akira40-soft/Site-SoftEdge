<?php include 'components/header.php'; ?>

<!-- HERO PRINCIPAL -->
<main class="relative min-h-screen flex items-center justify-center overflow-hidden">
  <!-- Background -->
  <div class="absolute inset-0 -z-10">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950"></div>
    <div class="absolute inset-0 opacity-30">
      <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl animate-pulse"></div>
      <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-purple-500/10 rounded-full blur-3xl"></div>
    </div>
  </div>

  <!-- Content -->
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center space-y-8 lg:space-y-12">
      
      <!-- Badge -->
      <div class="inline-block px-4 py-2 bg-cyan-500/10 rounded-full border border-cyan-500/20 backdrop-blur-sm">
        <span class="text-cyan-400 text-xs sm:text-sm font-semibold uppercase tracking-wider">
          🚀 Software Development
        </span>
      </div>

      <!-- Main Heading -->
      <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold leading-tight">
        <span class="block text-white mb-2">Seu</span>
        <span class="block bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-500 bg-clip-text text-transparent mb-2">
          software
        </span>
        <span class="block text-white mb-2">nosso</span>
        <span class="block bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-500 bg-clip-text text-transparent">
          objetivo
        </span>
      </h1>

      <!-- Subtitle -->
      <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed px-4">
        Soluções digitais sob medida com design impactante, código limpo e performance extrema.
      </p>

      <!-- CTA Buttons -->
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6 pt-4">
        <a href="feedback.php" 
           class="group relative inline-flex items-center justify-center gap-3 w-full sm:w-auto bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-semibold text-base sm:text-lg px-8 sm:px-12 py-4 sm:py-5 rounded-full shadow-lg hover:shadow-cyan-500/50 hover:scale-105 transition-all duration-300">
          <span>Começar Projeto</span>
          <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
        </a>
        
        <a href="projetos.php" 
           class="group inline-flex items-center justify-center gap-3 w-full sm:w-auto bg-slate-800/50 hover:bg-slate-700/50 backdrop-blur-xl border border-white/10 text-white font-semibold text-base sm:text-lg px-8 sm:px-12 py-4 sm:py-5 rounded-full transition-all duration-300">
          <span>Ver Projetos</span>
          <i data-lucide="folder-open" class="w-5 h-5 group-hover:scale-110 transition-transform"></i>
        </a>
      </div>

      <!-- Stats -->
      <div class="grid grid-cols-3 gap-4 sm:gap-8 max-w-3xl mx-auto pt-8 lg:pt-16 px-4">
        <div class="text-center">
          <div class="text-2xl sm:text-3xl md:text-4xl font-bold bg-gradient-to-br from-cyan-400 to-cyan-600 bg-clip-text text-transparent mb-1 sm:mb-2">
            70+
          </div>
          <p class="text-xs sm:text-sm text-gray-400">Projetos</p>
        </div>
        <div class="text-center">
          <div class="text-2xl sm:text-3xl md:text-4xl font-bold bg-gradient-to-br from-blue-400 to-blue-600 bg-clip-text text-transparent mb-1 sm:mb-2">
            4.9★
          </div>
          <p class="text-xs sm:text-sm text-gray-400">Satisfação</p>
        </div>
        <div class="text-center">
          <div class="text-2xl sm:text-3xl md:text-4xl font-bold bg-gradient-to-br from-purple-400 to-purple-600 bg-clip-text text-transparent mb-1 sm:mb-2">
            24/7
          </div>
          <p class="text-xs sm:text-sm text-gray-400">Suporte</p>
        </div>
      </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 hidden lg:block">
      <div class="flex flex-col items-center gap-2 animate-bounce">
        <span class="text-xs text-gray-400 uppercase tracking-wider">Scroll</span>
        <i data-lucide="chevron-down" class="w-6 h-6 text-gray-400"></i>
      </div>
    </div>
  </div>
</main>

<!-- SEÇÃO DE DESTAQUES -->
<section class="relative py-20 lg:py-32 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Section Header -->
    <div class="text-center mb-16 lg:mb-20">
      <div class="inline-block px-4 py-2 bg-cyan-500/10 rounded-full border border-cyan-500/20 mb-6">
        <span class="text-cyan-400 text-sm font-semibold uppercase tracking-wider">Por que escolher a SoftEdge</span>
      </div>
      <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
        Desenvolvemos com
        <span class="block bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
          excelência
        </span>
      </h2>
      <p class="text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto">
        Transformamos ideias em soluções digitais que fazem a diferença
      </p>
    </div>

    <!-- Features Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
      
      <!-- Feature 1 -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="relative bg-slate-900/60 backdrop-blur-xl border border-white/5 rounded-2xl p-8 transition-all duration-500 hover:border-cyan-500/30 h-full">
          <div class="w-14 h-14 bg-cyan-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <i data-lucide="code-2" class="w-7 h-7 text-cyan-400"></i>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Código Limpo</h3>
          <p class="text-gray-400 leading-relaxed">
            Desenvolvemos seguindo as melhores práticas e padrões da indústria para garantir manutenibilidade e escalabilidade.
          </p>
        </div>
      </div>

      <!-- Feature 2 -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="relative bg-slate-900/60 backdrop-blur-xl border border-white/5 rounded-2xl p-8 transition-all duration-500 hover:border-blue-500/30 h-full">
          <div class="w-14 h-14 bg-blue-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <i data-lucide="zap" class="w-7 h-7 text-blue-400"></i>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Performance</h3>
          <p class="text-gray-400 leading-relaxed">
            Otimizamos cada linha de código para entregar aplicações rápidas e eficientes que impressionam os usuários.
          </p>
        </div>
      </div>

      <!-- Feature 3 -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="relative bg-slate-900/60 backdrop-blur-xl border border-white/5 rounded-2xl p-8 transition-all duration-500 hover:border-purple-500/30 h-full">
          <div class="w-14 h-14 bg-purple-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <i data-lucide="palette" class="w-7 h-7 text-purple-400"></i>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Design Impactante</h3>
          <p class="text-gray-400 leading-relaxed">
            Criamos interfaces modernas e intuitivas que proporcionam experiências memoráveis aos usuários.
          </p>
        </div>
      </div>

      <!-- Feature 4 -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="relative bg-slate-900/60 backdrop-blur-xl border border-white/5 rounded-2xl p-8 transition-all duration-500 hover:border-green-500/30 h-full">
          <div class="w-14 h-14 bg-green-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <i data-lucide="shield-check" class="w-7 h-7 text-green-400"></i>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Segurança</h3>
          <p class="text-gray-400 leading-relaxed">
            Implementamos as melhores práticas de segurança para proteger seus dados e os de seus usuários.
          </p>
        </div>
      </div>

      <!-- Feature 5 -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-red-500/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="relative bg-slate-900/60 backdrop-blur-xl border border-white/5 rounded-2xl p-8 transition-all duration-500 hover:border-orange-500/30 h-full">
          <div class="w-14 h-14 bg-orange-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <i data-lucide="rocket" class="w-7 h-7 text-orange-400"></i>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Entrega Rápida</h3>
          <p class="text-gray-400 leading-relaxed">
            Trabalhamos com metodologias ágeis para entregar seu projeto dentro do prazo e do orçamento.
          </p>
        </div>
      </div>

      <!-- Feature 6 -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-br from-pink-500/20 to-rose-500/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="relative bg-slate-900/60 backdrop-blur-xl border border-white/5 rounded-2xl p-8 transition-all duration-500 hover:border-pink-500/30 h-full">
          <div class="w-14 h-14 bg-pink-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <i data-lucide="headphones" class="w-7 h-7 text-pink-400"></i>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Suporte 24/7</h3>
          <p class="text-gray-400 leading-relaxed">
            Nossa equipe está sempre disponível para ajudar você a resolver qualquer questão ou dúvida.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA FINAL -->
<section class="relative py-20 lg:py-32">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative">
      <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 via-blue-500/10 to-purple-500/10 rounded-3xl blur-3xl"></div>
      
      <div class="relative bg-slate-900/60 backdrop-blur-xl border border-white/10 rounded-3xl p-8 sm:p-12 lg:p-16 text-center">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
          Pronto para transformar
          <span class="block bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
            sua ideia em realidade?
          </span>
        </h2>
        
        <p class="text-base sm:text-lg text-gray-300 max-w-2xl mx-auto mb-8 lg:mb-10">
          Entre em contato conosco hoje mesmo e descubra como podemos ajudar seu negócio a crescer no mundo digital.
        </p>
        
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="feedback.php" 
             class="inline-flex items-center justify-center gap-3 w-full sm:w-auto bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-semibold text-lg px-10 py-4 rounded-full shadow-lg hover:shadow-cyan-500/50 hover:scale-105 transition-all duration-300 group">
            Falar com a gente
            <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
          </a>
          
          <a href="https://whatsapp.com/channel/0029VawQLpGHltY2Y87fR83m" 
             target="_blank"
             rel="noopener noreferrer"
             class="inline-flex items-center justify-center gap-3 w-full sm:w-auto bg-green-600/20 hover:bg-green-600/30 border border-green-500/30 text-white font-semibold text-lg px-10 py-4 rounded-full transition-all duration-300">
            <i data-lucide="message-circle" class="w-5 h-5"></i>
            WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'components/footer.php'; ?>

<!-- SCRIPTS -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Initialize Lucide icons
    lucide.createIcons();

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Fade in animations on scroll
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, observerOptions);

    // Observe sections and cards
    document.querySelectorAll('section, .group').forEach((el, index) => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
      observer.observe(el);
    });

    // Parallax effect for background
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const parallaxElements = document.querySelectorAll('.absolute.inset-0.-z-10 > div');
      parallaxElements.forEach((el, index) => {
        const speed = 0.5 + (index * 0.1);
        el.style.transform = `translateY(${scrolled * speed}px)`;
      });
    });
  });
</script>

<style>
  /* Smooth scrolling */
  html {
    scroll-behavior: smooth;
  }

  /* Gradient animation */
  @keyframes gradient-shift {
    0%, 100% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
  }

  .bg-gradient-to-r,
  .bg-gradient-to-br {
    background-size: 200% 200%;
    animation: gradient-shift 8s ease infinite;
  }

  /* Pulse animation for background orbs */
  @keyframes pulse-slow {
    0%, 100% {
      opacity: 0.3;
      transform: scale(1);
    }
    50% {
      opacity: 0.5;
      transform: scale(1.1);
    }
  }

  .animate-pulse {
    animation: pulse-slow 8s ease-in-out infinite;
  }

  /* Custom scrollbar */
  ::-webkit-scrollbar {
    width: 10px;
  }

  ::-webkit-scrollbar-track {
    background: #0f172a;
  }

  ::-webkit-scrollbar-thumb {
    background: linear-gradient(180deg, #06b6d4, #3b82f6);
    border-radius: 5px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(180deg, #0891b2, #2563eb);
  }
</style>
