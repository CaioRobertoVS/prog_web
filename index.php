<?php
 include 'Pessoa.php';

    $titulo = "Sai daqui meu chapa!";
    $nomes = array("Joao", "Lucas", "Pedro");

    $pessoa1 = new Pessoa("Pedro","Lucas");
    //echo $pessoa1->getNomeCompleto();

    $pessoa2 = new Pessoa("H","S");
    //echo $pessoa2->getNomeCompleto();

    $pessoa3 = new Pessoa("A","Y");
    //echo $pessoa2->getNomeCompleto();

    $nomes_obj = [
        $pessoa1,
        $pessoa2,
        $pessoa3,
        $pessoa4,
    ];
    
    $obj = "p1";

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $data_nascimento = $_POST["data_nascimento"];

    $pessoa = new Pessoa($nome, $sobrenome);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo $titulo ?></h1>

  <!-- <h2> <?php echo $pessoa1->getNomeCompleto(); ?></h2>
    <h2> <?php echo $pessoa1->getNomeCompleto(); ?></h2> -->

    <h3>
        <ul>
            <?php foreach($nomes_obj as $obj): ?>
            <li> <?= $obj->getNomeCompleto(); ?></li>
            <?php endforeach ?>
        </ul>
    </h3>
</body>
</html>

    
    