<?php
require ('conexao.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Função para listar todos os registros do banco de dados
    function listarRegistros($pdo, $id) {
        $sql = "SELECT * FROM alunos WHERE idAluno = $id";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        // Listar registros
        $registros = listarRegistros($pdo, $id);
        foreach ($registros as $registro) {
            if ($registro['idAluno'] == $id) {
                $aux = true;
            }
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Editar Usuário</title>
</head>

<body>
    
<h1>Editar Usuario</h1>
    <?php if (isset($aux)) : ?>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $registro['idAluno']; ?>">

    <div class="form-group">
    <label for="exampleInputEmail1">Nome do aluno</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu nome" value="<?php echo $registro['nome']; ?>" required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" value="<?php echo $registro['email']; ?>" required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Sexo</label>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value = "<?php echo ($registro['sexo'] === 'M') ? 'checked' : ''; ?> " required>
  <label class="form-check-label" for="inlineRadio1">M</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value = "<?php echo ($registro['sexo'] === 'F') ? 'checked' : ''; ?> " required>
  <label class="form-check-label" for="inlineRadio2">F</label>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Endereco</label>
    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="" value="<?php echo $registro['endereco']; ?>" required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Número</label>
    <input type="text" class="form-control" id="numero" name="numero" placeholder="" value="<?php echo $registro['numero']; ?>" required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Complemento</label>
    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="" value="<?php echo $registro['complemento']; ?>" required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Bairro</label>
    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="" value="<?php echo $registro['bairro']; ?>" required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Cidade</label>
    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" value="<?php echo $registro['cidade']; ?>" required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">UF</label>
    <select id="estado" name="estado">
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
    <option value="EX">Estrangeiro</option>
</select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Modalidade</label>
    <select name="modalidade" id="modalidade">
      <option value="pilates">Pilates</option>
      <option value="musculacao">Musculação</option>
      <option value="natacao">Natação</option>
      <option value="zumba">Zumba</option>
    </select>
  </div>

            <input type="submit" class="btn btn-primary" value="Salvar">
        </form>

    <?php else : ?>
        <p>Usuario não encontrado.</p>
    <?php endif; ?>

</body>
</html>