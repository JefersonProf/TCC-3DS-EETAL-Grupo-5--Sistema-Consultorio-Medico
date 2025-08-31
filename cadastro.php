<?php
// cadastro.php
$tipo = $_GET['tipo'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro - DoctorLink</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>DoctorLink</h1>
  </header>

  <main>
    <?php if ($tipo == "paciente"): ?>
      <!-- Formulário Paciente -->
      <h2>Cadastro de Paciente</h2>
      <form method="POST" action="processa_cadastro.php">
        <input type="hidden" name="tipo" value="paciente">

        <label>Nome</label>
        <input type="text" name="nome" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Senha</label>
        <input type="password" name="senha" required>

        <label>Data de Nascimento</label>
        <input type="date" name="data_nascimento">

        <button type="submit">Cadastrar</button>
      </form>

    <?php elseif ($tipo == "medico"): ?>
      <!-- Formulário Médico -->
      <h2>Cadastro de Médico/Clínica</h2>
      <form method="POST" action="processa_cadastro.php">
        <input type="hidden" name="tipo" value="medico">

        <label>Nome</label>
        <input type="text" name="nome" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Senha</label>
        <input type="password" name="senha" required>

        <label>Especialidade</label>
        <input type="text" name="especialidade" required>

        <label>Registro Profissional (CRM/CNPJ)</label>
        <input type="text" name="registro_profissional">

        <!-- NOVO CAMPO: Plano de Assinatura -->
        <label>Plano de Assinatura</label>
        <select name="plano_id" required>
          <option value="">Selecione um plano</option>
          <option value="1">Mensal - R$ 500,00</option>
          <option value="2">Trimestral - R$ 350,00/mês</option>
          <option value="3">Semestral - R$ 300,00/mês</option>
          <option value="4">Anual - R$ 200,00/mês</option>
        </select>

        <button type="submit">Cadastrar</button>
      </form>

    <?php else: ?>
      <p>Tipo de cadastro inválido. Volte e escolha Paciente ou Médico/Clínica.</p>
    <?php endif; ?>
  </main>
</body>
</html>
