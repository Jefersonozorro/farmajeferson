<?php 
    require 'conexao.php'; // chama arquivo que cria a conexão
    $nomeMedicamento = $_POST['nomeMedicamento'];
    //$nome = filter_input(INPUT_POST, 'nome');
    $QTDMedicamento = $_POST['QTDMedicamento'];
    $precound = $_POST['precound'];
    $categoria = $_POST['categoria'];
    $validade = $_POST['validade'];
    $sql = $pdo->prepare("INSERT INTO usuario (nomeMedicamento, QTDMedicamento, precound, validade, categoria) VALUES (:nomeMedicamento, :QTDMedicamento, :precound, :validade, :categoria)");
    $sql->bindValue(':nomeMedicamento',$nomeMedicamento);
    $sql->bindValue(':QTDMedicamento',$QTDMedicamento);
    $sql->bindValue(':precound',$precound);
    $sql->bindValue(':categoria',$categoria);
    $sql->bindValue(':validade',$validade);
    // escrevendo na tabela
    $sql->execute();    
header("Location:index.php");
?>