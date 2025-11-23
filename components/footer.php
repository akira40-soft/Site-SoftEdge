<!-- components/footer.php -->
<footer class="relative bg-black/50 backdrop-blur-2xl py-24 border-t border-white/10 mt-32 overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <!-- LOGO + SLOGAN COM ANIMAÇÃO -->
    <div class="flex justify-center items-center space-x-5 mb-10 opacity-0 translate-y-20" style="animation-delay: 0.2s">
      <img src="assets/logo.jpeg" alt="SoftEdge" class="w-14 h-14 rounded-full shadow-2xl">
      <span class="text-3xl font-black text-white">SoftEdge</span>
    </div>

    <p class="text-xl md:text-2xl text-gray-200 mb-12 max-w-3xl mx-auto leading-relaxed opacity-0 translate-y-20" style="animation-delay: 0.4s">
      Nos começamos com um sonho. Hoje desenvolvemos realidades lógicas e softwares mais amáveis.
    </p>

    <!-- CONTATOS COM ÍCONES CLICÁVEIS + MICRO-INTERAÇÃO -->
    <div class="flex justify-center space-x-16 text-4xl mb-12">
      <a href="mailto:softedgecorporation@gmail.com" class="text-white/80 hover:text-cyan-400 hover:scale-125 transition-transform duration-300" title="Envie um e-mail">
        <i data-lucide="mail" class="w-10 h-10 opacity-0 translate-y-20" style="animation-delay: 0.6s"></i>
      </a>
      <a href="https://x.com/softedge40" target="_blank" class="text-white/80 hover:text-cyan-400 hover:scale-125 transition-transform duration-300" title="Visite nosso X">
        <i data-lucide="twitter" class="w-10 h-10 opacity-0 translate-y-20" style="animation-delay: 0.7s"></i>
      </a>
      <a href="https://whatsapp.com/channel/0029VawQLpGHltY2Y87fR83m" target="_blank" class="text-white/80 hover:text-cyan-400 hover:scale-125 transition-transform duration-300" title="Canal no WhatsApp">
        <i data-lucide="message-circle" class="w-10 h-10 opacity-0 translate-y-20" style="animation-delay: 0.8s"></i>
      </a>
    </div>

    <p class="text-gray-500 text-sm opacity-0 translate-y-20" style="animation-delay: 1s">
      © 2025 SoftEdge. Todos os direitos reservados. <br>
      Fundada em 2023 por Isaac Quarenta e equipe.
    </p>
  </div>

  <!-- Efeito de partículas sutis no fundo (estética moderna) -->
  <div class="absolute inset-0 -z-10 pointer-events-none">
    <canvas id="footer-canvas" class="w-full h-full opacity-20"></canvas>
  </div>
</footer>

<!-- SCRIPT PARA ANIMAÇÕES + PARTÍCULAS (adicione no final do body ou app.js) -->
<script>
// Animações de entrada com GSAP
gsap.utils.toArray("[style*='animation-delay']").forEach(el => {
  gsap.to(el, {
    opacity: 1,
    y: 0,
    duration: 1.2,
    ease: "power4.out",
    delay: parseFloat(el.style.animationDelay || 0),
    scrollTrigger: {
      trigger: "footer",
      start: "top 85%",
    }
  });
});

// Partículas sutis no fundo do footer (conforto visual + tech vibe)
const canvas = document.getElementById('footer-canvas');
if (canvas) {
  canvas.width = canvas.offsetWidth;
  canvas.height = canvas.offsetHeight;
  const ctx = canvas.getContext('2d');

  class Particle {
    constructor() {
      this.x = Math.random() * canvas.width;
      this.y = Math.random() * canvas.height;
      this.size = Math.random() * 2 + 1;
      this.speedX = Math.random() * 2 - 1;
      this.speedY = Math.random() * 2 - 1;
    }
    update() {
      this.x += this.speedX;
      this.y += this.speedY;
      if (this.size > 0.2) this.size -= 0.1;
    }
    draw() {
      ctx.fillStyle = 'rgba(255, 255, 255, 0.6)';
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
      ctx.fill();
    }
  }

  const particlesArray = [];
  for (let i = 0; i < 50; i++) particlesArray.push(new Particle());

  function animateParticles() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    for (let i = 0; i < particlesArray.length; i++) {
      particlesArray[i].update();
      particlesArray[i].draw();
      if (particlesArray[i].size <= 0.2) {
        particlesArray.splice(i, 1);
        i--;
        particlesArray.push(new Particle());
      }
    }
    requestAnimationFrame(animateParticles);
  }
  animateParticles();
}
</script>
