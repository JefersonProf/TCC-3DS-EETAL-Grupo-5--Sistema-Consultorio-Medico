<?php
// cadastro.php
$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : 'paciente'; // padrão paciente

if ($tipo === 'medico') {
    $titulo = "Cadastro de Médico/Clínica";
    $acao = "Cadastrar Médico/Clínica";
} else {
    $titulo = "Cadastro de Paciente";
    $acao = "Cadastrar Paciente";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title><?php echo $titulo; ?> - DoctorLink</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1><?php echo $titulo; ?></h1>
    <nav>
      <a href="index.html">← Voltar ao Início</a>
    </nav>
  </header>

  <section class="formulario">
    <form method="post" action="processa_cadastro.php">
      <input type="hidden" name="tipo" value="<?php echo $tipo; ?>">

      <?php if ($tipo === 'paciente'): ?>
        <label>Nome Completo:</label>
        <input type="text" name="nome" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Senha:</label>
        <input type="password" name="senha" required>

        <label>Data de Nascimento:</label>
        <input type="date" name="nascimento" required>

      <?php else: ?>
        <label>Nome do Médico/Clínica:</label>
        <input type="text" name="nome" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Senha:</label>
        <input type="password" name="senha" required>

        <label>Especialidade / Área:</label>
        <input type="text" name="especialidade" required>
      <?php endif; ?>

      <button type="submit"><?php echo $acao; ?></button>
    </form>
  </section>
</body>
</html>
