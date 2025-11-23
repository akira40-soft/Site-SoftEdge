<?php include 'components/header.php'; ?>

<main class="pt-32 px-8 pb-32 min-h-screen">
  <div class="max-w-4xl mx-auto text-center mb-20">
    <h1 class="text-6xl md:text-8xl font-black mb-8">
      Vamos <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">construir juntos</span>?
    </h1>
    <p class="text-xl md:text-2xl text-gray-300 leading-relaxed">
      Conte-nos sobre seu projeto, ideia ou desafio. Respondemos em até 24h.
    </p>
  </div>

  <!-- Mensagem de sucesso -->
  <div id="success-message" class="hidden max-w-4xl mx-auto text-center mb-20">
    <div class="glass p-20 rounded-3xl shadow-2xl">
      <i data-lucide="check-circle" class="w-32 h-32 text-green-400 mx-auto mb-8"></i>
      <h2 class="text-5xl font-black mb-6">Mensagem enviada!</h2>
      <p class="text-2xl text-gray-300">Chegamos! Entraremos em contato em até 24h 🚀</p>
    </div>
  </div>

  <!-- Formulário -->
  <form id="feedback-form" method="POST" class="max-w-4xl mx-auto glass p-12 rounded-3xl space-y-10">
    <div class="grid md:grid-cols-2 gap-10">
      <input type="text" name="nome" placeholder="Seu nome *" required class="input-field text-lg">
      <input type="email" name="email" placeholder="Seu melhor e-mail *" required class="input-field text-lg">
    </div>
    <input type="text" name="empresa" placeholder="Empresa ou projeto (opcional)" class="input-field text-lg">
    <textarea name="mensagem" rows="9" placeholder="Descreva sua ideia, desafio ou como podemos te ajudar... *" required class="input-field text-lg resize-none"></textarea>

    <button type="submit" class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 py-8 rounded-2xl text-2xl font-bold hover:scale-105 transition-all duration-300 shadow-2xl flex items-center justify-center gap-5 group">
      <span>Enviar Mensagem</span>
      <i data-lucide="arrow-right" class="w-9 h-9 group-hover:translate-x-3 transition"></i>
    </button>
  </form>
</main>

<?php include 'components/footer.php'; ?>

<!-- Scripts -->
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
  gsap.ticker.add(time => lenis.raf(time * 1000));

  // Animações de entrada
  gsap.from("h1, p", { y: 100, opacity: 0, duration: 1.4, stagger: 0.3, ease: "power4.out" });
  gsap.from("form > *", { y: 80, opacity: 0, duration: 1.2, stagger: 0.15, delay: 0.6, ease: "power3.out" });
});
</script>

<?php
// ========== ENVIO DIRETO POR E-MAIL (SEM POCKETBASE) ==========
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  header('Content-Type: application/json');

  $nome    = trim($_POST['nome'] ?? '');
  $email   = trim($_POST['email'] ?? '');
  $empresa = trim($_POST['empresa'] ?? '(não informado)');
  $mensagem = trim($_POST['mensagem'] ?? '');

  // Validação
  if (empty($nome) || empty($email) || empty($mensagem)) {
    echo json_encode(['success' => false, 'error' => 'Preencha todos os campos obrigatórios']);
    exit;
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'error' => 'E-mail inválido']);
    exit;
  }

  // Monta o e-mail
  $to      = "softedgecorporation@gmail.com";
  $subject = "Novo contato do site - $nome";
  $body    = "Nome: $nome\nE-mail: $email\nEmpresa/Projeto: $empresa\n\nMensagem:\n$mensagem\n\n---\nEnviado do site SoftEdge";
  $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

  // Envia
  if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['success' => true]);
  } else {
    echo json_encode(['success' => false, 'error' => 'Erro no servidor de e-mail. Tente novamente mais tarde.']);
  }
  exit;
}
?>

<script>
// Processa formulário com animação linda
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
      gsap.from('#success-message > div', { y: 120, opacity: 0, scale: 0.8, duration: 1.2, ease: 'elastic.out(1,0.5)' });
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
