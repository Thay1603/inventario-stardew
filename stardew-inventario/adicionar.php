<?php
// Incluir o arquivo que contém a classe Item
include_once('item.php');

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $descrição = $_POST['descrição'];
    $imagem = $_POST['imagem'];

    // Criar um novo item
    $novoItem = new Item($nome, $quantidade, $descrição, $imagem);

    // Salvar o item no arquivo inventario.txt
    $itemData = $nome . '|' . $quantidade . '|' . $descrição . '|' . $imagem . "\n";
    file_put_contents('inventario.txt', $itemData, FILE_APPEND);

    // Redirecionar de volta para o inventário
    header('Location: inventario.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Item - Stardew Valley</title>
    <style>
        body {
            font-family: 'Press Start 2P', cursive;
            background-image:url('https://wallpaperaccess.com/full/2913255.png');
            text-align: center;
            color:rgb(255, 0, 0); /* Cor verde-escuro mais suave */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background: linear-gradient(135deg,rgba(238, 238, 98, 0.50),rgba(114, 216, 141, 0.50),rgb(66, 138, 238, 0.50)); /* Gradiente suave de amarelo, verde e azul */
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color:rgb(255, 255, 255); /* Verde escuro mais forte para o título */
            font-size: 3rem;
            margin-bottom: 30px;
        }

        label {
            font-size: 1.2rem;
            color: #4F5D49;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #A7B89E; /* Bordas no tom verde claro */
            font-size: 1rem;
            box-sizing: border-box;
        }

        input[type="text"], input[type="number"] {
            background-color: #E2E6E0; /* Fundo claro e suave */
        }

        textarea {
            height: 100px;
            resize: none;
            background-color: #E2E6E0;
        }

        .button {
            background-color: #8B9E80; /* Verde suave para o botão */
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 30px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .button:hover {
            background-color: #6E7D60; /* Tom mais escuro quando hover */
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #B0BBA3; /* Um tom mais claro de verde para o botão de voltar */
            color: white;
            border-radius: 30px;
            font-size: 1rem;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #98A78F; /* Cor mais escura para o hover */
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #D1D8D2; /* Cor de fundo cinza suave */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #A7B89E; /* Bordas suaves */
            background-color: #FFF;
            font-size: 1rem;
            border-radius: 10px;
        }

        th {
            background-color: #8B9E80; /* Cor de fundo para os cabeçalhos (verde suave) */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #E2E6E0; /* Linha alternada em cinza suave */
        }

        img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            background-color: #E0E6D6; /* Fundo suave para imagens */
            padding: 5px;
            border-radius: 10px;
        }

    </style>
</head>
<body>

    <h1>Adicionar Novo Item</h1>
    <div class="container">
        <form method="POST" action="adicionar.php">
            <table>
                <tr>
                    <td><label for="nome">Nome:</label></td>
                    <td><input type="text" id="nome" name="nome" required></td>
                </tr>
                <tr>
                    <td><label for="quantidade">Quantidade:</label></td>
                    <td><input type="number" id="quantidade" name="quantidade" required></td>
                </tr>
                <tr>
                    <td><label for="descrição">Descrição:</label></td>
                    <td><textarea id="descrição" name="descrição" required></textarea></td>
                </tr>
                <tr>
                    <td><label for="imagem">URL da Imagem:</label></td>
                    <td><input type="text" id="imagem" name="imagem" required></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" class="button">Adicionar Item</button></td>
                </tr>
            </table>
        </form>

        <!-- Botão para voltar ao inventário -->
        <a href="inventario.php" class="back-button">Voltar para o Inventário</a>
    </div>
</body>
</html>
