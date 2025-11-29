<?php
// PROCESSAMENTO DO ENVIO DE EMAIL
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  header('Content-Type: application/json');

  $nome    = trim($_POST['nome'] ?? '');
  $email   = trim($_POST['email'] ?? '');
  $empresa = trim($_POST['empresa'] ?? '(não informado)');
  $mensagem = trim($_POST['mensagem'] ?? '');

  // Validação
  if (empty($nome) || empty($email) || empty($mensagem)) {
    echo json_encode(['success' => false, 'error' => 'Por favor, preencha todos os campos obrigatórios.']);
    exit;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'error' => 'E-mail inválido. Verifique e tente novamente.']);
    exit;
  }

  // Configuração do email
  $to      = "softedgecorporation@gmail.com";
  $subject = "🚀 Novo Contato do Site - " . $nome;
  
  $body    = "═══════════════════════════════════════\n";
  $body   .= "  NOVO CONTATO DO SITE SOFTEDGE\n";
  $body   .= "═══════════════════════════════════════\n\n";
  $body   .= "👤 NOME:\n   " . $nome . "\n\n";
  $body   .= "📧 E-MAIL:\n   " . $email . "\n\n";
  $body   .= "🏢 EMPRESA/PROJETO:\n   " . $empresa . "\n\n";
  $body   .= "💬 MENSAGEM:\n   " . str_replace("\n", "\n   ", $mensagem) . "\n\n";
  $body   .= "═══════════════════════════════════════\n";
  $body   .= "📅 Data: " . date('d/m/Y H:i:s') . "\n";
  $body   .= "🌐 IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
  $body   .= "═══════════════════════════════════════\n";
  
  $headers  = "From: noreply@softedge-corporation.com\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  // Tentar enviar
  if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['success' => true]);
  } else {
    // Se mail() falhar, tente com um método alternativo (opcional)
    error_log("Falha no envio de email para: $to");
    echo json_encode(['success' => false, 'error' => 'Erro ao enviar mensagem. Por favor, tente novamente ou entre em contato via WhatsApp.']);
  }
  exit;
}
?>

<?php include 'components/header.php'; ?>

<!-- HERO SECTION -->
<section class="relative pt-32 pb-20 overflow-hidden">
  <!-- Background -->
  <div class="absolute inset-0 -z-10">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950"></div>
    <div class="absolute inset-0 opacity-30">
      <div class="absolute top-20 right-20 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl"></div>
      <div class="absolute bottom-20 left-20 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
    </div>
  </div>

  <!-- Content -->
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <div class="space-y-6">
      <div class="inline-block px-4 py-2 bg-cyan-500/10 rounded-full border border-cyan-500/20 mb-4">
        <span class="text-cyan-400 text-sm font-semibold uppercase tracking-wider">Entre em Contato</span>
      </div>
      
      <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
        Vamos <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-500 bg-clip-text text-transparent">construir juntos</span>?
      </h1>
      
      <p class="text-base sm:text-lg md:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
        Conte-nos sobre seu projeto, ideia ou desafio.<br class="hidden sm:block">
        Respondemos em até 24 horas.
      </p>
    </div>
  </div>
</section>

