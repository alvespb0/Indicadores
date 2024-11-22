<?php include('../index.php');
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Login</title>
  <link rel="stylesheet" href="#">
  <style>

/* Container da página de login */
.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}

/* Estilos da box de login */
.login-box {
  background-color: #fff;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
  text-align: center;
}

.login-box h2 {
  color: #286559;
  font-size: 24px;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.input-group {
  margin-bottom: 20px;
  text-align: left;
}

.input-group label {
  font-size: 14px;
  color: #286559;
  display: block;
  margin-bottom: 5px;
}

.input-group input {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 2px solid #ddd;
  border-radius: 8px;
  outline: none;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.input-group input:focus {
  border-color: #79ccc0;
  box-shadow: 0 0 5px rgba(121, 204, 192, 0.6);
}

/* Estilo do botão de login */
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

/* Estilo do formulário e inputs */
form {
  display: flex;
  flex-direction: column;
}

  </style>
</head>
<body>
  <br><br><br><br><br><br>
  <div class="login-container">
    <div class="login-box">
      <h2>Login</h2>
      <form action="../action/validalogin.php" method="POST">
        <div class="input-group">
          <label for="username">Usuário</label>
          <input type="text" id="username" name="login" placeholder="Digite seu usuário" required>
        </div>
        <div class="input-group">
          <label for="password">Senha</label>
          <input type="password" id="password" name="senha" placeholder="Digite sua senha" required>
        </div>
        <button type="submit">Entrar</button>
        <?php
        if (isset($_SESSION['Login404'])){         
        echo $_SESSION['Login404'];
        unset($_SESSION['Login404']);
        }else if(isset($_SESSION['erroLogin'])){
          echo $_SESSION['erroLogin'];
          unset($_SESSION['Login404']);
        }?>
      </form>
    </div>
  </div>
</body>
</html>
