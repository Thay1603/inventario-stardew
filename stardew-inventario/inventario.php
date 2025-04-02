<?php
// Incluir o arquivo que contém a classe Item
include_once('item.php');

// Função para ler os itens do arquivo inventario.txt
function lerItensDoInventario() {
    $itens = [];
    if (file_exists('inventario.txt')) {
        // Ler o conteúdo do arquivo inventario.txt
        $conteudo = file_get_contents('inventario.txt');
        // Separar cada linha (cada item)
        $linhas = explode("\n", $conteudo);
        foreach ($linhas as $linha) {
            // Ignorar linhas vazias
            if (empty($linha)) {
                continue;
            }
            // Separar os dados do item usando o delimitador '|'
            $dados = explode('|', $linha);
            if (count($dados) == 4) {
                // Criar o objeto Item
                $item = new Item($dados[0], $dados[1], $dados[2], $dados[3]);
                $itens[] = $item;
            }
        }
    }
    return $itens;
}

// Carregar os itens do inventário
$itens = lerItensDoInventario();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventário - Stardew Valley</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Press Start 2P', cursive;
            background-image: url('https://wallpaperaccess.com/full/2913255.png');
            text-align: center;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            color:rgb(255, 255, 255);
        }

        .button {
            background-color:rgb(133, 133, 133);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            text-decoration: none;
        }

        .button:hover {
            background-color:rgb(20, 16, 14);
        }

        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: #fef6e0;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
            background-color: #fff;
        }

        th {
            background-color:rgb(26, 24, 22);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            background-color: #e0e0e0;
            padding: 5px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <h1>Inventário - Stardew Valley</h1>

    <div class="container">
        <table>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Descrição</th>
            </tr>
            <?php
            if (!empty($itens)) {
                foreach ($itens as $item): ?>
                    <tr>
                        <td><img src="<?php echo $item->getImagem(); ?>" alt="<?php echo $item->getNome(); ?>"></td>
                        <td><?php echo $item->getNome(); ?></td>
                        <td><?php echo $item->getQuantidade(); ?></td>
                        <td><?php echo $item->getDescrição(); ?></td>
                    </tr>
                <?php endforeach;
            } else {
                echo "<tr><td colspan='4'>Não há itens no inventário.</td></tr>";
            }
            ?>
        </table>

        <a href="adicionar.php" class="button">Adicionar Novo Item</a>
    </div>

</body>
</html>
