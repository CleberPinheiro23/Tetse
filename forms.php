<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Intranet - Página Inicial</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Página Inicial</h1>
    <nav>
      <ul>
        <li><a href="index.php">Página Inicial</a></li>
        <li><a href="comunicacao.php">Comunicação</a></li>
        <li><a href="forms.php">Forms</a></li>
      </ul>
    </nav>
  </header>

  <section>
    <h2>Bem-vindo à Intranet</h2>
    <p>Conteúdo da página inicial.</p>
  </section>

  <footer>
    <p>© 2023 Empresa. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
