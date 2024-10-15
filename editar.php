<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando</title>
</head>
<body>
    <h1>Editando Medicamento</h1>
    <?php 
        require 'conexao.php';
        $id = $_REQUEST["id"];
        $dados = []; // criando variavel vetor
       $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
       $sql->bindValue(":id",$id);
       $sql->execute();

       if($sql->rowCount() > 0){
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
       }else{
            header("Location:index.php");
            exit;
       }     
    ?>
    <form action="editando.php" method="POST" >
        <input  type="hidden" name="id" id="id" value="<?=$dados['id']; ?>">
        <label for="Nome">
            NomedoMedicamento <input type="text" name="Nome do Medicamento" value="<?=$dados['nomeMedicamento']; ?>">
        </label>
        <label for="Quantidade do Medicamento">
        QTDMedicamento <input type="number" name="Quantidade do Medicamento" value="<?=$dados['QTDMedicamento']; ?>">
        </label>
        precound <input type="number" name="Preço  do Medicamento" value="<?=$dados['precound']; ?>">
        </label>
        categoria <input type="text" name="Categoria do Medicamento" value="<?=$dados['categoria']; ?>">
        </label>
        validade <input type="date" name="Validade do Medicamento" value="<?=$dados['validade']; ?>">
        </label>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>