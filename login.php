<?php
// login.php
$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : 'paciente'; // padrão paciente

if ($tipo === 'medico') {
    $titulo = "Login Médico/Clínica";
    $acao = "Entrar como Médico/Clínica";
} else {
    $titulo = "Login Paciente";
    $acao = "Entrar como Paciente";
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
    <form method="post" action="processa_login.php">
      <input type="hidden" name="tipo" value="<?php echo $tipo; ?>">

      <label>Email:</label>
      <input type="email" name="email" required>

      <label>Senha:</label>
      <input type="password" name="senha" required>

      <button type="submit"><?php echo $acao; ?></button>
    </form>
  </section>
</body>
</html>
