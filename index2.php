<?php

// CONECTANDO COM O BANCO DE DADOS
$dbname = "contato"; // nome do banco de dados
$dbhost = "localhost"; // local onde está o banco de dados
$dbuser = "root"; // nome do usuário do bando de dados
$dbpass = ""; // senha do usuário do bando de dados

$pdo = new PDO("mysql:dbname=" . $dbname . ";host:" . $dbhost . "", "" . $dbuser . "", $dbpass);

// SELECIONANDO DADOS NO BANCO DE DADOS

$sql = $pdo->query("SELECT * FROM perfil");

// COLOCANDO DADOS NO ARRAY
if ($sql->rowCount() > 0) {
  $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}


?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixedaaa/">
  <link href="./assets2/bootstrap.min.css" rel="stylesheet">
  <link href="./assets2/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CRUD</a>
    </div>
  </nav>


  
  <main class="container mt-5">
  <a href="index.php"  class="btn btn-info mb-3"> Voltar para o site </a>
    <div class="bg-light p-5 rounded">
      <h1>Read - Lista de Inscritos</h1>
      
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">#</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($lista as $perfil) : ?>
            <tr>
              <th scope="row"><?php echo $perfil['id']; ?></th>
              <td><?php echo $perfil['nome']; ?></td>
              <td><?php echo $perfil['email']; ?></td>
              <td>
                <a href="editar.php?id=<?php echo $perfil['id']; ?>" class="btn btn-warning"> Editar </a>
                <a href="apagar.php?id=<?php echo $perfil['id']; ?>" class="btn btn-danger"> Apagar </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </main>
  <script src="/Projeto_Canvas2/assets2/bootstrap.bundle.min.js"></script>
</body>

</html>