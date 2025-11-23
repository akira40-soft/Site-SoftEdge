<?php include 'components/header.php'; ?>

<main class="pt-32 px-8 pb-32">
  <div class="max-w-7xl mx-auto text-center mb-20 fade-in">
    <h1 class="text-6xl md:text-8xl font-black mb-8">
      Projetos que <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">entregamos com orgulho</span>
    </h1>
    <p class="text-xl text-gray-300 max-w-3xl mx-auto">
      Cada projeto é único. Cada cliente é parceiro. Veja alguns dos trabalhos que nos enchem de satisfação.
    </p>
  </div>

  <!-- Grid de Projetos carregado dinamicamente do PocketBase -->
  <div id="projetos-container" class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">
    <!-- Cards serão injetados aqui pelo JavaScript -->
    <div class="text-center py-20">
      <div class="animate-pulse">
        <div class="w-24 h-24 mx-auto mb-4 bg-white/10 rounded-full"></div>
        <p class="mt-6 text-gray-400">Carregando projetos incríveis...</p>
      </div>
    </div>
  </div>
</main>

<?php include 'components/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
<script src="https://unpkg.com/lucide@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/pocketbase@0.21.0/dist/pocketbase.umd.js"></script>
<script src="js/app.js"></script>

<script>
// Carrega projetos do PocketBase (Railway)
document.addEventListener("DOMContentLoaded", async () => {
  const pb = new PocketBase("https://softedge-pb.up.railway.app"); // ← sua URL real

  try {
    const records = await pb.collection('projetos').getFullList({
      sort: '-created',
    });

    const container = document.getElementById('projetos-container');
    container.innerHTML = ''; // limpa loading

    records.forEach((projeto, index) => {
      const card = document.createElement('div');
      card.className = 'project-card glass fade-in';
      card.style.animationDelay = `${index * 0.15}s`;

      card.innerHTML = `
        <img src="${pb.files.getUrl(projeto, projeto.imagem)}" alt="${projeto.titulo}" loading="lazy">
        <div class="project-overlay">
          <div>
            <h3 class="text-3xl font-bold mb-3">${projeto.titulo}</h3>
            <p class="text-lg opacity-90 mb-6">${projeto.descricao_curta || ''}</p>
            <a href="${projeto.link || '#'}" target="_blank" class="inline-block bg-gradient-to-r from-cyan-500 to-blue-600 px-8 py-4 rounded-full font-bold hover:scale-110 transition shadow-lg">
              Ver Projeto →
            </a>
          </div>
        </div>
      `;

      container.appendChild(card);
    });

    // Animação de entrada dos cards (GSAP pro)
    gsap.from(".project-card", {
      y: 100,
      opacity: 0,
      duration: 1.2,
      stagger: 0.15,
      ease: "elastic.out(1,0.5)",
      scrollTrigger: { trigger: "#projetos-container", start: "top 80%" }
    });

  } catch (error) {
    document.getElementById('projetos-container').innerHTML = `
      <div class="col-span-full text-center py-20">
        <p class="text-2xl text-gray-400">Projetos em breve... ou verifique o backend</p>
      </div>
    `;
  }
});
</script>
