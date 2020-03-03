<?php
  include("./Pessoa.php");
  include("./connection.php");

  if($_POST) {

    $nome = $_POST["f_nome"];
    $email = $_POST["f_email"];
    $fone = $_POST["f_fone"];

    $query = "INSERT INTO contatos (nome, email, fone) VALUES (:r_nome, :r_email, :r_fone)";
    $insert = $connection->prepare($query);
    $insert->bindParam(":r_nome", $nome);
    $insert->bindParam(":r_email", $email);
    $insert->bindParam(":r_fone", $fone);

    $result = $insert->execute();

    if($result && $insert->rowCount()>0){
        echo "O contato <b>{$nome}</b> foi salvo com sucesso!";
    } else {
        echo "<br><b>Houve erro ao salvar o contato. Contate o professor da matéria!</b>";
    }

    var_dump($result);

  } else {
      header("location: ./cadastro.php");
  }
  
?>