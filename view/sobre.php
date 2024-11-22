<?php include('../index.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Indicadores - Segmetre</title>
  <style>
    /* Container principal para a mensagem */
    .main-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; /* A altura total da janela */
      margin: 0;
      background-color: #f4f4f4; /* Cor de fundo para a página */
      font-family: Arial, sans-serif; /* Fonte para o restante da página */
    }

    /* Estilos para a caixa de mensagem */
    .message-box {
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      width: 80%;
      max-width: 700px; /* Definindo um tamanho máximo */
      text-align: center;
    }

    /* Estilo do título */
    .message-box h4 {
      font-family: "Times New Roman", serif; /* Definir fonte como Times New Roman */
      font-size: 26px;
      color: #286559;
      margin-bottom: 20px;
      text-align: center;
    }

    /* Estilo do parágrafo */
    .message-box p {
      font-family: "Times New Roman", serif;
      font-size: 18px;
      color: #333;
      line-height: 1.6; /* Melhor legibilidade */
      text-align: justify; /* Justifica o texto */
      margin-bottom: 20px;
    }

    /* Estilo do rodapé (autor) */
    .message-box footer {
      font-family: "Times New Roman", serif;
      font-size: 16px;
      color: #286559;
      text-align: center;
      margin-top: 30px;
    }
  </style>
</head>
<body>
  <!-- Sua Navbar será inclusa aqui -->
  

  <!-- Contêiner principal com a mensagem -->
  <div class="main-container">
    <div class="message-box">
      <h4>Informações sobre o Sistema</h4>
      <p>
        Página dedicada ao cadastro de indicadores para a empresa Segmetre, desenvolvido e mantido por Arthur Marcondes Alves, vulgo TI.
        A aplicação é exclusiva para o registro de indicadores, com os dados sendo armazenados em um banco de dados. Mensalmente, esses dados
        serão processados e transformados em gráficos para análise e acompanhamento contínuo.
      </p>
      <footer>
        Desenvolvido por Arthur Marcondes Alves (vulgo TI)
      </footer>
    </div>
  </div>
</body>
</html>
