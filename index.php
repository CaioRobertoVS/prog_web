<?php
  include("./Pessoa.php");
  include("./connection.php");
  
  $titulo = "Hello World!";

  $query = "SELECT * FROM contatos ORDER BY nome";
  $select = $connection->prepare($query);
  $result = $select->execute();

  $rows = $select->fetchAll(PDO::FETCH_OBJ);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $titulo ?></title>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">

    <h1 class="text-center"> 
      <?=$titulo ?> 
      <small>
        <?php echo date("d/m/Y H:i:s"); ?> 
      </small> 
    </h1>

    <h3>Lista de pessoas</h3>
    <ul>
      <?php foreach($rows as $contato): ?>
     <li>
        <?php echo $contato->nome?> :
        <?php echo $contato->email?> -
        <?php echo $contato->fone?>
     </li>
     <?php endforeach ?>
    </ul>

    <a class="btn btn-primary" href="\cadastro.php" role="button">Cadastro</a>

  </div>
</body>
</html>