<?php
  include("./Pessoa.php");
  include("./connection.php");

  if($_POST) {

    $campo = $_POST["f_campo"];
    $valor = $_POST["f_valor"];
    $novo_valor = $_POST["f_novo_valor"];

    $query = "UPDATE contatos SET :r_campo = :r_novo_valor where :r_valor";
    $insert = $connection->prepare($query);
    $insert->bindParam(":r_campo", $campo);
    $insert->bindParam(":r_valor", $valor);
    $insert->bindParam(":r_novo_valor", $novo_valor);

    $result = $insert->execute();

    if($result && $insert->rowCount()>0){
        echo "O contato <b>{$campo}</b> foi salvo com sucesso!";
    } else {
        echo "<br><b>Houve erro ao salvar o contato. Contate o professor da matéria!</b>";
    }

    var_dump($result);

  } else {
      header("location: ./cadastro.php");
  }
  
?>