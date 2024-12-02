<?php 
session_start();

if (isset($_SESSION['comercial'])){
  $logado = true;
}else if(isset($_SESSION['recepcao_cacador'])){
  $logado = true;
}else if(isset($_SESSION['recepcao_fraiburgo'])){
  $logado = true;
}else if(isset($_SESSION['recepcao_videira'])){
  $logado = true;
}else if(isset($_SESSION['seguranca'])){
  $logado = true;
}else if(isset($_SESSION['ambiental'])){
  $logado = true;
}else{
  $logado = false;
}

if ($logado) {
  $link = '<a href="' . (strpos($_SERVER['REQUEST_URI'], 'view') === false ? 'view/sair.php' : 'sair.php') . '">Sair</a>';
} else {
  $link = '<a href="' . (strpos($_SERVER['REQUEST_URI'], 'view') === false ? 'view/Login.php' : 'Login.php') . '">Login</a>';
}
$sobre = '<a href="'. (strpos($_SERVER['REQUEST_URI'], 'view') === false ? 'view/sobre.php' : 'sobre.php').'">Sobre</a>';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indicadores</title>
  <link rel="stylesheet" href="#">
  <style>
    /* Reset de margin e padding */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  margin-top: 80px;
} */

/* Estilos da Navbar */
.navbar {
  background-color: #286559;
  padding: 15px 30px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  position: sticky;
  top: 0;
  width: 100%;
  z-index: 1000;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.navbar-segment {
  color: #fff;
  font-size: 20px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.nav-links {
  list-style: none;
  display: flex;
  justify-content: flex-end;
  gap: 30px;
}

.nav-links li {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.nav-links a {
  text-decoration: none;
  color: #fff;
  font-size: 18px;
  font-weight: bold;
  padding: 10px 15px;
  display: block;
  border-radius: 8px;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.nav-links a:hover {
  background-color: #79ccc0;
  color: #286559;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
  transform: translateY(-3px);
}

.nav-links li:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

  </style>
</head>
<body>
  <nav class="navbar">
    <div class="navbar-segment">
      <span>Segmetre Indicadores</span>
    </div>
    <ul class="nav-links">
      <li><?php echo $sobre; ?></li>
      <li><a href="https://wa.me/+5549984253805" target="_blank">Contato</a></li>
      <li><?php echo $link; ?></li>
    </ul>
  </nav>

</body>
</html>
