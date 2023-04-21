<?php
$html = file_get_contents('paginaCadastro.html');

$dom = new DOMDocument();
$dom->loadHTML($html);

$element = $dom->getElementById('teste');

$classes = explode(' ', $element->getAttribute('class'));

include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $datanascimento = $_POST['datanascimento'];
    $nome = $_POST['nome'];
    $senha1 = $_POST['senha1'];

    $verificar_email = "SELECT * FROM cadastro WHERE email='$email'";
    $resultado = mysqli_query($conn, $verificar_email);

    if (mysqli_num_rows($resultado) > 0) {
        if (in_array('teste2', $classes)) {
        
            $element->removeAttribute('class');
            
            $element->setAttribute('class', 'teste3');
            
            $html = $dom->saveHTML();
            file_put_contents('paginaCadastro.html', $html);
            header('Location: http://localhost/ProfPlay/cadastro/paginaCadastro.html');
        
        }

        else {
            $element->removeAttribute('class');
            $element->setAttribute('class', 'teste2');

            $html = $dom->saveHTML();
            file_put_contents('paginaCadastro.html', $html);
            header('Location: http://localhost/ProfPlay/cadastro/paginaCadastro.html');
        }
        
    }
    else {

        $sql = "INSERT INTO cadastro (email, datanascimento, nome, senha1, senha2) VALUES ('$email', '$datanascimento', '$nome', MD5('$senha1'), '$senha2')";
    
        if (mysqli_query($conn, $sql)) {
            echo "Mensagem enviada com sucesso";
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
