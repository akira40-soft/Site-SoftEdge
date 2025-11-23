<!-- components/header.php -->
<header class="fixed top-0 w-full z-50 backdrop-blur-xl bg-black/20 border-b border-white/10">
  <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
    <a href="index.php" class="flex items-center space-x-4 group">
      <div class="w-12 h-12 rounded-full overflow-hidden bg-gradient-to-br from-cyan-400 to-blue-600 p-1 group-hover:scale-110 transition">
        <img src="assets/logo.png" alt="SoftEdge" class="w-full h-full object-cover rounded-full bg-white">
      </div>
      <span class="text-2xl font-bold text-white">SoftEdge</span>
    </a>

    <nav class="hidden lg:flex items-center space-x-12">
      <a href="index.php" class="text-white hover:text-cyan-400 transition font-medium">Início</a>
      
      <div class="relative group">
        <button class="text-white hover:text-cyan-400 transition flex items-center gap-2 font-medium">
          Empresa <i data-lucide="chevron-down" class="w-5 h-5"></i>
        </button>
        <div class="absolute top-full left-0 mt-4 w-60 bg-black/40 backdrop-blur-2xl rounded-2xl border border-white/10 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
          <a href="sobre.php" class="block px-8 py-5 text-white hover:bg-white/10 rounded-2xl transition">Sobre nós</a>
          <a href="projetos.php" class="block px-8 py-5 text-white hover:bg-white/10 rounded-2xl transition">Projetos</a>
        </div>
      </div>

      <a href="servicos.php" class="text-white hover:text-cyan-400 transition font-medium">Serviços</a>
      <a href="feedback.php" class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-10 py-4 rounded-full font-bold hover:scale-105 transition shadow-lg">
        Contato
      </a>
    </nav>

    <button id="mobile-menu-btn" class="lg:hidden text-white">
      <i data-lucide="menu" class="w-8 h-8"></i>
    </button>
  </div>
</header>
