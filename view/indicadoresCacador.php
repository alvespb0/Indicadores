<?php include('../index.php'); 
session_start();
if(isset($_SESSION['recepcao_cacador'])){
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Indicadores - Cacador</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Estilos do Body */
/*     body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; 
      box-sizing: border-box;
    } */

    /* Container principal */
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100%; /* O container ocupa 100% da altura da tela */
    }

    /* Box de Cadastro */
    .form-box {
      background-color: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 600px; /* Limita a largura máxima do formulário */
      max-height: 600px; /* Limita a altura máxima do formulário */
      overflow-y: auto; /* Adiciona rolagem vertical quando necessário */
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
      margin-bottom: 15px; /* Ajuste o espaçamento entre os campos */
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

    .input-group input[type="number"] {
      -moz-appearance: textfield;
    }

    .input-group input[type="number"]::-webkit-outer-spin-button,
    .input-group input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    .input-group input:focus,
    .input-group select:focus {
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
    <br><br>
  <div class="container">
    <!-- Box de Cadastro de Indicador -->
    <div class="form-box">
      <h2>Cadastro de Indicador - Cacador</h2>
      <form action="../action/salvarCacador.php" method="POST">
        <!-- Campos de Indicadores -->
        <div class="input-group">
          <label for="clinicos">CLINICOS</label>
          <input type="number" id="clinicos" name="clinicos" placeholder="Digite o valor de Clínicos" required>
        </div>
        <div class="input-group">
          <label for="audiometria">AUDIOMETRIA</label>
          <input type="number" id="audiometria" name="audiometria" placeholder="Digite o valor de Audiometria" required>
        </div>
        <div class="input-group">
          <label for="acuidade">ACUIDADE</label>
          <input type="number" id="acuidade" name="acuidade" placeholder="Digite o valor de Acuidade" required>
        </div>
        <div class="input-group">
          <label for="fonoaudiologia">FONOAUDIOLOGIA CLINICA</label>
          <input type="number" id="fonoaudiologia" name="fonoaudiologia" placeholder="Digite o valor de Fonoaudiologia" required>
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
          <label for="espirometria">ESPIROMETRIA</label>
          <input type="number" id="espirometria" name="espirometria" placeholder="Digite o valor de Espirometria" required>
        </div>
        <div class="input-group">
          <label for="raiox">RAIO X</label>
          <input type="number" id="raiox" name="raiox" placeholder="Digite o valor de Raio X" required>
        </div>
        <div class="input-group">
          <label for="av_psicossocial">AV. PSICOSSOCIAL</label>
          <input type="number" id="av_psicossocial" name="av_psicossocial" placeholder="Digite o valor de Avaliação Psicossocial" required>
        </div>
        <div class="input-group">
          <label for="av_medica">AV. MÉDICA</label>
          <input type="number" id="av_medica" name="av_medica" placeholder="Digite o valor de Avaliação Médica" required>
        </div>
        <div class="input-group">
          <label for="laboratoriais">LABORATORIAIS</label>
          <input type="number" id="laboratoriais" name="laboratoriais" placeholder="Digite o valor de Laboratoriais" required>
        </div>
        <div class="input-group">
          <label for="pericias">PERÍCIAS</label>
          <input type="number" id="pericias" name="pericias" placeholder="Digite o valor de Perícias" required>
        </div>
        <!-- Campo de Data -->
        <div class="input-group">
          <label for="data">Data</label>
          <input type="date" id="data" name="data" required>
        </div>
        <!-- Botão de Enviar -->
        <button type="submit" name = "cadastrar">Cadastrar Indicador</button>
      </form>
    </div>
  </div>

</body>
</html>
<?php
}else{
  $_SESSION['erroLogin'] = "Você não tem acesso a essa página.";
  header("Location: ../index.php");}
?>