<?php include ('../index.php');
session_start();

$mensagem = '';

if (isset($_SESSION['comercial'])){
    $mensagem = "Obrigado {$_SESSION['comercial']}, os indicadores já foram salvos em nosso banco de dados😉. Caso queira verificar como estão os gráficos acesse xxxx";
    unset($_SESSION['comercial']);
}else if(isset($_SESSION['recepcao_cacador'])){
    $mensagem = "Obrigado {$_SESSION['recepcao_cacador']}, os indicadores já foram salvos em nosso banco de dados😉. Caso queira verificar como estão os gráficos acesse xxxx";
    unset($_SESSION['recepcao_cacador']);
}else if(isset($_SESSION['recepcao_fraiburgo'])){
    $mensagem = "Obrigado {$_SESSION['recepcao_fraiburgo']}, os indicadores já foram salvos em nosso banco de dados😉. Caso queira verificar como estão os gráficos acesse xxxx";
    unset($_SESSION['recepcao_fraiburgo']);
}else if(isset($_SESSION['recepcao_videira'])){
    $mensagem = "Obrigado {$_SESSION['recepcao_videira']}, os indicadores já foram salvos em nosso banco de dados😉. Caso queira verificar como estão os gráficos acesse xxxx";
    unset($_SESSION['recepcao_videira']);
}else if(isset($_SESSION['seguranca'])){
    $mensagem = "Obrigado {$_SESSION['seguranca']}, os indicadores já foram salvos em nosso banco de dados😉. Caso queira verificar como estão os gráficos acesse xxxx";
    unset($_SESSION['seguranca']);
}else if(isset($_SESSION['ambiental'])){
    $mensagem = "Obrigado {$_SESSION['ambiental']}, os indicadores já foram salvos em nosso banco de dados😉. Caso queira verificar como estão os gráficos acesse xxxx";
    unset($_SESSION['ambiental']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h4 {
        font-family: "Times New Roman", serif; /* Define a fonte como Times New Roman */
        font-size: 32px; /* Tamanho da fonte */
        color: #4a4a4a; /* Cor do texto, pode ajustar conforme necessário */
        text-align: center; /* Centraliza o texto */
        padding: 20px; /* Espaçamento interno */
        margin: 0; /* Remove as margens padrão */
        background-color: #f4f4f4; /* Cor de fundo para destaque */
        border: 2px solid #ddd; /* Borda sutil ao redor */
        border-radius: 8px; /* Bordas arredondadas */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra para dar profundidade */
        width: fit-content; /* O tamanho do elemento se ajusta ao conteúdo */
        margin-top: 15%; /* Coloca o título no centro verticalmente da página */
        padding-left: 20px;
        padding-right: 20px;
        }

    </style>
</head>
<body>
    <h4><?php echo $mensagem;?></h4>
</body>
</html>
    
