<!doctype html>


<html lang="en">

  <head>
  <title>Cadastro de funcionarios </title>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Bootstrap demo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
          </head>



  <body>


  <nav class="navbar bg-dark">
  <div class="container-fluid">  
    <a href="bootstrap.php" class="navbar-brand" style="color:white;">Página principal</a>
    <a href="funcionarios.php" class="navbar-brand" style="color:white;">Funcionários </a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
        <center>
<form class="form-control" action="" method="POST">
                <label>Nome: </label><BR>
                <input class="form-control" type="text" name="nome" required><br>

                <Label>Sobrenome: </label><br>
                <Input class="form-control" type="text" name="sobrenome" required><br>

                <label>Cargo: </label><br>
                <input class="form-control" type="text" name="cargo" required><br>
                
                <label>Salário: </label><br>
                <input class="form-control" type="number" name="salario" required><br>

                
                <br><button type="submit" class="btn btn-success">
                  Salvar

                </button><br>

    </form>
        </center>
<?php

function conexao(){

  $nomeServidor = "localhost";
  $database = "database";
  $usuario = "root";
  $senha = "";
  
  //criar conexão
  $conexao = mysqli_connect($nomeServidor, $usuario, $senha, $database);
  //checagem de conexão
  if(!$conexao){
    die("Conexão Falhou: ".mysqli_connect_error());
  }else{
    echo"conexão com sucesso!";
  }
  return $conexao; 
                }
                
                function inserir($nome, $sobrenome, $cargo, $salario){
$conexao = conexao();
$comando = "INSERT INTO funcionarios(nome,sobrenome,cargo,salario) VALUES ('$nome','$sobrenome','$cargo',$salario)";

if(mysqli_query($conexao, $comando)){
  echo "Registro do funcionario efetuado com sucesso";
}else{
  echo "Erro: ".$comando."<br>".mysqli_error($conexao);

}
}
                if(isset($_POST['nome'])){
                  print_r($_POST);
                  inserir($_POST['nome'], $_POST['sobrenome'], $_POST['cargo'], $_POST['salario']);
                }

?>


    </body>


</html>