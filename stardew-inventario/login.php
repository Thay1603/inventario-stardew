<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url('https://wallpapercave.com/wp/wp6659304.png');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background-color: rgba(255, 200, 237, 0.69);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group input[type="submit"] {
            background-color:rgb(255, 183, 231);
            color: white;
            border: none;
        }
        .form-group input[type="submit"]:hover {
            background-color:rgb(214, 123, 168);
        }
        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <div class="form-group">
            <label for="username">Usuário:</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Entrar">
        </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Dados de exemplo (usuário e senha)
        $valid_username = 'Thay';
        $valid_password = 'Thay1603';

        // Captura o usuário e a senha enviados pelo formulário
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validação simples
        if ($username === $valid_username && $password === $valid_password) {
            echo "<p style='color: green;'>Login bem-sucedido!</p>";
            // Redireciona para outra página após o login bem-sucedido
            header('Location: inventario.php');
            exit();
        } else {
            echo "<p class='error-message'>Usuário ou senha inválidos.</p>";
        }
    }
    ?>
</div>

</body>
</html>
