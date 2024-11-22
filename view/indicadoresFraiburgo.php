<?php include('../index.php');
session_start();
if(isset($_SESSION['recepcao_fraiburgo'])){
?>
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
  flex-direction: column; /* Garante que o conteúdo seja disposto verticalmente */
  min-height: 100vh;
  padding: 0;
  /* margin-top: 60px; */ /* Espaço para a navbar fixa */
}

/* Navbar */
nav {
  background-color: #286559;
  color: white;
  padding: 20px;
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10; /* Garantir que a navbar fique sobre outros elementos */
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

/* Links da navbar */
nav ul {
  list-style: none;
  display: flex;
  justify-content: flex-end;
  gap: 20px;
}

nav ul li {
  display: inline-block;
}

nav ul li a {
  text-decoration: none;
  color: white;
  font-weight: bold;
  transition: color 0.3s;
}

nav ul li a:hover {
  color: #79ccc0;
}

/* Ajuste do Container principal para abaixo da navbar */
.container {
  display: flex;
  justify-content: center;
  align-items: flex-start; 
  width: 100%;
  margin-top: 20px; /* Ajusta o espaçamento após a navbar */
  padding: 20px;
}

/* Box de Cadastro */
.form-box {
  background-color: #fff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 600px;
  max-height: 600px;
  overflow-y: auto;
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
  margin-bottom: 15px;
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
      <form action="../action/salvarFraiburgo.php" method="POST">
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
  header("Location: login.php");
}
?>
