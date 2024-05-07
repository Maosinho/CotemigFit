<?php
$nome ="";
$email = "";
$sexo = "";
$endereco = "";
$numero = "";
$complemento = "";
$bairro = "";
$cidade = "";
$estado = "";
$modalidade = "";

echo "Inserindo dados abaixo...<br>";

require("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $modalidade = $_POST["modalidade"];
}

function inserirRegistro($pdo, $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $estado, $modalidade)
{
    $sql = "INSERT INTO alunos(Nome, email, sexo, endereco, numero, complemento, bairro, cidade, UF, modalidade)
    VALUES (:nome, :email, :sexo, :endereco, :numero, :complemento, :bairro, :cidade, :UF, :modalidade)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
    $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
    $stmt->bindParam(':numero', $numero, PDO::PARAM_STR);
    $stmt->bindParam(':complemento', $complemento, PDO::PARAM_STR);
    $stmt->bindParam(':bairro', $bairro, PDO::PARAM_STR);
    $stmt->bindParam(':cidade', $cidade, PDO::PARAM_STR);
    $stmt->bindParam(':UF', $estado, PDO::PARAM_STR); // Mudança aqui de 'uf' para 'UF'
    $stmt->bindParam(':modalidade', $modalidade, PDO::PARAM_STR);
    return $stmt->execute();
}

	if 	($_SERVER["REQUEST_METHOD"] == "POST") {
    if (inserirRegistro($pdo, $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $estado, $modalidade)) {
        echo "Registro inserido com sucesso! <br> <a href='index.php'>Home</a>";
    } 
    else {
        echo "Erro ao inserir registro";
    }
}
?>