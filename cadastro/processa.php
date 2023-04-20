<?php
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $datanascimento = $_POST['datanascimento'];
    $nome = $_POST['nome'];
    $senha1 = $_POST['senha1'];
    $senha2 = $_POST['senha2'];

    $sql = "INSERT INTO cadastro (email, datanascimento, nome, senha1, senha2) VALUES ('$email', '$datanascimento', '$nome', '$senha1', '$senha2')";


    if (mysqli_query($conn, $sql)) {
        echo "Mensagem enviada com sucesso!";
    }

    else {
        echo "Erro ao enviar a mensagem" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

else {
    echo "Erro ao processar formulario: Método de requisição invalido";
}

?>
