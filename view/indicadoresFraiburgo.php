<?php include('../index.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Indicadores - Fraiburgo</title>
  <link rel="stylesheet" href="#">
  <style>
    /* Reset de margin e padding */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  display: flex;
  justify-content: center;
  align-items: flex-start; /* Garante que o conteúdo começa no topo */
  min-height: 100vh; /* Garante que o corpo ocupe 100% da altura da tela */
  flex-direction: column; /* Certifica-se de que o layout é de coluna */
  padding: 00px; /* Padding para evitar que o conteúdo fique colado nas bordas */
}

/* Container principal */
.container {
  display: flex;
  flex-direction: column;  /* Garante que o conteúdo será disposto de forma vertical */
  justify-content: flex-start;
  align-items: center;
  width: 100%;  /* Garante que o conteúdo ocupa 100% da largura */
  max-width: 900px;
  margin: 0 auto;
}

/* Box de Cadastro */
.form-box {
  background-color: #fff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 600px;
  max-height: 600px; /* Define a altura máxima da box */
  overflow-y: auto; /* Adiciona rolagem interna se o conteúdo ultrapassar o limite de altura */
  text-align: center;
}

.form-box h2 {
  color: #286559;
  font-size: 24px;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.input-group {
  margin-bottom: 15px; /* Espaçamento entre os campos */
  text-align: left;
}

.input-group label {
  font-size: 14px;
  color: #286559;
  display: block;
  margin-bottom: 5px;
}

.input-group input,
.input-group select {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 2px solid #ddd;
  border-radius: 8px;
  outline: none;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

input[type="number"] {
  -moz-appearance: textfield;
}

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input:focus,
select:focus {
  border-color: #79ccc0;
  box-shadow: 0 0 5px rgba(121, 204, 192, 0.6);
}

button {
  width: 100%;
  padding: 12px;
  background-color: #286559;
  color: #fff;
  font-size: 18px;
  font-weight: bold;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

button:hover {
  background-color: #79ccc0;
  transform: translateY(-3px);
}

button:focus {
  outline: none;
}

  </style>
</head>
<body>

  <div class="container">
    <!-- Box de Cadastro de Indicador -->
    <div class="form-box">
      <h2>Cadastro de Indicador - Fraiburgo</h2>
      <form action="salvar_indicadores_fraiburgo.php" method="POST">
        <!-- Campos de Indicadores -->
        <div class="input-group">
          <label for="clinico">CLINICO</label>
          <input type="number" id="clinico" name="clinico" placeholder="Digite o valor de Clínico" required>
        </div>
        <div class="input-group">
          <label for="audiometria">AUDIOMETRIA</label>
          <input type="number" id="audiometria" name="audiometria" placeholder="Digite o valor de Audiometria" required>
        </div>
        <div class="input-group">
          <label for="espirometria">ESPIROMETRIA</label>
          <input type="number" id="espirometria" name="espirometria" placeholder="Digite o valor de Espirometria" required>
        </div>
        <div class="input-group">
          <label for="acuidade">ACUIDADE</label>
          <input type="number" id="acuidade" name="acuidade" placeholder="Digite o valor de Acuidade" required>
        </div>
        <div class="input-group">
          <label for="ecg">ECG</label>
          <input type="number" id="ecg" name="ecg" placeholder="Digite o valor de ECG" required>
        </div>
        <div class="input-group">
          <label for="eeg">EEG</label>
          <input type="number" id="eeg" name="eeg" placeholder="Digite o valor de EEG" required>
        </div>
        <div class="input-group">
          <label for="total_mes">TOTAL MÊS</label>
          <input type="number" id="total_mes" name="total_mes" placeholder="Digite o valor Total do Mês" required>
        </div>
        <!-- Campo de Data -->
        <div class="input-group">
          <label for="data">Data</label>
          <input type="date" id="data" name="data" required>
        </div>
        <!-- Botão de Enviar -->
        <button type="submit">Cadastrar Indicador</button>
      </form>
    </div>
  </div>

</body>
</html>
