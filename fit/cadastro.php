<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    
    <?php require ("conexao.php");?>

    <div class="container">
    <form action="create.php" method="post">
    <h2>Cadastro de alunos</h2>

  <div class="form-group">
    <label for="exampleInputEmail1">Nome do aluno</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu nome">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Sexo</label>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">M</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">F</label>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Endereco</label>
    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Número</label>
    <input type="text" class="form-control" id="numero" name="numero" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Complemento</label>
    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Bairro</label>
    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Cidade</label>
    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="">
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

  <button type="submit" class="btn btn-primary" method="post">Enviar</button>
  <button type="submit" class="btn btn-primary">Limpar</button>
</form>
    </div>

</body>
</html>