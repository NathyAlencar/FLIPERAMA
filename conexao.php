<?php
    $servidor = "localhost";
    $usuario = "username";
    $senha = "password";
    $db_fliperama = "myDB";

    // Cria a conexão
    $conn = new mysqli($servidor, $usuario, $senha, $db_fliperama);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $contato = $_POST['contato'];
        $mensagem = $_POST['mensagem'];

        $sql = "INSERT INTO MyGuests (nome, email, contato, mensagem)
        VALUES ('$nome', '$email', '$contato', '$mensagem')";

        if ($conn->query($sql) === TRUE) {
            echo "Novo registro criado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>
