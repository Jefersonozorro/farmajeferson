<?php 
require 'conexao.php';
 $sql = $pdo->query("SELECT * FROM usuario");
// Criando um vetor para receber o resultado da consulta
 $lista = [];
 $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

 //if($sql->rowCount()>0){
 //   $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

 //}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE FARMACIA</title>   
</head>
<body>
    <h1> Sistema de Funcionários</h1>
    <table border="2px">
        <tr>
            <th>ID</th>
            <th>Nome do Medicamento</th>
            <th>Quantidade</th>
            <th>preço por unidade</th>
            <th>Categoria</th>
            <th>Daya de Validade</th>
        </tr>        
        <?php  foreach($lista as $a): ?>
                <tr>
                    <td> <?php echo $a['id']; ?> </td>  
                    <td> <?=$a['nomeMedicamento']; ?> </td>
                    <td> <?php echo $a['QTDMedicamento']; ?> </td>
                    <td> <?php echo $a['precound']; ?> </td>
                    <td> <?php echo $a['categoria']; ?> </td>
                    <td> <?php echo $a['validade']; ?> </td>
                    <td>
                        <a href="editar.php?id=<?=$a['id']; ?>">[Editar]</a>
                        <a href="excluir.php?id=<?=$a['id']; ?>">[Excluir]</a>
                    </td>                
                </tr>                

        <?php  endforeach; ?>    

    </table>
    
            <br>
    <a href="cadastrar.php">Cadastrar Medicamento</a>
   
</body>
</html>