<?php include 'components/header.php'; ?>

<!-- HERO CONTATO -->
<section class="relative pt-32 pb-20 overflow-hidden">
  <div class="absolute inset-0 -z-10">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-cyan-950/20 to-transparent"></div>
  </div>

  <div class="text-center px-8 max-w-7xl mx-auto">
    <h1 class="text-6xl md:text-8xl lg:text-9xl font-black mb-8 opacity-0 translate-y-32">
      Vamos <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 animate-gradient">construir juntos</span>?
    </h1>
    <p class="text-xl md:text-3xl text-gray-300 max-w-4xl mx-auto opacity-0 translate-y-32">
      Conte-nos sobre seu projeto, ideia ou desafio. Respondemos em até 24h.
    </p>
  </div>
</section>

<main class="px-8 pb-32">
  <div class="max-w-4xl mx-auto">

    <!-- MENSAGEM DE SUCESSO -->
    <div id="success-message" class="hidden text-center">
      <div class="glass p-20 rounded-3xl shadow-2xl">
        <i data-lucide="check-circle" class="w-32 h-32 text-green-400 mx-auto mb-8"></i>
        <h2 class="text-5xl font-black mb-6">Mensagem enviada com sucesso!</h2>
        <p class="text-2xl text-gray-300">Entraremos em contato em até 24h. Obrigado pela confiança 🚀</p>
      </div>
    </div>

    <!-- FORMULÁRIO -->
    <form id="feedback-form" method="POST" class="glass p-12 rounded-3xl space-y-10">
      <div class="grid md:grid-cols-2 gap-10">
        <input type="text" name="nome" placeholder="Seu nome *" required class="input-field text-lg">
        <input type="email" name="email" placeholder="Seu melhor e-mail *" required class="input-field text-lg">
      </div>

      <input type="text" name="empresa" placeholder="Empresa ou projeto (opcional)" class="input-field text-lg">

      <textarea name="mensagem" rows="9" placeholder="Descreva sua ideia, desafio ou como podemos te ajudar... *" required class="input-field text-lg resize-none"></textarea>

      <button type="submit" class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 py-9 rounded-2xl text-2xl font-bold hover:scale-105 transition-all duration-300 shadow-2xl flex items-center justify-center gap-5 group">
        <span>Enviar Mensagem</span>
        <i data-lucide="arrow-right" class="w-9 h-9 group-hover:translate-x-4 transition-transform duration-300"></i>
      </button>
    </form>
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
    .to("form > *", { y: 0, opacity: 1, duration: 1.2, stagger: 0.1, delay: 0.4 }, "-=1");
});
</script>

<?php
// ENVIO DIRETO PARA SEU E-MAIL (SEM POCKETBASE)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  header('Content-Type: application/json');

  $nome    = trim($_POST['nome'] ?? '');
  $email   = trim($_POST['email'] ?? '');
  $empresa = trim($_POST['empresa'] ?? '(não informado)');
  $mensagem = trim($_POST['mensagem'] ?? '');

  if (empty($nome) || empty($email) || empty($mensagem)) {
    echo json_encode(['success' => false, 'error' => 'Preencha todos os campos obrigatórios']);
    exit;
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'error' => 'E-mail inválido']);
    exit;
  }

  $to      = "softedgecorporation@gmail.com";
  $subject = "Novo contato do site - $nome";
  $body    = "Nome: $nome\nE-mail: $email\nEmpresa/Projeto: $empresa\n\nMensagem:\n$mensagem\n\n---\nEnviado do site SoftEdge";
  $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

  if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['success' => true]);
  } else {
    echo json_encode(['success' => false, 'error' => 'Erro no envio. Tente novamente.']);
  }
  exit;
}
?>

<script>
// PROCESSAMENTO DO FORMULÁRIO COM ANIMAÇÃO ÉPICA
document.getElementById('feedback-form').addEventListener('submit', async function(e) {
  e.preventDefault();
  const button = this.querySelector('button');
  const original = button.innerHTML;

  button.innerHTML = '<i data-lucide="loader-2" class="w-9 h-9 animate-spin"></i> Enviando...';
  button.disabled = true;
  lucide.createIcons();

  try {
    const res = await fetch('feedback.php', { method: 'POST', body: new FormData(this) });
    const data = await res.json();

    if (data.success) {
      this.classList.add('hidden');
      document.getElementById('success-message').classList.remove('hidden');
      gsap.from('#success-message > div', { y: 100, opacity: 0, scale: 0.8, duration: 1.2, ease: 'elastic.out(1,0.5)' });
    } else {
      alert('Erro: ' + data.error);
    }
  } catch {
    alert('Erro de conexão. Tente novamente.');
  } finally {
    button.innerHTML = original;
    button.disabled = false;
    lucide.createIcons();
  }
});
</script>

<style>
  @keyframes gradient { 0%,100% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } }
  .animate-gradient { background-size: 300% 300%; animation: gradient 12s ease infinite; }
</style>
