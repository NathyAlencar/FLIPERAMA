<?php
    $servidor = "localhost";
    $usuario = "username";
    $senha = "password";
    $db_fliperama = "fliperama";

    // Cria a conexão
    $conn = new mysqli($servidor, $usuario, $senha, $db_fliperama);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "SELECT id, nome, email, contato, mensagem FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Saída de cada linha de dados
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. " - Contato: " . $row["contato"]. " - Mensagem: " . $row["mensagem"]. "<br>";
        }
    } else {
        echo "0 resultados";
    }
    $conn->close();
?>
