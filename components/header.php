<!-- components/header.php -->
<header class="fixed inset-x-0 top-0 z-50 backdrop-blur-2xl bg-black/50 border-b border-white/10 transition-all duration-400">
  <div class="max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">

    <!-- LOGO + NOME -->
    <a href="index.php" class="flex items-center space-x-4 group">
      <div class="w-14 h-14 rounded-full overflow-hidden bg-gradient-to-br from-cyan-400 to-blue-600 p-1.5 group-hover:scale-110 transition-transform duration-300 shadow-2xl">
        <img src="assets/logo.jpeg" alt="SoftEdge" class="w-full h-full object-cover rounded-full bg-white/90">
      </div>
      <span class="text-2xl font-black tracking-tight text-white">SoftEdge</span>
    </a>

    <!-- MENU DESKTOP -->
    <nav class="hidden lg:flex items-center space-x-10 text-lg">
      <a href="index.php" class="text-white/90 hover:text-cyan-400 font-medium transition">Início</a>

      <!-- DROPDOWN EMPRESA -->
      <div class="relative group">
        <button class="flex items-center gap-2 text-white/90 hover:text-cyan-400 font-medium transition">
          Empresa
          <i data-lucide="chevron-down" class="w-5 h-5 transition-transform group-hover:rotate-180"></i>
        </button>

        <div class="absolute top-full left-1/2 -translate-x-1/2 mt-6 w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-400 ease-out pointer-events-none group-hover:pointer-events-auto">
          <div class="bg-black/80 backdrop-blur-2xl rounded-2xl border border-white/10 shadow-2xl overflow-hidden">
            <a href="sobre.php" class="block px-8 py-5 text-white hover:bg-white/10 transition flex items-center gap-3">
              <i data-lucide="users" class="w-5 h-5"></i> Sobre nós
            </a>
            <a href="projetos.php" class="block px-8 py-5 text-white hover:bg-white/10 transition flex items-center gap-3">
              <i data-lucide="folder-open" class="w-5 h-5"></i> Projetos
            </a>
          </div>
        </div>
      </div>

      <a href="servicos.php" class="text-white/90 hover:text-cyan-400 font-medium transition">Serviços</a>

      <!-- BOTÃO CONTATO -->
      <a href="feedback.php" class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-10 py-4 rounded-full font-bold hover:scale-105 hover:shadow-2xl transition-all duration-300 shadow-lg">
        Contato
      </a>
    </nav>

    <!-- MENU MOBILE BUTTON -->
    <button id="mobile-menu-btn" class="lg:hidden text-white p-2">
      <i data-lucide="menu" class="w-8 h-8"></i>
    </button>
  </div>

  <!-- MENU MOBILE (ESCONDIDO POR PADRÃO) -->
  <div id="mobile-nav" class="lg:hidden hidden absolute top-full left-0 w-full bg-black/95 backdrop-blur-2xl border-t border-white/10">
    <nav class="flex flex-col py-8 px-10 space-y-8 text-2xl font-medium">
      <a href="index.php" class="text-white hover:text-cyan-400 transition">Início</a>
      <a href="sobre.php" class="text-white hover:text-cyan-400 transition">Sobre nós</a>
      <a href="projetos.php" class="text-white hover:text-cyan-400 transition">Projetos</a>
      <a href="servicos.php" class="text-white hover:text-cyan-400 transition">Serviços</a>
      <a href="feedback.php" class="text-cyan-400 font-bold">Contato →</a>
    </nav>
  </div>
</header>

<!-- SCRIPT MENU MOBILE -->
<script>
  document.getElementById('mobile-menu-btn')?.addEventListener('click', () => {
    document.getElementById('mobile-nav').classList.toggle('hidden');
  });
</script>
