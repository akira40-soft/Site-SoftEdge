<?php include 'components/header.php'; ?>

<main class="pt-32 px-8 pb-32 min-h-screen">
  <div class="max-w-4xl mx-auto text-center mb-20 fade-in">
    <h1 class="text-6xl md:text-8xl font-black mb-8">
      Vamos <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">construir juntos</span>?
    </h1>
    <p class="text-xl md:text-2xl text-gray-300 leading-relaxed">
      Conte-nos sobre seu projeto, ideia ou desafio. Respondemos em até 24h.
    </p>
  </div>

  <!-- Mensagem de sucesso (aparece após envio) -->
  <div id="success-message" class="hidden max-w-4xl mx-auto text-center mb-20">
    <div class="glass p-16 rounded-3xl">
      <i data-lucide="check-circle" class="w-24 h-24 text-green-400 mx-auto mb-6"></i>
      <h2 class="text-4xl font-bold mb-4">Mensagem enviada com sucesso!</h2>
      <p class="text-xl text-gray-300">Entraremos em contato em breve. Obrigado pela confiança 🚀</p>
    </div>
  </div>

  <!-- Formulário -->
  <form id="feedback-form" method="POST" class="max-w-4xl mx-auto glass p-12 rounded-3xl space-y-10 fade-in">
    <div class="grid md:grid-cols-2 gap-10">
      <input 
        type="text" 
        name="nome" 
        placeholder="Seu nome *" 
        required 
        class="input-field text-lg"
      >
      <input 
        type="email" 
        name="email" 
        placeholder="Seu melhor e-mail *" 
        required 
        class="input-field text-lg"
      >
    </div>

    <input 
      type="text" 
      name="empresa" 
      placeholder="Empresa ou projeto (opcional)" 
      class="input-field text-lg"
    >

    <textarea 
      name="mensagem" 
      rows="8" 
      placeholder="Descreva sua ideia, desafio ou como podemos te ajudar... *" 
      required 
      class="input-field text-lg resize-none"
    ></textarea>

    <button 
      type="submit" 
      class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 py-7 rounded-2xl text-2xl font-bold hover:scale-105 transition shadow-2xl flex items-center justify-center gap-4 group"
    >
      Enviar Mensagem
      <i data-lucide="arrow-right" class="w-8 h-8 group-hover:translate-x-2 transition"></i>
    </button>
  </form>
</main>

<?php include 'components/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
<script src="https://unpkg.com/lucide@latest"></script>
<script src="js/app.js"></script>

<script>
// Processa o formulário com PHP + PocketBase (seguro!)
document.getElementById('feedback-form').addEventListener('submit', async function(e) {
  e.preventDefault();

  const formData = new FormData(this);
  const button = this.querySelector('button');
  const originalText = button.innerHTML;

  // Animação de loading
  button.innerHTML = '<i data-lucide="loader-2" class="w-8 h-8 animate-spin"></i> Enviando...';
  button.disabled = true;
  lucide.createIcons();

  try {
    const response = await fetch('feedback.php', {
      method: 'POST',
      body: formData
    });

    const result = await response.json();

    if (result.success) {
      // Sucesso com animação GSAP
      document.getElementById('feedback-form').classList.add('hidden');
      document.getElementById('success-message').classList.remove('hidden');

      gsap.from("#success-message > div", {
        y: 100,
        opacity: 0,
        scale: 0.8,
        duration: 1,
        ease: "elastic.out(1,0.5)"
      });

    } else {
      alert('Erro: ' + result.error);
    }
  } catch (err) {
    alert('Erro de conexão. Tente novamente.');
  } finally {
    button.innerHTML = originalText;
    button.disabled = false;
    lucide.createIcons();
  }
});
</script>

<?php
// ========== BACKEND PHP SEGURO (mesmo arquivo) ==========
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  header('Content-Type: application/json');

  $nome = trim($_POST['nome'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $empresa = trim($_POST['empresa'] ?? '');
  $mensagem = trim($_POST['mensagem'] ?? '');

  // Validação básica
  if (empty($nome) || empty($email) || empty($mensagem)) {
    echo json_encode(['success' => false, 'error' => 'Preencha todos os campos obrigatórios']);
    exit;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'error' => 'E-mail inválido']);
    exit;
  }

  // Envio pro PocketBase (URL escondida no servidor!)
  $pb_url = 'https://softedge-pb.up.railway.app/api/collections/feedbacks/records';

  $data = [
    'nome' => $nome,
    'email' => $email,
    'empresa' => $empresa,
    'mensagem' => $mensagem
  ];

  $ch = curl_init($pb_url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
  curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

  $response = curl_exec($ch);
  $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);

  if ($http_code >= 200 && $http_code < 300) {
    echo json_encode(['success' => true]);
  } else {
    echo json_encode(['success' => false, 'error' => 'Erro ao salvar. Tente novamente.']);
  }
  exit;
}
?>