<!-- MAIN CONTENT -->
<main class="relative pb-20 lg:pb-32">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- MENSAGEM DE SUCESSO -->
    <div id="success-message" class="hidden">
      <div class="relative">
        <div class="absolute inset-0 bg-gradient-to-r from-green-500/20 via-emerald-500/20 to-teal-500/20 rounded-3xl blur-2xl"></div>
        <div class="relative bg-slate-900/80 backdrop-blur-xl border border-green-500/30 rounded-3xl p-12 lg:p-16 text-center">
          <div class="w-20 h-20 mx-auto mb-6 bg-green-500/20 rounded-full flex items-center justify-center">
            <i data-lucide="check-circle" class="w-12 h-12 text-green-400"></i>
          </div>
          <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4">
            Mensagem enviada!
          </h2>
          <p class="text-lg sm:text-xl text-gray-300 mb-8">
            Recebemos sua mensagem e entraremos em contato em até 24 horas.<br class="hidden sm:block">
            Obrigado pela confiança! 🚀
          </p>
          <a href="index.php" 
             class="inline-flex items-center gap-2 text-cyan-400 hover:text-cyan-300 font-medium transition-colors">
            <i data-lucide="arrow-left" class="w-5 h-5"></i>
            Voltar ao início
          </a>
        </div>
      </div>
    </div>

    <!-- FORMULÁRIO -->
    <form id="feedback-form" method="POST" class="relative">
      <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 via-blue-500/10 to-purple-500/10 rounded-3xl blur-2xl"></div>
      
      <div class="relative bg-slate-900/60 backdrop-blur-xl border border-white/10 rounded-3xl p-8 lg:p-12">
        <div class="space-y-6">
          
          <!-- Nome e Email -->
          <div class="grid sm:grid-cols-2 gap-6">
            <div>
              <label for="nome" class="block text-sm font-medium text-gray-300 mb-2">
                Nome completo *
              </label>
              <input 
                type="text" 
                id="nome"
                name="nome" 
                placeholder="João Silva" 
                required 
                class="w-full px-4 py-3.5 bg-slate-800/50 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:border-cyan-500/50 focus:ring-2 focus:ring-cyan-500/20 outline-none transition-all">
            </div>
            
            <div>
              <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                E-mail *
              </label>
              <input 
                type="email" 
                id="email"
                name="email" 
                placeholder="joao@exemplo.com" 
                required 
                class="w-full px-4 py-3.5 bg-slate-800/50 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:border-cyan-500/50 focus:ring-2 focus:ring-cyan-500/20 outline-none transition-all">
            </div>
          </div>

          <!-- Empresa -->
          <div>
            <label for="empresa" class="block text-sm font-medium text-gray-300 mb-2">
              Empresa ou projeto <span class="text-gray-500">(opcional)</span>
            </label>
            <input 
              type="text" 
              id="empresa"
              name="empresa" 
              placeholder="Nome da sua empresa" 
              class="w-full px-4 py-3.5 bg-slate-800/50 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:border-cyan-500/50 focus:ring-2 focus:ring-cyan-500/20 outline-none transition-all">
          </div>

          <!-- Mensagem -->
          <div>
            <label for="mensagem" class="block text-sm font-medium text-gray-300 mb-2">
              Mensagem *
            </label>
            <textarea 
              id="mensagem"
              name="mensagem" 
              rows="6" 
              placeholder="Conte-nos sobre seu projeto, ideia ou como podemos ajudar..."
              required 
              class="w-full px-4 py-3.5 bg-slate-800/50 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:border-cyan-500/50 focus:ring-2 focus:ring-cyan-500/20 outline-none transition-all resize-none"></textarea>
          </div>

          <!-- Submit Button -->
          <button 
            type="submit" 
            class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-semibold text-lg px-8 py-4 rounded-xl shadow-lg hover:shadow-cyan-500/50 hover:scale-[1.02] transition-all duration-300 flex items-center justify-center gap-3 group">
            <span id="button-text">Enviar Mensagem</span>
            <i data-lucide="send" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
          </button>

          <!-- Info -->
          <p class="text-center text-sm text-gray-400 mt-4">
            Responderemos em até 24 horas úteis
          </p>
        </div>
      </div>
    </form>

    <!-- CONTATO ALTERNATIVO -->
    <div class="mt-16 text-center">
      <p class="text-gray-400 mb-6">Prefere outro canal?</p>
      <div class="flex flex-wrap items-center justify-center gap-4">
        <a href="mailto:softedgecorporation@gmail.com" 
           class="inline-flex items-center gap-2 px-6 py-3 bg-slate-800/50 hover:bg-slate-700/50 border border-white/10 rounded-xl text-white transition-all">
          <i data-lucide="mail" class="w-5 h-5 text-cyan-400"></i>
          <span class="text-sm">Email direto</span>
        </a>
        
        <a href="https://whatsapp.com/channel/0029VawQLpGHltY2Y87fR83m" 
           target="_blank"
           rel="noopener noreferrer"
           class="inline-flex items-center gap-2 px-6 py-3 bg-green-600/20 hover:bg-green-600/30 border border-green-500/30 rounded-xl text-white transition-all">
          <i data-lucide="message-circle" class="w-5 h-5 text-green-400"></i>
          <span class="text-sm">WhatsApp</span>
        </a>
      </div>
    </div>

  </div>
</main>

<?php include 'components/footer.php'; ?>

<!-- SCRIPTS -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    lucide.createIcons();

    // Form submission
    const form = document.getElementById('feedback-form');
    const successMessage = document.getElementById('success-message');
    const buttonText = document.getElementById('button-text');

    form.addEventListener('submit', async function(e) {
      e.preventDefault();
      
      const button = this.querySelector('button[type="submit"]');
      const originalContent = button.innerHTML;
      
      // Loading state
      button.innerHTML = '<i data-lucide="loader-2" class="w-5 h-5 animate-spin mx-auto"></i>';
      button.disabled = true;
      lucide.createIcons();

      try {
        const formData = new FormData(this);
        const response = await fetch('feedback.php', {
          method: 'POST',
          body: formData
        });

        const data = await response.json();

        if (data.success) {
          // Hide form and show success message
          form.style.opacity = '0';
          form.style.transform = 'scale(0.95)';
          form.style.transition = 'all 0.5s ease';
          
          setTimeout(() => {
            form.classList.add('hidden');
            successMessage.classList.remove('hidden');
            successMessage.style.opacity = '0';
            successMessage.style.transform = 'scale(0.95)';
            
            setTimeout(() => {
              successMessage.style.opacity = '1';
              successMessage.style.transform = 'scale(1)';
              successMessage.style.transition = 'all 0.5s ease';
            }, 50);
            
            lucide.createIcons();
          }, 500);
        } else {
          // Show error
          alert('❌ ' + data.error);
          button.innerHTML = originalContent;
          button.disabled = false;
          lucide.createIcons();
        }
      } catch (error) {
        console.error('Erro:', error);
        alert('❌ Erro ao enviar mensagem. Por favor, tente novamente ou entre em contato via WhatsApp.');
        button.innerHTML = originalContent;
        button.disabled = false;
        lucide.createIcons();
      }
    });

    // Auto-resize textarea
    const textarea = document.getElementById('mensagem');
    textarea.addEventListener('input', function() {
      this.style.height = 'auto';
      this.style.height = this.scrollHeight + 'px';
    });
  });
</script>

<style>
  /* Input animations */
  input:focus,
  textarea:focus {
    transform: translateY(-2px);
  }

  /* Smooth transitions */
  input,
  textarea,
  button {
    transition: all 0.3s ease;
  }

  /* Placeholder styling */
  ::placeholder {
    color: #6b7280;
  }

  /* Loading animation */
  @keyframes spin {
    to {
      transform: rotate(360deg);
    }
  }

  .animate-spin {
    animation: spin 1s linear infinite;
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

  .bg-gradient-to-r {
    background-size: 200% 200%;
    animation: gradient-shift 8s ease infinite;
  }
</style>
