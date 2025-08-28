<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Primeira Página PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding-top: 50px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            font-size: 1.2em;
        }
        .date {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Olá! Seja bem-vindo ao meu projeto de CI/CD.</h1>
    <p>Esta página foi criada para o projeto da disciplina.</p>
    <p>A data e hora atuais do servidor são:</p>
    <p class="date">
        <?php
            date_default_timezone_set('America/Sao_Paulo');
            echo date('d/m/Y H:i:s');
        ?>
    </p>
</div>

</body>
</html>
