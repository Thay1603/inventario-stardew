<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Stardew Valley</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Press Start 2P', cursive;
        }

        /* Background da página */
        .background {
            background-image: url('https://wallpaperaccess.com/full/1547811.jpg');
            background-size: cover;
            background-position: center;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            font-size: 2rem;
        }

        /* Container para o conteúdo da página */
        .content {
            background-color: rgba(230, 230, 230, 0.51);
            padding: 40px;
            border-radius: 15px;
        }

        h1 {
            font-size: 3rem;
            margin: 0;
            color:rgb(33, 24, 85);
        }

        p {
            font-size: 1.5rem;
            color:rgb(52, 29, 97);
        }

        .button {
            background-color:rgb(107, 194, 165);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            text-decoration: none;
        }

        .button:hover {
            background-color:rgb(90, 158, 152);
        }
    </style>
</head>
<body>

<div class="background">
    <div class="content">
        <h1>Bem-vindo ao Mundo de Stardew Valley!</h1>
        <p>Explore, cultive e crie suas próprias aventuras!</p>
        <a href="login.php" class="button">Realizar Login</a>
    </div>
</div>

</body>
</html>