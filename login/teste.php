<?php
include "conexao.php";

// // Verificar a conexão
// if (!$conn) {
//     die("Conexão falhou: " . mysqli_connect_error());
// }

// // Consulta SQL para selecionar todos os valores da coluna "senha1"
// $sql = "SELECT senha1 FROM cadastro";
// $resultado = mysqli_query($conn, $sql);

// // Verificar se a consulta retornou resultados
// if (mysqli_num_rows($resultado) > 0) {
//     // Loop através dos resultados e imprima cada valor da coluna "senha1"
//     while ($linha = mysqli_fetch_assoc($resultado)) {
//         echo $linha["senha1"] . "<br>";
//     }
// } else {
//     echo "Nenhum resultado encontrado.";
// }

// // Desconectar do banco de dados
// mysqli_close($conn);

$senha_digitada = $_POST['senha'];

$sql = "SELECT * FROM cadastro WHERE senha1 = '".md5($senha_digitada)."'";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) == 1) {
    echo "Senha valida";
}

else {
    echo "Senha invalida";
}

mysqli_close();

?>