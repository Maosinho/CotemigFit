<?php
    require ('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];

    // Função para deletar o registro no banco de dados
    function excluirRegistro($pdo, $id) {
        $sql = "DELETE FROM alunos WHERE idAluno = $id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }
}
if (excluirRegistro($pdo, $id)) {
    echo "Registro excluído com sucesso!<br>" . "<a href='index.php'>HOME</a>";
} else {
    echo 'Erro ao excluir o registro.';
}
?>