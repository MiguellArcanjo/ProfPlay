<?php
$html = file_get_contents('paginaCadastro.html');

$dom = new DOMDocument();
$dom->LoadHTML($html);

$element = $dom->getElementById('teste');

$classes = explode(' ', $element->getAttribute('class'));

if (in_array('teste2', $classes)) {
    echo 'A classe "teste2" esta presente no elemento';
}

else {
    echo 'A classe "minha classe não esta presente' ;
}

include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $datanascimento = $_POST['datanascimento'];
    $nome = $_POST['nome'];
    $senha1 = $_POST['senha1'];
    $senha2 = $_POST['senha2'];

    $verificar_email = "SELECT * FROM cadastro WHERE email='$email'";
    $resultado = mysqli_query($conn, $verificar_email);

    if (mysqli_num_rows($resultado) > 0) {
        if (in_array('teste2', $classes)) {
            echo 'A classe "teste2" esta presente no elemento';
        }
        
        else {
            echo 'A classe "minha classe não esta presente' ;
        }
    }
    else {

        $sql = "INSERT INTO cadastro (email, datanascimento, nome, senha1, senha2) VALUES ('$email', '$datanascimento', '$nome', '$senha1', '$senha2')";
    
        if (mysqli_query($conn, $sql)) {
            echo "Mensagem enviada com sucesso!";
        }
    
        else {
            echo "Erro ao enviar a mensagem" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}

else {
    echo "Erro ao processar formulario: Método de requisição invalido";
}

?>
