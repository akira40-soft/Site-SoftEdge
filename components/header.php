<!-- components/header.php -->
<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SoftEdge Corporation</title>

  <!-- FAVICON + PRÉVIA PERFEITA -->
  <link rel="icon" href="/assets/logo.jpeg" type="image/jpeg">
  <link rel="apple-touch-icon" href="/assets/logo.jpeg">
  <meta property="og:image" content="https://softedge-corporation.up.railway.app/assets/logo.jpeg" />
  <meta property="og:title" content="SoftEdge Corporation" />
  <meta name="twitter:image" content="https://softedge-corporation.up.railway.app/assets/logo.jpeg" />
  <meta name="theme-color" content="#06fcd8">

  <!-- Tailwind + CSS personalizado -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="/assets/css/style.css" rel="stylesheet">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-950 via-purple-950 to-black text-white antialiased">

<header class="fixed inset-x-0 top-0 z-50 backdrop-blur-3xl bg-black/70 border-b border-white/15">
  <div class="max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">
    
    <!-- LOGO -->
    <a href="index.php" class="flex items-center space-x-4 group">
      <div class="w-14 h-14 rounded-full overflow-hidden bg-gradient-to-br from-cyan-400 to-blue-600 p-1.5 group-hover:scale-110 transition-all duration-500 shadow-2xl ring-4 ring-cyan-400/30">
        <img src="/assets/logo.jpeg" alt="SoftEdge" class="w-full h-full object-cover rounded-full">
      </div>
      <span class="text-2xl md:text-3xl font-black tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-cyan-300 to-blue-500">
        SoftEdge
      </span>
    </a>

    <!-- MENU DESKTOP -->
    <nav class="hidden lg:flex items-center space-x-12 text-lg font-medium">
      <a href="index.php" class="text-white/90 hover:text-cyan-300 transition">Início</a>
      
      <!-- MENU EMPRESA COM SUBMENU QUE NÃO FECHA MAIS -->
      <div class="relative" id="empresa-dropdown">
        <button class="flex items-center gap-2 text-white/90 hover:text-cyan-300 transition focus:outline-none">
          Empresa
          <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300" id="chevron"></i>
        </button>

        <!-- SUBMENU PERMANENTE AO HOVER + CLICÁVEL -->
        <div class="absolute top-full left-1/2 -translate-x-1/2 mt-6 w-72 opacity-0 invisible pointer-events-none 
                    transition-all duration-500 ease-out
                    group-hover:opacity-100 group-hover:visible group-hover:pointer-events-auto
                    [&:hover]:opacity-100 [&:hover]:visible [&:hover]:pointer-events-auto
                    z-50" 
             id="submenu">
          <div class="bg-black/90 backdrop-blur-3xl rounded-3xl border border-white/20 shadow-2xl ring-4 ring-cyan-500/20 overflow-hidden">
            <a href="sobre.php" class="flex items-center gap-4 px-8 py-6 text-white hover:bg-white/10 transition">
              <i data-lucide="users" class="w-6 h-6"></i>
              <div>
                <div class="font-bold">Sobre nós</div>
                <div class="text-sm text-gray-400">Nossa história e equipe</div>
              </div>
            </a>
            <a href="projetos.php" class="flex items-center gap-4 px-8 py-6 text-white hover:bg-white/10 transition">
              <i data-lucide="folder-open" class="w-6 h-6"></i>
              <div>
                <div class="font-bold">Projetos</div>
                <div class="text-sm text-gray-400">O que já construímos</div>
              </div>
            </a>
          </div>
        </div>
      </div>

      <a href="servicos.php" class="text-white/90 hover:text-cyan-300 transition">Serviços</a>
      <a href="contato.php" class="bg-gradient-to-r from-cyan-500 to-blue-600 px-10 py-4 rounded-full font-bold hover:scale-110 hover:shadow-cyan-500/50 transition-all duration-500 shadow-2xl">
        Contato
      </a>
    </nav>

    <!-- MENU MOBILE -->
    <button id="mobile-menu-btn" class="lg:hidden text-white p-3 rounded-xl bg-white/10 backdrop-blur-xl hover:bg-white/20 transition">
      <i data-lucide="menu" class="w-8 h-8"></i>
    </button>
  </div>

  <!-- MENU MOBILE -->
  <div id="mobile-nav" class="lg:hidden hidden fixed inset-0 top-24 bg-black/95 backdrop-blur-3xl z-40 pt-10">
    <nav class="flex flex-col items-center space-y-10 text-3xl font-bold">
      <a href="index.php" class="text-white hover:text-cyan-400 transition">Início</a>
      <a href="sobre.php" class="text-white hover:text-cyan-400 transition">Sobre nós</a>
      <a href="projetos.php" class="text-white hover:text-cyan-400 transition">Projetos</a>
      <a href="servicos.php" class="text-white hover:text-cyan-400 transition">Serviços</a>
      <a href="contato.php" class="text-cyan-400">Contato →</a>
    </nav>
  </div>
</header>

<!-- SCRIPT MELHORADO — MENU NÃO FECHA + VELOCIDADE TURBINADA -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    lucide.createIcons();

    const dropdown = document.getElementById('empresa-dropdown');
    const submenu = document.getElementById('submenu');
    const chevron = document.getElementById('chevron');

    // Hover + mantém aberto enquanto o mouse está no submenu
    dropdown.addEventListener('mouseenter', () => {
      submenu.classList.remove('opacity-0', 'invisible', 'pointer-events-none');
      submenu.classList.add('opacity-100', 'visible', 'pointer-events-auto');
      chevron.classList.add('rotate-180');
    });

    dropdown.addEventListener('mouseleave', () => {
      submenu.classList.add('opacity-0', 'invisible', 'pointer-events-none');
      submenu.classList.remove('opacity-100', 'visible', 'pointer-events-auto');
      chevron.classList.remove('rotate-180');
    });

    // Menu mobile (fecha ao clicar fora)
    document.getElementById('mobile-menu-btn')?.addEventListener('click', () => {
      document.getElementById('mobile-nav').classList.toggle('hidden');
    });

    document.addEventListener('click', (e) => {
      const menu = document.getElementById('mobile-nav');
      const btn = document.getElementById('mobile-menu-btn');
      if (menu && !menu.classList.contains('hidden') && !btn.contains(e.target) && !menu.contains(e.target)) {
        menu.classList.add('hidden');
      }
    });
  });
</script>

<div class="pt-32"></div>
